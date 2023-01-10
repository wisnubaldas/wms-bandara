<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//$limit = ini_get('memory_limit');
//ini_set('memory_limit', -1);
//ini_set('memory_limit', $limit);

class DbCSD_Cont extends MX_Controller 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('dbCSD_model'));
    }	
	
	public function get_list_CSD_by_SMU($tablename,$AWB=NULL)
	{
		$listhasil = $this->dbCSD_model->list_CSD_by_SMU($tablename,$AWB);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	 
	public function get_list_CSD($tablename,$CSDNumber=NULL)
	{
		$listhasil = $this->dbCSD_model->list_CSD($tablename,$CSDNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_cwpNumber($tablename,$CWPNumber=NULL)
	{
		$listhasil = $this->dbCSD_model->list_cwpnumber($tablename,$CWPNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_void_CSD($tablename,$CWPNumber)
	{
		$listhasil = $this->dbCSD_model->list_void_CSD($tablename,$CWPNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_NoPIB($register_no=NULL)
	{
		$listhasil = $this->dbCSD_model->list_NoPIB($register_no);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}

	
public function get_list_voidCSD_Invoice($tablename,$NoKwitansi)
	{
		$listhasil = $this->dbCSD_model->list_voidCSD_inv($tablename,$NoKwitansi);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}

	
	public function get_list_voidDelivery($tablename,$NameOfDO)
	{
		$listhasil = $this->dbCSD_model->list_void_Delivery($tablename,$NameOfDO);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_csd_daily_report($tablename,$typeshift,$datefrom,$timefrom,$dateuntil,$timeuntil)
	{
		$listhasil = $this->dbCSD_model->csd_daily_report($tablename,$typeshift,$datefrom,$timefrom,$dateuntil,$timeuntil);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_monitoring_CSD_dummy($TypeOfFlight)
	{
		$listhasil = $this->dbCSD_model->list_monitoring_CSD_dummy($TypeOfFlight);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_ready_delivery($WarehouseCode=NULL,$forwaderName=NULL)
	{
		$listhasil = $this->dbCSD_model->view_ready_delivery($WarehouseCode,$forwaderName);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_ready_delivery_XMAWB($AWB=NULL)
	{
		$listhasil = $this->dbCSD_model->view_ready_delivery_XAWB($AWB);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_delivery($NameOfDO=NULL)
	{
		$listhasil = $this->dbCSD_model->view_deliveryBaru($NameOfDO);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_waybill($tablename,$AWB=NULL)
	{
		$listhasil = $this->dbCSD_model->list_waybill($tablename,$AWB);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_Cek_AWBNumber($tablename,$AWB=NULL)
	{
		$listhasil = $this->dbCSD_model->List_AWBNumber($tablename,$AWB);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	
	public function get_list_PetugasXray($Group_User=NULL)
	{
		$listhasil = $this->dbCSD_model->list_PetugasXray($Group_User);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	public function get_list_AWBINVOICE($tablename,$AWB=NULL,$ShipperName)
	{
		$listhasil = $this->dbCSD_model->list_AWBINV($tablename,$AWB,$ShipperName);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_AWBINVOICEDummy($tablename,$AWB=NULL)
	{
		$listhasil = $this->dbCSD_model->list_AWBINVDummy($tablename,$AWB);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_ready_invoice($tablename,$ShipperName=NULL)
	{
		$listhasil = $this->dbCSD_model->ready_invoice($tablename,$ShipperName);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	public function get_ready_invoiceDummy($tablename,$ShipperName=NULL)
	{
		$listhasil = $this->dbCSD_model->ready_invoiceDummy($tablename,$ShipperName);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function Ambil_ready_invoice($tablename,$ShipperName=NULL)
	{
		$listhasil = $this->dbCSD_model->Ambilready_invoice($tablename,$ShipperName);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_ready_invoiceBaru($tablename,$TypeOfFlight,$ShipperName=NULL)
	{
		$listhasil = $this->dbCSD_model->ready_invoiceBaru($tablename,$TypeOfFlight,$ShipperName);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_csd_daily_new($typeshift,$datefrom,$timefrom,$dateuntil,$timeuntil)
	{
		$listhasil = $this->dbCSD_model->csd_daily_new($typeshift,$datefrom,$timefrom,$dateuntil,$timeuntil);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_csd_daily_newBaru($typeshift,$datefrom,$dateuntil)
	{
		$listhasil = $this->dbCSD_model->csd_daily_newBaru($typeshift,$datefrom,$dateuntil);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_OutstandingALLCSD($typeshift,$datefrom,$dateuntil)
	{
		$listhasil = $this->dbCSD_model->csd_Outstanding($typeshift,$datefrom,$dateuntil);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_update_flag_receipt($NoKwitansi,$RCWPnumber)
	{
		$listhasil = $this->dbCSD_model->update_flag_receipt($NoKwitansi,$RCWPnumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	
}