<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('warga')->insert([
            'nama' => 'Budi Santoso',
            'nik' => '1234567890123456',
            'email' => 'budi@gmail.com',
            'password' => '123',
            'gambar' => null, // belum ada gambar di seeder
        ]);
        
    }
}
