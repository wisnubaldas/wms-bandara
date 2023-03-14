<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncWeighingheader extends Model
{
    use HasFactory;
    
    protected $connection= 'rdwarehouse_jkt';
    protected $table = 'inc_weighingheader';
    protected $primaryKey = 'noid';
    // public $incrementing = false;
    // protected $keyType = 'string';
    public $timestamps = false;

    // const CREATED_AT = '_created_at';
    // const UPDATED_AT = '_updated_at';
}
