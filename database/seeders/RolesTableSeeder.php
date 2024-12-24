<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Role::Create(['name'=>'Administrador']);
        // Role::Create(['name'=>'Asesor']);
        // Role::Create(['name'=>'Usuario']);

        // Así viene en la documentación
        DB::table('users')->insert([
            ['name'=>'Administrador'],
            ['name'=>'Asesor'],
            ['name'=>'Usuario'],
        ]);
    }
}
