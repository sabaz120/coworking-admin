<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Models
use \App\Models\{
    RoomReservation,
    Room,
    ReservationStatus
};
use DB;
//Services
use App\Services\RoomReservationService;
class RoomReservationController extends Controller
{
    public function index(Request $request){
        $page=$request->input('page');
        $reservations=RoomReservation::where('user_id', auth()->user()->id)
            ->with('room')
            ->orderBy('created_at', 'desc')
            ->paginate(12);
        return view('client_dashboard.room_reservations.index', [
            'reservations'=>$reservations,
            'page'=>$page
        ]);
    }

    public function create(){
        $rooms=Room::all();
        return view('client_dashboard.room_reservations.create', [
            'rooms'=>$rooms,
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'room_id'=>'required|exists:rooms,id',
            'reservation_date'=>'required|date',
            'reservation_time'=>'required',
        ]);
        try{
            DB::beginTransaction();
            $reservationDate=\Carbon\Carbon::createFromFormat(
                'Y-m-d H:i',
                $request->input('reservation_date').' '.$request->input('reservation_time')
            );
            $roomReservationService=new RoomReservationService();
            $roomOccuped=$roomReservationService->validateRoomOccuped($request->input('room_id'), $reservationDate);
            if($roomOccuped){
                return redirect()->back()->withInput()->with('status', 'room-occuped');
            }
            $reservation=new RoomReservation();
            $reservation->user_id=auth()->user()->id;
            $reservation->room_id=$request->input('room_id');
            $reservation->start_date=\Carbon\Carbon::createFromFormat(
                'Y-m-d H:i',
                $request->input('reservation_date').' '.$request->input('reservation_time')
            );
            $reservation->reservation_status_id=ReservationStatus::where('name', 'Pendiente')->first()->id;
            $reservation->save();
            DB::commit();
            return redirect()->route('room-reservations')->with('status', 'reservation-created');
        }catch(\Exception $e){
            DB::rollBack();
            return redirect()->route('room-reservations')->with('status', $e->getMessage());
        }
    }

    public function delete($id){
        try{
            DB::beginTransaction();
            $reservation=RoomReservation::find($id);
            if($reservation->user_id!=auth()->user()->id){
                return redirect()->route('room-reservations')->with('status', 'not-authorized');
            }
            $now=\Carbon\Carbon::now();
            if($reservation->end_date->lt($now)){
                return redirect()->route('room-reservations')->with('status', 'No puede eliminar esta reservación, ya ha finalizado');
            }
            $statuses=ReservationStatus::whereIn('name', ['Aceptada','Rechazada'])
            ->get()->pluck('id')->toArray();
            if(in_array($reservation->reservation_status_id,$statuses)){
                return redirect()->route('room-reservations')->with('status', 'No puede eliminar esta reservación, ya ha sido procesada');
            }
            $reservation->delete();
            DB::commit();
            return redirect()->route('room-reservations')->with('status', 'reservation-deleted');
        }catch(\Exception $e){
            DB::rollBack();
            return redirect()->route('room-reservations')->with('status', $e->getMessage());
        }
    }
}
