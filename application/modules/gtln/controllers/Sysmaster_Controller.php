<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sysmaster_Controller extends MX_Controller
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('sysmaster_model'));
    }	
	
	public function get_list_m_kd_dok_inout($keterangan)
	{
		$listhasil = $this->sysmaster_model->list_m_kd_dok_inout($keterangan);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
}