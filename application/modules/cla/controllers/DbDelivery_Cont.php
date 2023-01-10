<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DbDelivery_Cont extends MX_Controller 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('dbDelivery_model'));
    }
	
	public function get_list_Delivery($NameOfDo=NULL)
	{
		$listhasil = $this->dbDelivery_model->list_Delivery($NameOfDo);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_find_Delivery($NameOfDO=NULL)
	{
		$listhasil = $this->dbDelivery_model->find_Delivery($NameOfDO);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_find_DeliveryAWB($MasterAWB=NULL)
	{
		$listhasil = $this->dbDelivery_model->find_DeliveryAWB($MasterAWB);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	//public function get_delivery_daily_report($typeshift,$datefrom,$timefrom,$dateuntil,$timeuntil)
	public function get_delivery_daily_report($typeshift,$datefrom,$dateuntil)
	{
		$listhasil = $this->dbDelivery_model->delivery_daily_report($typeshift,$datefrom,$dateuntil);
		//$listhasil = $this->dbDelivery_model->delivery_daily_report($typeshift,$datefrom,$timefrom,$dateuntil,$timeuntil);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
		
	}
	
	
	public function get_void_Delivery($NameOfDo)
	{
		$listhasil = $this->dbDelivery_model->void_Delivery($NameOfDo);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
}