<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cont_FWB extends MX_Controller 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('FWB_model'));
		
    }	
	
	public function get_fwb_MasterAWB($MasterAWB)
	{
		$listhasil = $this->FWB_model->fwb_MasterAWB($MasterAWB);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_fwb_approve($AirlinesCode)
	{
		$listhasil = $this->FWB_model->fwb_approve($AirlinesCode);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_fwb_ready($HostName)
	{
		$listhasil = $this->FWB_model->fwb_ready($HostName);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_fwb_sent($DefaultHost)
	{
		$listhasil = $this->FWB_model->fwb_sent($DefaultHost);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
}