<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $connection = 'sqlite';
    protected $table = 'menus';
    protected $primaryKey = 'id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    // public $timestamps = false;
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
    protected $fillable = ['parent_id', 'nama', 'icon', 'label', 'badge', 'active', 'right_icon', 'path'];
}
