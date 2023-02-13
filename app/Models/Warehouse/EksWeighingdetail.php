<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EksWeighingdetail extends Model
{
    use HasFactory;
    protected $connection= 'rdwarehouse_jkt';
    protected $table = "eks_weighingdetail";
    protected $primaryKey = 'noid';
    public $timestamps = false;
}
