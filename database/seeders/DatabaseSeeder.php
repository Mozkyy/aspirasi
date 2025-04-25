<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'nik' => '1234567890123456', // NIK 16 digit
            'password' => Hash::make('123'), // Ganti dengan password yang diinginkan
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}