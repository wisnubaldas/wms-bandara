<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpInvoicepecahpos extends Model
{
    use HasFactory;
    protected $connection= 'rdwarehouse_jkt';
    protected $table = "imp_invoicepecahpos";
    protected $primaryKey = 'noid';
    public $timestamps = false;
    public function do()
    {
        return $this->hasOne(ImpDeliorderheader::class,'MasterAWB','MasterAWB');
    }
    public function weighing()
    {
        return $this->hasOne(EksWeighingheader::class,'InvoiceNumber','referensi');
    }
}
