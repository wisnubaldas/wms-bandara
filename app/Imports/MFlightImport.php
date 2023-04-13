<?php

namespace App\Imports;

use App\Models\MFlight;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;
class MFlightImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MFlight([
            'two_letter_code'=>$row['twolettercode'],
            'flight_no'=>$row['flightnumber'],
            'depature_time'=>Carbon::createFromFormat('H:i',$row['timedeparture'])->toTimeString(),
            'arrival_time'=>Carbon::createFromFormat('H:i',$row['timearrival'])->toTimeString(),
        ]);
    }
}
