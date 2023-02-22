<?php

namespace App\Models\Ctos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginTps extends Model
{
    use HasFactory;
    protected $connection= 'rdlogin';
    protected $table = 'logintps';
    protected $primaryKey = 'noid';
    // public $incrementing = false;
    // protected $keyType = 'string';
    public $timestamps = false;
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'modify_at';
    public function master_tps()
    {
        return $this->hasOne(MasterTps::class,'TPScode','TPScode');
    }
}
