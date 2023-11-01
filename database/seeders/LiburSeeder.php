<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LiburSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('liburs')->insert([
            [ 'id_act' => 'BD', 'date' => '28/10/2023', 'reason' => 'fosilatama'],
        ]);
    }
}
