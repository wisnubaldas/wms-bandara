<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpInvoiceheader extends Model
{
    use HasFactory;
    protected $connection= 'rdwarehouse_jkt';
    protected $table = "imp_invoiceheader";
    protected $primaryKey = 'noid';
    public $timestamps = false;

    // const CREATED_AT = 'created_at';

    public function detail()
    {
        return $this->hasMany(ImpInvoicedetail::class,'InvoiceNumber','InvoiceNumber');
    }
    // public function pecah_pos()
    // {
    //     return $this->hasOne(ImpInvoicepecahpos::class,'InvoiceNumber','InvoiceNumber');
    // }
}
