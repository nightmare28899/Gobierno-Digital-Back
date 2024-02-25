<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->insert([
            'user_id' => 1, // ID del usuario administrador
            'role_id' => 1, // ID del rol de administrador
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('role_user')->insert([
            'user_id' => 2, // ID del usuario regular
            'role_id' => 2, // ID del rol de usuario
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
