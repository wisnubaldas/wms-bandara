<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dbfinance_Cont extends MX_Controller 
{
	function __construct()
		{
			parent::__construct();		
			$this->load->model(array('dbfinance_model'));
		}	
	
	public function get_list_calon_depositor($DepositName=NULL)
	{
		$listhasil = $this->dbfinance_model->list_calon_depositor($DepositName);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_calon_kreditor($kreditName=NULL)
	{
		$listhasil = $this->dbfinance_model->list_calon_kreditor($kreditName);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_procedure_laporan_CSD($GlobalBY,$Globaldatefrom,$Globaldateuntil,$GlobalAgentBy,
	                                      $GlobalShipperBy,$GlobalAirlBy,$GlobalFlightType)
										  
	{
		$listhasil = $this->dbfinance_model->procedure_laporan_CSD($GlobalBY,$Globaldatefrom,$Globaldateuntil,$GlobalAgentBy,
	                                      $GlobalShipperBy,$GlobalAirlBy,$GlobalFlightType);
										  
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_procedure_laporan_INVOICE($GlobalBY,$Globaldatefrom,$Globaldateuntil,$GlobalAgentBy,
	                                      $GlobalShipperBy,$GlobalAirlBy,$GlobalFlightType,$GlobalPayment)
										  
	{
		$listhasil = $this->dbfinance_model->procedure_laporan_INVOICE($GlobalBY,$Globaldatefrom,$Globaldateuntil,$GlobalAgentBy,
	                                      $GlobalShipperBy,$GlobalAirlBy,$GlobalFlightType,$GlobalPayment);
										  
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_procedure_laporan_SALES($GlobalBY,$Globaldatefrom,$Globaldateuntil,$GlobalAgentBy,
	                                      $GlobalShipperBy,$GlobalAirlBy,$GlobalFlightType,$GlobalPayment)
										  
	{
		$listhasil = $this->dbfinance_model->procedure_laporan_SALES($GlobalBY,$Globaldatefrom,$Globaldateuntil,$GlobalAgentBy,
	                                      $GlobalShipperBy,$GlobalAirlBy,$GlobalFlightType,$GlobalPayment);
										  
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_procedure_laporan_TONNAGE($GlobalBY,$Globaldatefrom,$Globaldateuntil,$GlobalAgentBy,
	                                      $GlobalShipperBy,$GlobalAirlBy,$GlobalFlightType)
										  
	{
		$listhasil = $this->dbfinance_model->procedure_laporan_TONNAGE($GlobalBY,$Globaldatefrom,$Globaldateuntil,$GlobalAgentBy,
	                                      $GlobalShipperBy,$GlobalAirlBy,$GlobalFlightType);
										  
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_procedure_laporan_TOP_AIRLINES($typeTop,$GlobalBy,$Globaldatefrom,$Globaldateuntil,$GlobalAirlBy,$GlobalFlightType)
										  
	{
		$listhasil = $this->dbfinance_model->procedure_laporan_TOP_AIRLINES($typeTop,$GlobalBy,$Globaldatefrom,$Globaldateuntil,$GlobalAirlBy,$GlobalFlightType);
										  
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_procedure_laporan_TOP_CUSTOMER($typeTop,$GlobalBy,$Globaldatefrom,$Globaldateuntil,$GlobalAgentBy,$GlobalFlightType)
										  
	{
		$listhasil = $this->dbfinance_model->procedure_laporan_TOP_CUSTOMER($typeTop,$GlobalBy,$Globaldatefrom,$Globaldateuntil,$GlobalAgentBy,$GlobalFlightType);
										  
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_procedure_laporan_PIUTANG($Codeagen=NULL)
	{
		$listhasil = $this->dbfinance_model->procedure_laporan_PIUTANG($Codeagen);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	
}