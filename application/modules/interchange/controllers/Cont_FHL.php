<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cont_FHL extends MX_Controller 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('FHL_model'));
    }	
	
	public function get_fhl_approve($AirlinesCode)
	{
		$listhasil = $this->FHL_model->fhl_approve($AirlinesCode);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_fhl_ready($DefaultHost)
	{
		$listhasil = $this->FHL_model->fhl_ready($DefaultHost);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_fhl_sent($DefaultHost)
	{
		$listhasil = $this->FHL_model->fhl_sent($DefaultHost);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
}