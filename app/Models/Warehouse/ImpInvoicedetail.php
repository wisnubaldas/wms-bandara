<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpInvoicedetail extends Model
{
    use HasFactory;
    protected $connection= 'rdwarehouse_jkt';
    protected $table = "imp_invoicedetail";
    protected $primaryKey = 'noid';
    public $timestamps = false;
    public function do()
    {
        return $this->hasOne(ImpDeliorderdetail::class,'DONumber','DeliveryOrderNumber');
    }
    public function hosts()
    {
        return $this->hasOne(ImpHostAwb::class,'HostAWB','MasterAWB');
    }
}
