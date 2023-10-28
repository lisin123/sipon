<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('santris')->insert([
            ['nis' => '1000120001', 'name' => 'Wasis P', 'password' => '123', 'kelas' => '1'],
            ['nis' => '1000120002', 'name' => 'Wasis Pbd', 'password' => '123', 'kelas' => '2'],
            ['nis' => '1000120003', 'name' => 'Wasis Pam', 'password' => '123', 'kelas' => '3'],
            ['nis' => '1000120004', 'name' => 'Wasis Pmb', 'password' => '123', 'kelas' => '4'],
            ['nis' => '1000120005', 'name' => 'Wasis Pmbd', 'password' => '123', 'kelas' => '5'],
            ['nis' => '1000120006', 'name' => 'Wasis Pb', 'password' => '123', 'kelas' => '1'],
            ['nis' => '1000120007', 'name' => 'Wasis Pdi', 'password' => '123', 'kelas' => '2'],
            ['nis' => '1000120008', 'name' => 'Wasis Pbudi', 'password' => '123', 'kelas' => '3'],
            ['nis' => '1000120009', 'name' => 'Wasis Pbdi', 'password' => '123', 'kelas' => '4'],
            ['nis' => '1000120010', 'name' => 'Wasis Budi', 'password' => '123', 'kelas' => '5'],
            ['nis' => '1000120011', 'name' => 'Wasis Padi', 'password' => '123', 'kelas' => '1'],
            ['nis' => '1000120012', 'name' => 'Wasis Pbui', 'password' => '123', 'kelas' => '2'],
            ['nis' => '1000120013', 'name' => 'Wasis Pmbui', 'password' => '123', 'kelas' => '3'],
            ['nis' => '1000120014', 'name' => 'Wasis Pambi', 'password' => '123', 'kelas' => '4'],
            ['nis' => '1000120015', 'name' => 'Wasis Paudi', 'password' => '123', 'kelas' => '5'],
        ]);
    }
}
