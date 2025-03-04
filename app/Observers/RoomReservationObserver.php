<?php

namespace App\Observers;

use App\Models\RoomReservation;

class RoomReservationObserver
{
    /**
     * Handle the RoomReservation "created" event.
     */
    public function created(RoomReservation $roomReservation): void
    {
        try{
            $end_date=$roomReservation->start_date->copy()->addHour()->format('Y-m-d\TH:i:s');
            $roomReservation->updateQuietly([
                "end_date"=>$end_date
            ]);
        }catch(\Exception $e){
            \Log::error([
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'roomReservation' => $roomReservation->toArray()
            ]);
        }
    }

    /**
     * Handle the RoomReservation "updated" event.
     */
    public function updated(RoomReservation $roomReservation): void
    {
        try{
            if($roomReservation->isDirty('start_date')){
                //If the start_date is changed, the end_date must be changed too.
                $end_date=$roomReservation->start_date->copy()->addHour()->format('Y-m-d\TH:i:s');
                $roomReservation->updateQuietly([
                    "end_date"=>$end_date
                ]);
            }
        }catch(\Exception $e){
            \Log::error([
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'roomReservation' => $roomReservation->toArray()
            ]);
        }
    }

    /**
     * Handle the RoomReservation "deleted" event.
     */
    public function deleted(RoomReservation $roomReservation): void
    {
        //
    }

    /**
     * Handle the RoomReservation "restored" event.
     */
    public function restored(RoomReservation $roomReservation): void
    {
        //
    }

    /**
     * Handle the RoomReservation "force deleted" event.
     */
    public function forceDeleted(RoomReservation $roomReservation): void
    {
        //
    }
}
