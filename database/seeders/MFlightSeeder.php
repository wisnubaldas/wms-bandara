<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Imports\MFlightImport;
use Excel;
class MFlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = Excel::import(new MFlightImport, database_path('factories/m_flight.csv'));
        dump($array);

    }
}
