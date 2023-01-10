<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbcargo_Cont extends MX_Controller 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('dbcargo_model'));
    }	

	public function get_list_dbcargo_detail($tablename,$CWPnumber=NULL,$idnumber=NULL)
	{
		$listhasil = $this->dbcargo_model->list_dbcargo_detail($tablename,$CWPnumber,$idnumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_PerishableReal($TypeOfFlight)
	{
		$listhasil = $this->dbcargo_model->list_dbcargo_PerishabelReal($TypeOfFlight);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}

	public function get_list_dbcargo_dummy_findbaru($TypeOfFlight)
	{
		$listhasil = $this->dbcargo_model->list_dbcargo_dummy_findbaru($TypeOfFlight);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}

	public function get_list_dbcargo_header($tablename,$CWPnumber=NULL)
	{
		$listhasil = $this->dbcargo_model->list_dbcargo_header($tablename,$CWPnumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_Real($TypeOfFlight)
	{
		$listhasil = $this->dbcargo_model->list_dbcargo_Real($TypeOfFlight);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}

	public function get_list_dbcargo_header_rcwp($RCWPnumber)
	 {
		$listhasil = $this->dbcargo_model->list_dbcargo_header_rcwp($RCWPnumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_view_dbcargo($tablename,$CSDNumber=NULL)
	{
		$listhasil = $this->dbcargo_model->list_view_dbcargo($tablename,$CSDNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_calon_CSD_DUMMY($MasterAWB=NULL)
	{
		$listhasil = $this->dbcargo_model->calon_CSD_DUMMY($MasterAWB);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);	
	}
	
	public function get_calon_CSD_REAL($MasterAWB=NULL)
	{
		$listhasil = $this->dbcargo_model->calon_CSD_REAL($MasterAWB);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);	
	}
	
	public function get_cwp_langsung_invoice($TypeOfFlight,$agenCode=NULL)
	{
		$listhasil = $this->dbcargo_model->cwp_langsung_invoice($TypeOfFlight,$agenCode);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);	
	}
	
	public function get_cwp_langsung_invoiceBaru($TypeOfFlight,$ShipperName=NULL)
	{
		$listhasil = $this->dbcargo_model->cwp_langsung_invoiceBaru($TypeOfFlight,$ShipperName);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);	
	}
	
	public function get_monitoring_cwp_ke_invoice()
	{
		$listhasil = $this->dbcargo_model->monitoring_cwp_ke_invoice();
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);	
	}
	
	public function get_view_dbcargo_byAgenshipper($tablename,$agenCode,$ShipperCode=NULL)
	{
		$listhasil = $this->dbcargo_model->view_dbcargo_byAgenshipper($tablename,$agenCode,$ShipperCode=NULL);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	public function get_view_dbcargo_byAgenshipper_baru($tablename,$masterawb)
	{
		$listhasil = $this->dbcargo_model->view_dbcargo_byAgenshipper_baru($tablename,$masterawb);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_void_dbcargo($tablename,$CWPnumber)
	{
		$listhasil = $this->dbcargo_model->list_void_dbcargo($tablename,$CWPnumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_listdelivery_void($tablename,$NameOfDo)
	{
		$listhasil = $this->dbcargo_model->list_void_dbcargodelivery($tablename,$NameOfDo);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	public function get_view_ready_csd_dummy($TypeOfFlight,$MasterAWB)
	{
		$listhasil = $this->dbcargo_model->view_ready_csd_dummy($TypeOfFlight,$MasterAWB);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	public function get_search_waybill($tablename,$TypeOfFlight,$MasterAWB=NULL,$TypeOfCargo=NULL)
	{
		$listhasil = $this->dbcargo_model->search_waybill($tablename,$TypeOfFlight,$MasterAWB,$TypeOfCargo);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_dbcargo_dummy($TypeOfFlight)
	{
		$listhasil = $this->dbcargo_model->list_dbcargo_dummy($TypeOfFlight);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	public function get_list_dbcargo_dummy_find($TypeOfFlight)
	{
		$listhasil = $this->dbcargo_model->list_dbcargo_dummy_find($TypeOfFlight);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_monitor_csd_dummy()
	{
		$listhasil = $this->dbcargo_model->view_monitor_csd_dummy();
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_monitor_csd_real()
	{
		$listhasil = $this->dbcargo_model->view_monitor_csd_real();
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_monitor_cargo_real($TypeOfFlight)
	{
		$listhasil = $this->dbcargo_model->view_monitor_cargo_real($TypeOfFlight);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
		
		
	}
	
	public function get_view_daily_btb($typeshift,$datefrom,$timefrom,$dateuntil,$timeuntil)
	{
		$listhasil = $this->dbcargo_model->view_daily_btb($typeshift,$datefrom,$timefrom,$dateuntil,$timeuntil);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_update_flag_receipt($RCWPnumber)
	{
		$listhasil = $this->dbcargo_model->update_flag_receipt($RCWPnumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
}