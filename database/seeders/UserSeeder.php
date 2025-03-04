<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole=Role::where('name', 'Administrador')->first();
        $u=User::firstOrCreate(
            ['email' => 'admin@twgroup.com'],[
                'name' => 'admin',
                'password' => bcrypt('123456')
        ]);
        $u->syncRoles([$adminRole]);
    }
}
