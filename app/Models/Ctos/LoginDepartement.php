<?php

namespace App\Models\Ctos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginDepartement extends Model
{
    use HasFactory;
    protected $connection= 'rdlogin';
    protected $table = 'logindepartmen';
    protected $primaryKey = 'noid';
    // public $incrementing = false;
    // protected $keyType = 'string';
    public $timestamps = false;
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'modify_at';
    public function master_departement()
    {
         return $this->belongsTo(MasterDepartement::class, 'DepartmenCode','DepartmenCode');
    }
}
