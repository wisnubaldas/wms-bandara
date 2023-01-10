<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbuser_Cont extends MX_Controller 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('dbuser_model'));
    }	
	
	public function get_userid($UserID,$Password)
	{
		$listhasil = $this->dbuser_model->userid($UserID,$Password);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_PetugasXrayBaru($UserID=NULL)
	{
		$listhasil = $this->dbuser_model->list_PXrayBaru($UserID);
		
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	public function get_list_permission($EmployeeCode,$DateDuty=NULL)
	{
		$listhasil = $this->dbuser_model->list_permission($EmployeeCode,$DateDuty);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_menu()
	{
		$listhasil = $this->dbuser_model->list_menu();
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_EmployeeBaru($EmployeeCode=NULL)
	{
		$listhasil = $this->dbuser_model->EmployeeBaru($EmployeeCode);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_Employee($EmployeeCode=NULL)
	{
		$listhasil = $this->dbuser_model->Employee($EmployeeCode);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	

	
	
}