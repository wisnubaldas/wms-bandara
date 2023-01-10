<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cont_Interchangemaster extends MX_Controller 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('Interchangemaster_model'));
    }	
	
	public function get_sita_mastercustomer($CustomerCode)
	{
		$listhasil = $this->Interchangemaster_model->sita_mastercustomer($CustomerCode);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_mst_airport($AirportCode=null)
	{
		$listhasil = $this->Interchangemaster_model->list_mst_airport($AirportCode);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_activation_airlines($AirlineCode)
	{
		$listhasil = $this->Interchangemaster_model->activation_airlines($AirlineCode);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_mst_authenticate($DefaultHost=null)
	{
		$listhasil = $this->Interchangemaster_model->list_mst_authenticate($DefaultHost);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_mst_authenticate_addrbydest($DefaultHost=null)
	{
		$listhasil = $this->Interchangemaster_model->list_mst_authenticate_addrbydest($DefaultHost);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}

	public function get_list_mst_authenticate_messagesendname($DefaultHost=null,$MessageCode=null)
	{
		$listhasil = $this->Interchangemaster_model->list_mst_authenticate_messagesendname($DefaultHost,$MessageCode);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_mst_authenticate_emailsending($DefaultHost=null)
	{
		$listhasil = $this->Interchangemaster_model->list_mst_authenticate_emailsending($DefaultHost);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_mst_authenticate_sitaaddress($DefaultHost=null)
	{
		$listhasil = $this->Interchangemaster_model->list_mst_authenticate_sitaaddress($DefaultHost=null);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_mastermessagename($inc_out=null)
	{
		$listhasil = $this->Interchangemaster_model->list_mastermessagename($inc_out);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
}