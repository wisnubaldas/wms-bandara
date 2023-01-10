<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cont_peb extends MX_Controller 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('peb_model'));
    }	
	
	public function show_delete_table($mytable)
	{
		$listhasil = $this->peb_model->delete_table($mytable);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
		exit($hasil);
	}
	
	public function show_list_car_close()  
	{
		$listhasil = $this->peb_model->list_car_close();  
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function show_temp_car_close()
	{
		$listhasil = $this->peb_model->temp_car_close(); 
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function call_sortir_data()
	{
		$listhasil = $this->peb_model->sortir_data();  
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function call_insert_data_peb()
	{
		$listhasil = $this->peb_model->insert_data_peb();
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function call_insert_data_peb_ocean()
	{
		$listhasil = $this->peb_model->insert_data_peb_ocean();
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function call_insert_data_peb_birnest()
	{
		$listhasil = $this->peb_model->insert_data_peb_birnest();
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	
}