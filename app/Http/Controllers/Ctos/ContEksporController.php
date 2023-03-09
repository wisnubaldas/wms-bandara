<?php

namespace App\Http\Controllers\Ctos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Warehouse\EksHostawb;
use App\Models\Warehouse\EksWeighingHeader;
use App\Models\Warehouse\EksApproval;
use App\Models\Warehouse\EksBooking;
use App\Models\Warehouse\EksDokcustom;
use App\Models\Warehouse\EksMasterwaybill;
use App\Models\Warehouse\EksSchedule;
use App\Models\Warehouse\EksWeighingdetail;
use App\Models\Warehouse\EksWeighingvol;
use App\Models\Warehouse\EksWeighingspechand;
class ContEksporController extends Controller
{
    public function __construct() {
        $this->eks_host_awb = EksHostawb::class;
        $this->eks_weighing_h = EksWeighingHeader::class;
        $this->eks_approval = EksApproval::class;
        $this->eks_booking = EksBooking::class;
        $this->eks_dok_custom = EksDokcustom::class;
        $this->eks_master = EksMasterwaybill::class;
        $this->eks_schedule = EksSchedule::class;
        $this->eks_weighing_d = EksWeighingdetail::class;
        $this->eks_weighing_vol = EksWeighingvol::class;
        $this->eks_weighing_spec = EksWeighingspechand::class;

    }
    public function get_Monitoring_hawb_for_approval($token)
    {
		$this->eks_host_awb->where('void',0);
		$this->eks_host_awb->where('Status',0);
		return $this->eks_host_awb->get();
    }
    public function get_Monitoring_CWP_for_invoice($token, $ProofNumber=null)
    {
        $this->eks_weighing_h->where('void',0)
                ->where('paymentcode',0)
                ->where('token',$token);
        if($ProofNumber){
            $this->eks_weighing_h->like('ProofNumber',$ProofNumber);
        }
        $this->eks_weighing_h->whereRaw("(InvoiceNumber='' OR InvoiceNumber IS NULL)");
        $this->eks_weighing_h->orderBy('DateOfFlight')->limit(50);
        return $this->eks_weighing_h->get();
    }
    public function get_list_eks_approval($token,$MasterAWB=null,$HostAWB=null)
    {
		$this->eks_approval->where('token',$token);		
		$this->eks_approval->where('void',0);
		if(!is_null($MasterAWB))$this->eks_approval->where('MasterAWB',$MasterAWB);	
		if(!is_null($HostAWB))$this->eks_approval->where('HostAWB=',$HostAWB);	
		$this->eks_approval->orderBy('DateOfSLI','DESC');	
		$this->eks_approval->limit(500);
		return $this->eks_approval->get();
    }
    public function get_eks_booking($token,$AirlinesCode,$FlightNo,$DateOfFlight)
    {
		$this->eks_booking->where('token',$token);			
		$this->eks_booking->where('AirlinesCode',$AirlinesCode);
		$this->eks_booking->where('FlightNo',$FlightNo);
		$this->eks_booking->where('DateOfFlight',$DateOfFlight);
		$this->eks_booking->where('void',0);
		$this->eks_booking->limit(50);
		return $this->eks_booking->get();
    }
    public function get_list_eks_booking($token,$MasterAWB=null)
    {
		$this->eks_booking->where('token',$token);
		if(!is_null($MasterAWB))$this->eks_booking->where('MasterAWB',$MasterAWB);
		$this->eks_booking->where('void',0);
		$this->eks_booking->order_by('DateOfFlight','DESC');	
		$this->eks_booking->limit(50);
		return $this->eks_booking->get();
    }
    public function get_table_npe($token,$namafield,$isifield)
    {
		$this->eks_dok_custom->where('token',$token);	
		$this->eks_dok_custom->where('void',0);
		$this->eks_dok_custom->where($namafield,$isifield);	
		$this->eks_dok_custom->limit(50);
		return $this->eks_dok_custom->get();
    }
    public function get_list_eks_dokcustom($token,$InvoiceNumber=null)
    {
		$this->eks_dok_custom->where('token',$token);	
		$this->eks_dok_custom->where('void=0');
		if(!is_null($InvoiceNumber))$this->eks_dok_custom->where('InvoiceNumber',$InvoiceNumber);	
		$this->eks_dok_custom->limit(50);
		return $this->eks_dok_custom->get();
    }
    public function get_list_eks_hostawb($token,$MasterAWB=null,$HostAWB=null)
    {
		$this->eks_host_awb->where('token',$token);	
		if(!is_null($MasterAWB))$this->eks_host_awb->where('MasterAWB',$MasterAWB);	
		if(!is_null($HostAWB))$this->eks_host_awb->where('HostAWB',$HostAWB);	
		$this->eks_host_awb->where('void',0);
		$this->eks_host_awb->limit(50);
		return $this->eks_host_awb->get();
    }
    public function get_list_eks_masterwaybill($token,$MasterAWB=null)
    {
		$this->eks_master->where('token',$token);	
		if(!is_null($MasterAWB))$this->eks_master->where('MasterAWB',$MasterAWB);	
		$this->eks_master->where('void',0);
		$this->eks_master->limit(50);
		return $this->eks_master->get();
    }
    public function get_list_eks_schedule($AirlinesCode=null)
    {
		if(!is_null($AirlinesCode))$this->eks_schedule->where('AirlinesCode',$AirlinesCode);	
		$this->eks_schedule->limit(50);
		return $this->eks_schedule->get();
    }
    public function get_list_waybill_weighing($token,$MasterAWB,$HostAWB=null)
    {
		$this->eks_weighing_d->where('token',$token);	
		$this->eks_weighing_d->where('MasterAWB',$MasterAWB);	
		if(!is_null($HostAWB))$this->eks_weighing_d->where('HostAWB',$HostAWB);	
		$this->eks_weighing_d->limit(50);
		return $this->eks_weighing_d->get();
    }
    public function get_list_eks_weighingheader($token,$ProofNumber=null)
    {
        $this->eks_weighing_h->where('token',$token);	
		if(!is_null($ProofNumber))$this->eks_weighing_h->where('ProofNumber',$ProofNumber);	
		$this->eks_weighing_h->limit(50);
		return $this->eks_weighing_h->get();
    }
    public function get_list_eks_weighingdetail($token,$ProofNumber=null)
    {
        $this->eks_weighing_d->where('token',$token);	
		if(!is_null($ProofNumber))$this->eks_weighing_d->where('ProofNumber',$ProofNumber);	
		$this->eks_weighing_d->limit(50);
		return $this->eks_weighing_d->get();
    }
    public function get_list_eks_weighingvol($token,$ProofNumber=null)
    {
        $this->eks_weighing_vol->where('token',$token);	
		if(!is_null($ProofNumber))$this->eks_weighing_vol->where('ProofNumber',$ProofNumber);	
		$this->eks_weighing_vol->limit(50);
		return $this->eks_weighing_vol->get();
    }
    public function get_list_eks_weighingspechand($token,$MasterAWB,$HostAWB=null)
	{
		$this->eks_weighing_spec->where('token',$token);	
		$this->eks_weighing_spec->where('MasterAWB',$MasterAWB);
		if(!is_null($HostAWB))$this->eks_weighing_spec->where('HostAWB',$HostAWB);	
		$this->eks_weighing_spec->limit(50);
		return $this->db7->get();
	}
	
