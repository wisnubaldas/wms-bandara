<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbdeposikredit_Cont extends MX_Controller 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('dbdeposikredit_model'));
    }	
	
	public function get_list_depositor($ClientRegistration=NULL)
	{
		$listhasil = $this->dbdeposikredit_model->list_depositor($ClientRegistration);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	public function get_list_kreditor($ClientRegistration=NULL)
	{
		$listhasil = $this->dbdeposikredit_model->list_kreditor($ClientRegistration);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_transaksi_depositor($ClientRegistration,$datefrom,$dateuntil,$TypeOfFlight=NULL)
	{
		$listhasil = $this->dbdeposikredit_model->transaksi_depositor($ClientRegistration,$datefrom,$dateuntil,$TypeOfFlight);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_transaksi_kreditor($ClientRegistration,$datefrom,$dateuntil,$TypeOfFlight=NULL)
	{
		$listhasil = $this->dbdeposikredit_model->transaksi_kreditor($ClientRegistration,$datefrom,$dateuntil,$TypeOfFlight);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	
	public function get_transaksi_pembayaran($Receipt)
	{
		$listhasil = $this->dbdeposikredit_model->transaksi_pembayaran($Receipt);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_transaksi_void($ClientRegistration,$TypeOfFlight,$receipt)
	{
		$listhasil = $this->dbdeposikredit_model->transaksi_void($ClientRegistration,$TypeOfFlight,$receipt);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_void_deposikredit($tablename,$idnumber)
	{
		$listhasil = $this->dbdeposikredit_model->void_deposikredit($tablename,$idnumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
}