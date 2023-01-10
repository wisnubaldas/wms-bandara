<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sending_fhl_Cont extends MX_Controller 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('sending_fhl_model'));
    }	

	public function get_list_fhl_1_standardmessageindentification($MessageKey=null)
	{
		$listhasil = $this->sending_fhl_model->list_fhl_1_standardmessageindentification($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fhl_2_masterawbconsignmentdetail($MessageKey=null)
	{
		$listhasil = $this->sending_fhl_model->list_fhl_2_masterawbconsignmentdetail($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fhl_3_housewaybillsummarydetails($MessageKey=null)
	{
		$listhasil = $this->sending_fhl_model->list_fhl_3_housewaybillsummarydetails($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fhl_4_freetextdescriptionofgoods($MessageKey=null)
	{
		$listhasil = $this->sending_fhl_model->list_fhl_4_freetextdescriptionofgoods($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fhl_5_harmonisedtariffscheduleinformation($MessageKey=null)
	{
		$listhasil = $this->sending_fhl_model->list_fhl_5_harmonisedtariffscheduleinformation($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fhl_5b_othercustomsecurityandregulatory($MessageKey=null)
	{
		$listhasil = $this->sending_fhl_model->list_fhl_5b_othercustomsecurityandregulatory($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fhl_6_shippernameandaddress($MessageKey=null)
	{
		$listhasil = $this->sending_fhl_model->list_fhl_6_shippernameandaddress($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fhl_7_consigneenameandaddress($MessageKey=null)
	{
		$listhasil = $this->sending_fhl_model->list_fhl_7_consigneenameandaddress($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fhl_8_chargedeclarations($MessageKey=null)
	{
		$listhasil = $this->sending_fhl_model->list_fhl_8_chargedeclarations($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}

}	

