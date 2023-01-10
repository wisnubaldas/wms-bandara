<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbnumber_Cont extends MX_Controller 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('dbnumber_model'));
    }	

	public function get_dbnumber($description)
	{
		$listhasil = $this->dbnumber_model->dbnumber($description);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	
	
	
	
}