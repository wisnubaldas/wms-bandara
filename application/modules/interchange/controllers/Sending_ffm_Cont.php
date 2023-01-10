<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sending_ffm_Cont extends MX_Controller 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('sending_ffm_model'));
    }	

	public function get_list_ffm_1_messageidentifier($HostName,$MessageKey)
	{
		$listhasil = $this->sending_ffm_model->list_ffm_1_messageidentifier($HostName,$MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_ffm_2_manifestheader($MessageKey)
	{
		$listhasil = $this->sending_ffm_model->list_ffm_2_manifestheader($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_ffm_3_destinationheader($MessageKey)
	{
		$listhasil = $this->sending_ffm_model->list_ffm_3_destinationheader($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_ffm_4_bulkloadedcargo($MessageKey,$Point_Of_Unloading=null)
	{
		$listhasil = $this->sending_ffm_model->list_ffm_4_bulkloadedcargo($MessageKey,$Point_Of_Unloading);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_ffm_5_dimensionsinformation($MessageKey)
	{
		$listhasil = $this->sending_ffm_model->list_ffm_5_dimensionsinformation($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_ffm_6_consignmentonwardmovementinformation($MessageKey)
	{
		$listhasil = $this->sending_ffm_model->list_ffm_6_consignmentonwardmovementinformation($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_ffm_7_uldmovementinformation($MessageKey)
	{
		$listhasil = $this->sending_ffm_model->list_ffm_7_uldmovementinformation($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_ffm_8_otherserviceinformation($MessageKey)
	{
		$listhasil = $this->sending_ffm_model->list_ffm_8_otherserviceinformation($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_ffm_8b_customsorigin($MessageKey)
	{
		$listhasil = $this->sending_ffm_model->list_ffm_8b_customsorigin($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_ffm_8c_othercustomsinformation($MessageKey)
	{
		$listhasil = $this->sending_ffm_model->list_ffm_8c_othercustomsinformation($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_ffm_9_specialcustomsinformation($MessageKey)
	{
		$listhasil = $this->sending_ffm_model->list_ffm_9_specialcustomsinformation($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_ffm_a_uldloadedcargo($MessageKey,$ULDType,$ULDSerialNumber,$AirlinePrefix,$AWBSerialNumber)
	{
		$listhasil = $this->sending_ffm_model->list_ffm_a_uldloadedcargo($MessageKey,$ULDType,$ULDSerialNumber,$AirlinePrefix,$AWBSerialNumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_ffm_a_uldloadedcargo2($MessageKey,$Point_Of_Unloading)
	{
		$listhasil = $this->sending_ffm_model->list_ffm_a_uldloadedcargo2($MessageKey,$Point_Of_Unloading);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	public function get_list_ffm_b_manifesttrailer($MessageKey)
	{
		$listhasil = $this->sending_ffm_model->list_ffm_b_manifesttrailer($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
}