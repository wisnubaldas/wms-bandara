<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LocalBpkuController extends MX_Controller
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('LocalBpku_model'));
    }	
	
	public function show_Outstanding_dps($id_kms,$baris=null)
	{
		$listhasil = $this->LocalBpku_model->Outstanding_dps($id_kms,$baris);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function show_Outstanding_gtln_dps($id_kms,$baris=null)
	{
		$listhasil = $this->LocalBpku_model->Outstanding_gtln_dps($id_kms,$baris);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function show_data_gateIN_dps($namafield,$isifield)
	{
		$listhasil = $this->LocalBpku_model->data_gateIN_dps($namafield,$isifield);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function show_data_gateIN_GTLN_dps($namafield,$isifield)
	{
		$listhasil = $this->LocalBpku_model->data_gateIN_GTLN_dps($namafield,$isifield);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function show_data_gateOUT_dps($namafield,$isifield)
	{
		$listhasil = $this->LocalBpku_model->data_gateOUT_dps($namafield,$isifield);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function show_data_gateOUT_GTLN_dps($namafield,$isifield)
	{
		$listhasil = $this->LocalBpku_model->data_gateOUT_GTLN_dps($namafield,$isifield);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	// --------------------------------------------------------
	
	public function show_data_import_gateIN_dps($tgl_first,$tgl_last,$id_kms,$baris=null)
	{
		$listhasil = $this->LocalBpku_model->data_import_gateIN_dps($tgl_first,$tgl_last,$id_kms,$baris);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function show_data_import_gateOUT_dps($tgl_first,$tgl_last,$id_kms,$baris=null)
	{
		$listhasil = $this->LocalBpku_model->data_import_gateOUT_dps($tgl_first,$tgl_last,$id_kms,$baris);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	//-----------------------------------------------------
	
	public function show_data_import_gateIN($tgl_first,$tgl_last,$id_kms,$baris=null)
	{
		$listhasil = $this->LocalBpku_model->data_import_gateIN($tgl_first,$tgl_last,$id_kms,$baris);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function show_data_ekspor_gateIN($tgl_first,$tgl_last,$id_kms,$baris=null)
	{
		$listhasil = $this->LocalBpku_model->data_ekspor_gateIN($tgl_first,$tgl_last,$id_kms,$baris);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function show_data_ekspor_gateOut($tgl_first,$tgl_last,$id_kms,$baris=null)
	{
		$listhasil = $this->LocalBpku_model->data_ekspor_gateOut($tgl_first,$tgl_last,$id_kms,$baris);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	public function show_data_import_gateOut($tgl_first,$tgl_last,$id_kms,$baris=null,$flag_transfer=null)
	{
		$listhasil = $this->LocalBpku_model->data_import_gateOut($tgl_first,$tgl_last,$id_kms,$baris,$flag_transfer);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function show_gatein_master_bl_awb($mawb)
	{
		$listhasil = $this->LocalBpku_model->gatein_master_bl_awb($mawb);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_update_respon_gate($namatable,$namacode,$nilaicode,$ref_num,$respon,$flag_transfer,$date_update)
	{
		$listhasil = $this->LocalBpku_model->update_respon_gate($namatable,$namacode,$nilaicode,$ref_num,$respon,$flag_transfer,$date_update);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
}
	