<?php

namespace App\Models\WarehouseJKT;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class MstAirlines.
 */
class MstAirlines extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $connection = 'rdwarehouse_jkt';

    protected $table = 'mst_airlines';

    protected $primaryKey = 'Noid';

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
    protected $fillable = ['Noid', 'TwoLetterCode', 'ThreeLetterCode', 'AirlinesName', 'CountryCode', 'Actived', 'Void', 'KodeGudangByCustom', 'WHcode', 'activeGud', 'flag_ekspor', 'flag_import', 'flag_outgoing', 'flag_incoming', 'flag_plp', 'created_at'];
}
