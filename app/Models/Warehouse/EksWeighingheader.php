<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EksWeighingheader extends Model
{
    use HasFactory;
    protected $connection= 'rdwarehouse_jkt';
    protected $table = "eks_weighingheader";
    protected $primaryKey = 'noid';
    public $timestamps = false;
    public function dtl_weigh()
    {
        return $this->hasOne(EksWeighingdetail::class,'ProofNumber','ProofNumber');
    }
}
