<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisAbsenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('jenis_absens')->insert([
            ['id_act' => 'BD', 'name_act' => 'Bandongan', 'start_time' => '05:15', 'finish_time' => '06:45'],
            ['id_act' => 'AQ', 'name_act' => 'Ngaji Al-Quran', 'start_time' => '15:45', 'finish_time' => '17:30'],
            ['id_act' => 'MH', 'name_act' => 'Mujahadah', 'start_time' => '19:15', 'finish_time' => '20:15'],
            ['id_act' => 'MD', 'name_act' => 'Madrasah Diniyah', 'start_time' => '20:20', 'finish_time' => '21:00'],
        ]);
    }
}
