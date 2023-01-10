<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbreceipt_Cont extends MX_Controller 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('dbreceipt_model'));
    }	

	public function get_list_dbreceipt_detail($receipt=NULL)
	{
		$listhasil = $this->dbreceipt_model->list_dbreceipt_detail($receipt);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	public function get_list_dbreceipt_detail_Edit($receipt=NULL)
	{
		$listhasil = $this->dbreceipt_model->list_dbreceipt_detail_Edit($receipt);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_dbreceipt_header($receipt=NULL)
	{
		$listhasil = $this->dbreceipt_model->list_dbreceipt_header($receipt);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_dbreceipt_header_Edit($receipt=NULL)
	{
		$listhasil = $this->dbreceipt_model->list_dbreceipt_header_Edit($receipt);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_void_dbreceipt($tablename,$receipt)
	{
		$listhasil = $this->dbreceipt_model->void_dbreceipt($tablename,$receipt);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_void_Invoice($tablename,$receipt)
	{
		$listhasil = $this->dbreceipt_model->list_void_dbreceipt($tablename,$receipt);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_search_invoice($tablename,$hostAWB=NULL)
	{
		$listhasil = $this->dbreceipt_model->search_invoice($tablename,$hostAWB);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_daily_invoicing($typeshift,$datefrom,$timefrom,$dateuntil,$timeuntil)
	{
		$listhasil = $this->dbreceipt_model->view_daily_invoicing($typeshift,$datefrom,$timefrom,$dateuntil,$timeuntil);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
}