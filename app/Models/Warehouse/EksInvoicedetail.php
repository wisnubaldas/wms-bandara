<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EksInvoicedetail extends Model
{
    use HasFactory;
    protected $connection= 'rdwarehouse_jkt';
    protected $table = "eks_invoicedetail";
    protected $primaryKey = 'noid';
    public $timestamps = false;

    public function master()
    {
        return $this->hasOne(EksMasterwaybill::class,'MasterAWB','MasterAWB');
    }
    public function weighing()
    {
        return $this->hasOne(EksWeighingheader::class,'ProofNumber','ProofNumber');
    }
}
