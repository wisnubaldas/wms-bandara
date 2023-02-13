<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpDeliorderheader extends Model
{
    use HasFactory;
    protected $connection= 'rdwarehouse_jkt';
    protected $table = 'imp_deliorderheader';
    protected $primaryKey = 'noid';
    public function detail()
    {
        return $this->hasOne(ImpDeliorderdetail::class,'DONumber','DONumber');
    }
    public function inv()
    {
        return $this->hasOne(ImpInvoiceheader::class,'InvoiceNumber','InvoiceNumber');
    }
}
