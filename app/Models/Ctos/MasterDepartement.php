<?php

namespace App\Models\Ctos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterDepartement extends Model
{
    use HasFactory;
    protected $connection= 'rdlogin';
    protected $table = 'masterdepartmen';
    protected $primaryKey = 'DepartmenCode';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'modify_at';
    public function login_departement()
    {
        $this->hasMany(LoginDepartement::class,'DepartmenCode','DepartmenCode');
    }
}
