<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbvoid_Cont extends MX_Controller 
{
		function __construct()
		{
			parent::__construct();		
			$this->load->model(array('dbvoid_model'));
		}	
		
		public function get_void_invoice($receipt,$CWPnumber,$CSDNumber=NULL)
		{
		
		$listhasil = $this->dbvoid_model->void_invoice($receipt,$CWPnumber,$CSDNumber);
										  
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
		
		
		
}