<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbmaster_Cont extends MX_Controller 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('dbmaster_model'));
    }	

	public function get_list_warehouse($WarehouseCode=NULL)
	{
		$listhasil = $this->dbmaster_model->list_warehouse($WarehouseCode);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_listGoods($WarehouseCode=NULL)
	{
		$listhasil = $this->dbmaster_model->list_Goods($WarehouseCode);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	
	public function get_list_airlines($airlinescode=NULL)
	{
		$listhasil = $this->dbmaster_model->list_airlines($airlinescode);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_country($IdCountry=NULL)
	{
		$listhasil = $this->dbmaster_model->list_country($IdCountry);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_good($KGCode=NULL)
	{
		$listhasil = $this->dbmaster_model->list_good($KGCode);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_place($IdCity=NULL)
	{
		$listhasil = $this->dbmaster_model->list_place($IdCity);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_route($route=NULL)
	{
		$listhasil = $this->dbmaster_model->list_route($route);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_route_baru($idnumber=NULL)
	{
		$listhasil = $this->dbmaster_model->list_route_baru($idnumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_timeRute($flightno=NULL)
	{
		$listhasil = $this->dbmaster_model->list_TimeRote($flightno);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_timeRute_dest($dest=NULL)
	{
		$listhasil = $this->dbmaster_model->list_TimeRote_dest($dest);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_shift($shiftname=NULL)
	{
		$listhasil = $this->dbmaster_model->list_shift($shiftname);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_truck($NoTruck=NULL)
	{
		$listhasil = $this->dbmaster_model->list_truck($NoTruck);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_warehousecode($WarehouseCode=NULL)
	{
		$listhasil = $this->dbmaster_model->list_warehousecode($WarehouseCode);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_route_flight($flighttype,$AirlinesCode=NULL)
	{
		$listhasil = $this->dbmaster_model->route_flight($flighttype,$AirlinesCode);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_flight($AirlinesCode,$flightNo=NULL)
	{
		$listhasil = $this->dbmaster_model->list_flight($AirlinesCode,$flightNo);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_flight($flighttype,$AirlinesCode,$route=NULL)
	{
		$listhasil = $this->dbmaster_model->flight($flighttype,$AirlinesCode,$route);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_point($PointMultiplication=NULL)
	{
		$listhasil = $this->dbmaster_model->list_point($PointMultiplication);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_pointnow($ValidNow)
	{
		$listhasil = $this->dbmaster_model->pointnow($ValidNow);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_pointkredit($ClientRegistration,$ValidNow)
	{
		$listhasil = $this->dbmaster_model->pointkredit($ClientRegistration,$ValidNow);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_NamaKolom($TABLE_SCHEMA,$TABLE_NAME)
	{
		$listhasil = $this->dbmaster_model->NamaKolom($TABLE_SCHEMA,$TABLE_NAME);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
}