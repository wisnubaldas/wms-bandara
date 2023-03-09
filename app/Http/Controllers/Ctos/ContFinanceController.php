<?php

namespace App\Http\Controllers\Ctos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\FareDirectory;
use App\Models\FareAgree;
use App\Models\TaxTransaction;
class ContFinanceController extends Controller
{
    public function __construct() {
        $this->fare_directory = FareDirectory::class;
        $this->fare_agree = FareAgree::class;
        $this->tax_transact = TaxTransaction::class;
    }
    public function get_drsc_import($shifname,$dateDRSC,$PaymentCode,$token)
	{
        return DB::connection("rdwarehouse_jkt")
        ->select("CALL Get_drsc_import('".$shifname."','".$dateDRSC."','".$PaymentCode."','".$token."');");
	}
	
	public function get_drsc_ekspor($shifname,$dateDRSC,$PaymentCode,$token)
	{
			return DB::connection("rdwarehouse_jkt")
            ->select("CALL Get_DRSC_ekspor('".$shifname."','".$dateDRSC."','".$PaymentCode."','".$token."');");
	}
	
	
	public function get_list_basicprice($LocationCode,$WarehouseCode,$AgreementCode,$Datetransaction,$totOverstay)
	{
        $this->fare_directory->where('LocationCode',$LocationCode);
        $this->fare_directory->where('WarehouseCode',$WarehouseCode);
        $this->fare_directory->where('AgreementCode',$AgreementCode);
        $this->fare_directory->where('Datefrom','<=',$Datetransaction);
        $this->fare_directory->where('DateUntil','>=',$Datetransaction);
        $this->fare_directory->where('startday','<=',$totOverstay);
        $this->fare_directory->where('untilday','>=',$totOverstay);
        return $this->fare_directory->get();
	}
	
	public function get_list_aggrement($WarehouseCode,$DatabaseCode,$kd_gudang)
	{
		$this->fare_agree->select('agreementcode','descriptionagreement');
		$this->fare_agree->join('fare_agreelog','fare_agreelog.agreementcode','=','fare_agree.agreementcode','inner');
		$this->fare_agree->where('warehouseCode=',$WarehouseCode);		
		$this->fare_agree->where('DatabaseCode=',$DatabaseCode);
		$this->fare_agree->where('kd_gudang=',$kd_gudang);
		$query = $this->fare_agree->get();
	}
	
	public function list_fare_directory($WarehouseCode,$AgreementCode)
	{
		$this->fare_directory->where('WarehouseCode=',$WarehouseCode);
		$this->fare_directory->where('AgreementCode=',$AgreementCode);
		return $this->fare_directory->get();
	}
	
	public function get_list_pajakBynumber($token,$TaxAwal,$TaxAkhir)
	{
		$this->tax_transact->where('void=0');
		$this->tax_transact->where('token',$token);
		$this->tax_transact->whereRaw("FakturNumber >='".URLDECODE($TaxAwal)."' AND FakturNumber  <='".URLDECODE($TaxAkhir)."'");
		return $this->tax_transact->get();
	}
	
	public function get_list_pajakBydate($token,$DateFrom,$DateUntil)
	{
		$this->db7->distinct();
		$this->db7->select("a.*,b.HostMAWB");
		$this->db7->from('tax_transaction a');
		$this->db7->join('imp_invoicedetail b','b.InvoiceNumber = a.InvoiceNumber','inner');
		$this->db7->where('a.token',$token);
		$this->db7->where("DateOfFaktur >='".URLDECODE($DateFrom)."' AND DateOfFaktur  <='".URLDECODE($DateUntil)."'");
		$this->db7->where('a.void=0');
		$query_1 = $this->db7->get_compiled_select();
		
		$this->db7->distinct();
		$this->db7->select('a.*,b.ProofNumber AS HostMAWB ');
		$this->db7->from('tax_transaction a');
		$this->db7->join('eks_invoicedetail b','b.InvoiceNumber = a.InvoiceNumber','inner');
		$this->db7->where('a.token',$token);
		$this->db7->where("DateOfFaktur >='".URLDECODE($DateFrom)."' AND DateOfFaktur  <='".URLDECODE($DateUntil)."'");
		$this->db7->where('a.void=0');
		$query_2 = $this->db7->get_compiled_select();
		$query = $this->db7->query($query_1 . ' UNION ' . $query_2);
		return $query->result();
		
	}
	
	public function get_totalfaktur($warehouse_npwp)
	{
        $this->db7->select('COUNT(noid) AS totalnumber');
		$this->db7->where('void=0');
		$this->db7->where('warehouse_npwp',$warehouse_npwp);
		$this->db7->where("invoicenumber IS NULL or invoicenumber =''");
		$query = $this->db7->get('mst_tax');
	}
	
	public function get_deposit_invoice($InvoiceNumber)
	{
		$this->db7->where('InvoiceNumber=',$InvoiceNumber);
		$query = $this->db7->get('mst_depositdetail');
	}
	
	public function get_list_depositheader($DepositCode)
	{
		$this->db7->where('DepositCode=',$DepositCode);
		$query = $this->db7->get('mst_depositheader');
		
	}
	
	public function get_list_depositdetail($WarehouseCode,$DepositCode,$firstdate,$lastdate)
	{
		$this->db7->where('WarehouseCode=',$WarehouseCode);
		$this->db7->where('DepositCode=',$DepositCode);
		$this->db7->where('DateOfTransaction>=',$firstdate);
		$this->db7->where('DateOfTransaction<=',$lastdate);
		$this->db7->order_by('DateOfTransaction');
		$this->db7->order_by('TimeOfTransaction');
		$query = $this->db7->get('mst_depositdetail');
		
	}
	public function get_Summary_deposit($WarehouseCode,$DepositCode,$firstdate)
	{
		$query=$this->db7->query("CALL Get_data_deposit('".$DepositCode."','".$WarehouseCode."','".$firstdate."')");
	}
	
	public function get_list_depositnominal($DepositCode,$WarehouseCode=null)
	{
		if(!is_null($WarehouseCode))$this->db7->where('WarehouseCode',$WarehouseCode);
		$this->db7->where('WarehouseCode=',$WarehouseCode);
		$this->db7->where('DepositCode=',$DepositCode);
		$query = $this->db7->get('mst_depositnominal');
	}
	
	public function get_list_depositor($udepositor=null)
	{
		$this->db7->select('a.*,c.CompanyName');
		$this->db7->from('mst_depositheader a');
		$this->db7->join('mst_customer c','a.DepositCode=c.CustomerCode','inner');
		if(!is_null($udepositor))$this->db7->like('CompanyName',$udepositor);		
		$query = $this->db7->get();
	}
	
	public function get_nomor_tax($warehouse_npwp)
	{
		$this->db7->where("invoicenumber IS NULL OR invoicenumber =''");
		$this->db7->where('void=0');
		$this->db7->where('warehouse_npwp=',$warehouse_npwp);
		$this->db7->order_by('taxnumber');
		$this->db7->limit(1);
		$query = $this->db7->get('mst_tax');
	}
}
