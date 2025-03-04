<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ReservationStatus;
class ReservationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses=[
            'Pendiente',
            'Aceptada',
            'Rechazada',
        ];
        foreach($statuses as $status){
            ReservationStatus::firstOrCreate(['name' => $status]);
        }
    }
}
