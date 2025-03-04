<?php

namespace App\Services;

use App\Models\RoomReservation;

class RoomReservationService
{
    public function validateRoomOccuped($room_id, $reservation_date)
    {
        $reservation_date_hour=$reservation_date->copy()->addHour();
        $existReservation = RoomReservation::where('room_id', $room_id)
        ->whereBetween('start_date', [$reservation_date->toDateTimeString(), $reservation_date_hour->toDateTimeString()])
        ->orWhereBetween('end_date', [$reservation_date->toDateTimeString(), $reservation_date_hour->toDateTimeString()])
        ->exists();
        return $existReservation; // Returns true if a reservation  exist, false if not exists
    }
}
