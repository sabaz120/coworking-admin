<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomReservation extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'room_id',
        'user_id',
        'reservation_status_id',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reservationStatus()
    {
        return $this->belongsTo(ReservationStatus::class);
    }

    public function getRoomNameAttribute()
    {
        return $this->room->name;
    }

    public function getUserNameAttribute()
    {
        return $this->user->name;
    }

    public function getReservationStatusNameAttribute()
    {
        return $this->reservationStatus->name;
    }
}