	public function get_list_eks_invoiceheader($token,$InvoiceNumber=null)
	{
		$listhasil = $this->ekspor_model->list_eks_invoiceheader($token,$InvoiceNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_eks_invoicedetail($token,$InvoiceNumber=null)
	{
		$listhasil = $this->ekspor_model->list_eks_invoicedetail($token,$InvoiceNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_invoiceheader($token,$DateOfTransaction)
	{
		$listhasil = $this->ekspor_model->list_invoiceheader($token,$DateOfTransaction);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_eks_sticker($token)
	{
		$listhasil = $this->ekspor_model->list_eks_sticker($token);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_eks_storage($token)
	{
		$listhasil = $this->ekspor_model->list_eks_storage($token);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_eks_buildupheader($token,$BuildupNumber=null)
	{
		$listhasil = $this->ekspor_model->list_eks_buildupheader($token,$BuildupNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_eks_buildupdetail($token,$BuildupNumber=null)
	{
		$listhasil = $this->ekspor_model->list_eks_buildupdetail($token,$BuildupNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_waybill_buildupdetail($token,$MasterAWB)
	{
		$listhasil = $this->ekspor_model->list_waybill_buildupdetail($token,$MasterAWB);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_eks_buildupoffload($token)
	{
		$listhasil = $this->ekspor_model->list_eks_buildupoffload($token);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_buildup($token,$AirlinesCode,$FlightNumber,$DateOfFlight)
	{
		$listhasil = $this->ekspor_model->list_buildup($token,$AirlinesCode,$FlightNumber,$DateOfFlight);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_weighing_for_build($token,$AirlinesCode,$FlightNumber,$DateOfFlight)
	{
		$listhasil = $this->ekspor_model->weighing_for_build($token,$AirlinesCode,$FlightNumber,$DateOfFlight);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_build_uld_name($token,$BuildUpNumber)
	{
		$listhasil = $this->ekspor_model->build_uld_name($token,$BuildUpNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_build_waybill($BuildUpNumber,$UldCardNumber)
	{
		$listhasil = $this->ekspor_model->build_waybill($BuildUpNumber,$UldCardNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_totalpieces($token,$namatable,$fieldcheck,$namafield,$isifield)
	{
		$listhasil = $this->ekspor_model->totalpieces($token,$namatable,$fieldcheck,$namafield,$isifield);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_CheckMandatory($namatable,$MasterAWB,$namafield,$isifield=null)
	{
		$listhasil = $this->ekspor_model->CheckMandatory($namatable,$MasterAWB,$namafield,$isifield);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_CheckValidCWP($token,$MasterAWB,$HostAWB=null)
	{
		$listhasil = $this->ekspor_model->CheckValidCWP($token,$MasterAWB,$HostAWB);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_manifest_buildup($token,$AirlinesCode,$DateOfFlight)
	{
		$listhasil = $this->ekspor_model->manifest_buildup($token,$AirlinesCode,$DateOfFlight);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_eks_weighing_label($token,$HostAWB)
	{
		$listhasil = $this->ekspor_model->list_eks_weighing_label($token,$HostAWB);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
}
