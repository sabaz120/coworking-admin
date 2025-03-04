<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    RoomReservation,
    ReservationStatus
};
class DashboardController extends Controller
{
    public function index(){
        $pendingStatus=ReservationStatus::where('name', 'Pendiente')->first();
        $confirmedStatus=ReservationStatus::where('name', 'Aceptada')->first();
        $canceledStatus=ReservationStatus::where('name', 'Rechazada')->first();
        $pendingReservations=RoomReservation::where('reservation_status_id', $pendingStatus->id)
        ->where('user_id', auth()->user()->id)
        ->count();
        $confirmedReservations=RoomReservation::where('reservation_status_id', $confirmedStatus->id)
        ->where('user_id', auth()->user()->id)
        ->count();
        $canceledReservations=RoomReservation::where('reservation_status_id', $canceledStatus->id)
        ->where('user_id', auth()->user()->id)
        ->count();
        $nextReservations=RoomReservation::where('reservation_status_id', $confirmedStatus->id)
        ->where('start_date', '>=', \Carbon\Carbon::now())
        ->where('user_id', auth()->user()->id)
        ->orderBy('start_date', 'asc')
        ->limit(5)
        ->get();
        return view('dashboard',[
            'pendingReservations'=>$pendingReservations,
            'confirmedReservations'=>$confirmedReservations,
            'canceledReservations'=>$canceledReservations,
            'nextReservations'=>$nextReservations
        ]);
    }
}
