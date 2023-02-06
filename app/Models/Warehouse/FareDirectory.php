<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FareDirectory extends Model
{
    use HasFactory;
    protected $connection= 'rdwarehouse_jkt';
    protected $table = 'fare_directory';
    protected $primaryKey = 'noid';
    static public function wh_fee($inv)
    {
        return self::select('ItemCode','valueitem')
                ->join('imp_invoiceheader', 'fare_directory.AgreementCode', '=', 'imp_invoiceheader.AgreementCode')
                ->where('fare_directory.warehouseCode','WHIMP')
                ->where('fare_directory.ItemCode', 'WFEE')
                ->whereRaw('imp_invoiceheader.DateOfTransaction between datefrom and dateuntil')
                ->whereRaw('imp_invoiceheader.AgreementCode = fare_directory.AgreementCode')
                ->where('InvoiceNumber',$inv)
                ->first();

    }
    static public function wh_fee_export($inv)
    {
        return self::select('ItemCode','valueitem')
                ->join('eks_invoiceheader', 'fare_directory.AgreementCode', '=', 'eks_invoiceheader.AgreementCode')
                ->where('fare_directory.warehouseCode','WHIMP')
                ->where('fare_directory.ItemCode', 'WFEE')
                ->whereRaw('eks_invoiceheader.DateOfTransaction between datefrom and dateuntil')
                ->whereRaw('eks_invoiceheader.AgreementCode = fare_directory.AgreementCode')
                ->where('InvoiceNumber',$inv)
                ->first();

    }

}
