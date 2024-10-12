<?php

namespace App\Models\TPS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThInbound extends Model
{
    use HasFactory;

    protected $connection = 'tps_online';

    protected $table = 'th_inbound';

    protected $primaryKey = 'id_';

    // public $incrementing = false;
    // protected $keyType = 'string';
    public $timestamps = false;
    // const CREATED_AT = 'date_create';
    // const UPDATED_AT = 'date_update';
    // protected $appends = ['code', 'status'];
    // public function getCodeAttribute()
    // {
    //     return 'A2';
    // }
    // public function getStatusAttribute()
    // {
    //     return 'Arrival at Incoming warehouse';
    // }
    // // static value untuk model
    // public static function booted()
    // {
    //     parent::boot();
    //     static::creating(function ($user) {
    //         $user->_created_by = auth()->user()->name;
    //     });

    //     static::updating(function ($user) {
    //         $user->_updated_by = auth()->user()->name;
    //     });
    // }
    protected $fillable = ['tps', 'gate_type', 'waybill_smu', 'hawb', 'koli', 'netto', 'volume', 'kindofgood', 'airline_code', 'flight_no', 'origin', 'transit', 'dest', 'shipper_name', 'consignee_name', '_is_active', '_created_by', '_created_at', '_updated_by', '_updated_at', '_remarks_last_update', 'key_upload', 'full_check'];
}
