<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PulangCutiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ijin_pulang_cutis')->insert([
            [ 'type' => 'P', 'nis' => '1000120013', 'reason' => 'pulang', 'start_date' => '28/10/2023', 'finish_date' => '30/10/2023', 'is_come' => 'False', 'late' => NULL, 'charge' => NULL, 'is_paid' => NULL],
            [ 'type' => 'P', 'nis' => '1000120014', 'reason' => 'pulang', 'start_date' => '28/10/2023', 'finish_date' => '30/10/2023', 'is_come' => 'True', 'late' => '10', 'charge' => '100.000', 'is_paid' => NULL],
            [ 'type' => 'P', 'nis' => '1000120012', 'reason' => 'pulang', 'start_date' => '28/10/2023', 'finish_date' => '30/10/2023', 'is_come' => 'False', 'late' => '2', 'charge' => '20.000', 'is_paid' => 'True'],
            [ 'type' => 'C', 'nis' => '1000120012', 'reason' => 'magang', 'start_date' => '28/10/2023', 'finish_date' => '28/12/2023', 'is_come' => 'False', 'late' => NULL, 'charge' => NULL, 'is_paid' => NULL],
            [ 'type' => 'C', 'nis' => '1000120013', 'reason' => 'kkn', 'start_date' => '28/10/2023', 'finish_date' => '28/12/2023', 'is_come' => 'True', 'late' => '3', 'charge' => '30.000', 'is_paid' => NULL],
            [ 'type' => 'C', 'nis' => '1000120014', 'reason' => 'dinas kerja', 'start_date' => '28/10/2023', 'finish_date' => '28/12/2023', 'is_come' => 'True', 'late' => '0', 'charge' => '0', 'is_paid' => 'True'],
            
        ]);
    }
}
