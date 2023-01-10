<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cont_fsu extends MX_Controller 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('fsu_model'));
    }	

	public function get_list_fsu_awb($HostName,$AirlinePrefix,$AWBNumber)
	{
		$listhasil = $this->fsu_model->list_fsu_awb($HostName,$AirlinePrefix,$AWBNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fsu_awd($HostName,$AirlinePrefix,$AWBNumber)
	{
		$listhasil = $this->fsu_model->list_fsu_awd($HostName,$AirlinePrefix,$AWBNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fsu_dis($HostName,$AirlinePrefix,$AWBNumber)
	{
		$listhasil = $this->fsu_model->list_fsu_dis($HostName,$AirlinePrefix,$AWBNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fsu_dlv($HostName,$AirlinePrefix,$AWBNumber)
	{
		$listhasil = $this->fsu_model->list_fsu_dlv($HostName,$AirlinePrefix,$AWBNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fsu_foh($HostName,$AirlinePrefix,$AWBNumber)
	{
		$listhasil = $this->fsu_model->list_fsu_foh($HostName,$AirlinePrefix,$AWBNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fsu_nfd($HostName,$AirlinePrefix,$AWBNumber)
	{
		$listhasil = $this->fsu_model->list_fsu_nfd($HostName,$AirlinePrefix,$AWBNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fsu_rcf($HostName,$AirlinePrefix,$AWBNumber)
	{
		$listhasil = $this->fsu_model->list_fsu_rcf($HostName,$AirlinePrefix,$AWBNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fsu_rcs($HostName,$AirlinePrefix,$AWBNumber)
	{
		$listhasil = $this->fsu_model->list_fsu_rcs($HostName,$AirlinePrefix,$AWBNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fsu_rct($HostName,$AirlinePrefix,$AWBNumber)
	{
		$listhasil = $this->sending_fsu_model->list_fsu_rct($HostName,$AirlinePrefix,$AWBNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fsu_tfd($HostName,$AirlinePrefix,$AWBNumber)
	{
		$listhasil = $this->fsu_model->list_fsu_tfd($HostName,$AirlinePrefix,$AWBNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
}