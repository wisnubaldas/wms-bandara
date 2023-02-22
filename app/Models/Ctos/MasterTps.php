<?php

namespace App\Models\Ctos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterTps extends Model
{
    use HasFactory;
    protected $connection= 'rdlogin';
    protected $table = 'mastertps';
    protected $primaryKey = 'TPScode';
    // public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'modify_at';
}
