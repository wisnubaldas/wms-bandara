<?php

namespace App\Models\Tps;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThInbound extends Model
{
    use HasFactory;
    protected $connection= 'tps_online';
    protected $table = 'th_inbound';
    protected $primaryKey = 'id_';
    // public $incrementing = false;
    // protected $keyType = 'string';
    // public $timestamps = false;
    const CREATED_AT = '_created_at';
    const UPDATED_AT = '_updated_at';
    public function delivery_aircarft()
    {
        return $this->hasOne(ThInboundDeliveryAircarft::class, 'id_header','id_');
    }
}
