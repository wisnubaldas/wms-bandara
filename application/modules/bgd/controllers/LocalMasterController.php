<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LocalMasterController extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('Sysmaster_model'));
    }	
    
	public function get_list_kemasan()
	{
		$listdata = $this->Sysmaster_model->list_kemasan();	
		// menjadikan objek menjadi JSON
		$data = json_encode($listdata);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
	}
	
	public function get_list_tps($kd_kbpc)
	{
		$listdata = $this->Sysmaster_model->list_tps($kd_kbpc);		
		// menjadikan objek menjadi JSON
		$data = json_encode($listdata);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
	}
	
	public function get_list_kode_kantor()
	{
		$listdata = $this->Sysmaster_model->list_kode_kantor();		
		// menjadikan objek menjadi JSON
		$data = json_encode($listdata);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
	}
	
	public function get_list_Nama_angkut()
	{
		$listdata = $this->Sysmaster_model->list_nama_angkut();		
		// menjadikan objek menjadi JSON
		$data = json_encode($listdata);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);	
	}
	
	public function get_list_nomor_penerbangan($kode_angkut)
	{
		$listdata = $this->Sysmaster_model->list_nomor_penerbangan($kode_angkut);		
		// menjadikan objek menjadi JSON
		$data = json_encode($listdata);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
	}
	
	public function get_list_kode_gudang($kd_tps,$kd_gudang=NULL)
	{
		$listdata = $this->Sysmaster_model->list_kode_gudang($kd_tps,$kd_gudang);			
		// menjadikan objek menjadi JSON
		$data = json_encode($listdata);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
	}
}
/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */