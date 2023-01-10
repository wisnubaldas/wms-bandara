<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cont_updateflag_sitatext extends MX_Controller 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('Updflag_sitatext_model'));
    }	
	
	public function get_update_flag($namatable,$keycode,$namafield,$nilaiField)
	{
		$listhasil = $this->Updflag_sitatext_model->update_flag($namatable,$keycode,$namafield,$nilaiField);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	
}

