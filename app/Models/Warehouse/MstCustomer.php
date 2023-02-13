<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstCustomer extends Model
{
    use HasFactory;
    protected $connection= 'rdwarehouse_jkt';
    protected $table = 'mst_customer';
    protected $primaryKey = '_id';
    protected $fillable = array("_id", "CustomerCode", "CompanyName", "PICName", "Address1", "Address2", "City", "PostCode", "CountryCode", "MobileNumber", "FaxNumber", "Phonenumber", "EmailAddress", "NPWPNumber", "ContactIdentifier", "ContactNumber", "EmployeeNumber", "flag_faktur", "Dom_member", "int_member", "DateEntry", "TimeEntry", "void", "created_at");
    
}
