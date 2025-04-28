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
            'jabatan' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'), // Ganti dengan password yang diinginkan
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $this->call(WargaSeeder::class);
    }
}