<?php

namespace App\Models\WarehouseJKT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstCustomer extends Model
{
    use HasFactory;

    protected $connection = 'rdwarehouse_jkt';

    protected $table = 'mst_customer';

    protected $primaryKey = '_id';
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
    protected $fillable = ['_id', 'CustomerCode', 'CompanyName', 'PICName', 'Address1', 'Address2', 'City', 'PostCode', 'CountryCode', 'MobileNumber', 'FaxNumber', 'Phonenumber', 'EmailAddress', 'NPWPNumber', 'ContactIdentifier', 'ContactNumber', 'EmployeeNumber', 'flag_faktur', 'Dom_member', 'int_member', 'DateEntry', 'TimeEntry', 'void', 'created_at'];
}
