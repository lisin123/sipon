<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use SebastianBergmann\Type\NullType;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ijin_kegiatan')->insert([
            ['id_act' => 'MD', 'nis' => '1000120014', 'date' => '28/10/2023', 'reason' => 'praktikum', 'status' => NULL],
            ['id_act' => 'MD', 'nis' => '1000120015', 'date' => '28/10/2023', 'reason' => 'praktikum', 'status' => NULL],
            ['id_act' => 'MH', 'nis' => '1000120015', 'date' => '28/10/2023', 'reason' => 'praktikum', 'status' => NULL] 
        ]);
    }
}
