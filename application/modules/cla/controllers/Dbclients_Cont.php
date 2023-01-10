<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbclients_Cont extends MX_Controller 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('dbclients_model'));
    }	
	
	public function get_list_agent($CompanyName=NULL)
	{
		$listhasil = $this->dbclients_model->list_agent($CompanyName);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_subagent($AgenCode,$subAgen=NULL)
	{
		$listhasil = $this->dbclients_model->list_subagent($AgenCode,$subAgen);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_detail_subagent($idnumber=NULL)
	{
		$listhasil = $this->dbclients_model->detail_subagent($idnumber);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_clients($CompanyName=NULL)
	{
		$listhasil = $this->dbclients_model->list_clients($CompanyName);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_clients_baru($CompanyName=NULL)
	{
		$listhasil = $this->dbclients_model->list_clients_baru($CompanyName);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function ambil_data_clients($CompanyName=NULL)
	{
		$listhasil = $this->dbclients_model->get_ambil_data_clients($CompanyName);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function ambil_data_clienshipper($CompanyName=NULL)
	{
		$listhasil = $this->dbclients_model->get_ambil_data_clienshipper($CompanyName);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_codeclients($ClientRegistration=NULL)
	{
		$listhasil = $this->dbclients_model->codeclients($ClientRegistration);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function codeclients_xxbar($CompanyName=NULL)
	{
		$listhasil = $this->dbclients_model->codeclients_baru($CompanyName);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_void_dbclients($ClientRegistration)
	{
		$listhasil = $this->dbcargo_model->void_dbcargo($ClientRegistration);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
}