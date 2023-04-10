<?php

namespace App\Models\Tps;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MKdDokInout extends Model
{
    use HasFactory;
    protected $connection= 'tps_online';
    protected $table = 'm_kd_dok_inout';
    protected $primaryKey = 'id_';
    // public $incrementing = false;
    // protected $keyType = 'string';
    // public $timestamps = false;
    const CREATED_AT = '_created_at';
    const UPDATED_AT = '_updated_at';
}
