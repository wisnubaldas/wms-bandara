<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EksInvoiceheader extends Model
{
    use HasFactory;
    protected $connection= 'rdwarehouse_jkt';
    protected $table = "eks_invoiceheader";
    protected $primaryKey = 'noid';
    public $timestamps = false;
    protected $fillable = array("noid", "InvoiceNumber", "TotalPieces", "TotalCAW", "TotalNetto", "TotalWarehouseFee", "TotalAssistancyFee", "TotalCoolRoomFee", "TotalAirConditioningFee", "TotalColdStorageFee", "TotalStrongRoomFee", "TotalDangerousRoomFee", "TotalOtherFee", "TotalAirportContriFee", "AdministrationFee", "DocumentFee", "SubTotalFee", "TaxFee", "StampFee", "GrandTotalFee", "EmployeeNumber", "DateOfTransaction", "TimeOfTransaction", "PrintNumber", "DRSCNumber", "DateOfDRSC", "AirlinesCode", "PaymentCode", "AgreementCode", "KursIDR", "Referensi", "TaxNumber", "CustomerCode", "ShiftName", "void", "token", "created_at", "updated_at");
    public function detail()
    {
        return $this->hasOne(EksInvoicedetail::class,'InvoiceNumber','InvoiceNumber');
    }
    
}
