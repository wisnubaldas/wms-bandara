<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpInvoiceheader extends Model
{
    use HasFactory;
    protected $connection= 'rdwarehouse_jkt';
    protected $table = "imp_invoiceheader";
    protected $primaryKey = 'noid';
    public $timestamps = false;
    protected $fillable = array("noid", "InvoiceNumber", "TotalPieces", "TotalCAW", "TotalNetto", "TotalWarehouseFee", "TotalAssistancyFee", "TotalCoolRoomFee", "TotalAirConditioningFee", "TotalColdStorageFee", "TotalStrongRoomFee", "TotalDangerousRoomFee", "TotalOtherFee", "TotalAirportContriFee", "AdministrationFee", "DocumentFee", "SubTotalFee", "TaxFee", "StampFee", "GrandTotalFee", "EmployeeNumber", "DateOfTransaction", "TimeOfTransaction", "PrintNumber", "DRSCNumber", "AirlinesCode", "PaymentCode", "AgreementCode", "KursIDR", "Referensi", "TaxNumber", "CustomerCode", "ShiftCode", "ClearanceType", "SPPB", "tglSPPB", "flagPOD", "void", "token", "ref_invoice", "created_at", "updated_at");
    // const CREATED_AT = 'created_at';

    public function detail()
    {
        return $this->hasOne(ImpInvoicedetail::class,'InvoiceNumber','InvoiceNumber');
    }
    public function customer()
    {
        return $this->hasOne(MstCustomer::class,'CustomerCode','CustomerCode');
    }
    // public function pecah_pos()
    // {
    //     return $this->hasOne(ImpInvoicepecahpos::class,'InvoiceNumber','InvoiceNumber');
    // }
}
