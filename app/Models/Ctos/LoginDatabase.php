<?php

namespace App\Models\Ctos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginDatabase extends Model
{
    use HasFactory;
    protected $connection= 'rdlogin';
    protected $table = 'logindatabase';
    protected $primaryKey = 'Noid';
    // public $incrementing = false;
    // protected $keyType = 'string';
    public $timestamps = false;
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'modify_at';
    // public function master_departement()
    // {
    //      return $this->hasOne(MasterDepartement::class, 'DepartmenCode','DepartmenCode');
    // }
}
