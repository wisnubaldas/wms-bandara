<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LocalGatransController extends MX_Controller
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('LocalGatrans_model'));
    }	

	public function get_list_berat_mawb($mawb)
	{
		$listhasil = $this->LocalGatrans_model->list_berat_mawb($mawb);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	public function get_list_id_detail($namatable,$id_header)
	{
		if ($namatable=='mohon_resp_plp') {
			$listhasil = $this->LocalGatrans_model->list_id_detail('mohon_resp_plp','Noid =',$id_header);
		}
		elseif ($namatable=='mohon_resp_plp_det') {
			$listhasil = $this->LocalGatrans_model->list_id_detail('mohon_resp_plp_det','id_header =',$id_header);
		}
		elseif ($namatable=='mohon_resp_plp_tuj') {
			$listhasil = $this->LocalGatrans_model->list_id_detail('mohon_resp_plp_tuj','Noid =',$id_header);		
		}
		elseif ($namatable=='mohon_resp_plp_tuj_det') {
			$listhasil = $this->LocalGatrans_model->list_id_detail('mohon_resp_plp_tuj_det','id_header =',$id_header);		
		}
		elseif ($namatable=='mohon_plp_det') {
			$listhasil = $this->LocalGatrans_model->list_id_detail('mohon_plp_det','id_mohon =',$id_header);
		}
		
		
		
		elseif ($namatable=='batal_plp_det') {
			$listhasil = $this->LocalGatrans_model->list_id_detail('batal_plp_det','id_mohon =',$id_header);		
		}
		elseif ($namatable=='batal_resp_plp_det') {
			$listhasil = $this->LocalGatrans_model->list_id_detail('batal_plp_det','id_header =',$id_header);		
		}
		elseif ($namatable=='batal_resp_plp_tuj_det') {
			$listhasil = $this->LocalGatrans_model->list_id_detail('batal_resp_plp_tuj_det','id_header =',$id_header);	
		}
		
		
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
		
	}
	
	
	public function get_list_nomor_referensi($namatable)
	{		
		$listhasil = $this->LocalGatrans_model->list_nomor_referensi($namatable);		
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_nomor_referensi_DPS($namatable)
	{
		$listhasil = $this->LocalGatrans_model->list_nomor_referensi_DPS($namatable);		
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
		
	}
	
	public function get_list_alasan()
	{
		$listhasil = $this->LocalGatrans_model->list_alasan();		
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_noplp()
	{
		$listhasil = $this->LocalGatrans_model->list_noplp();		
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_nosurat($no_surat=NULL)
	{
		$listhasil = $this->LocalGatrans_model->list_nosurat($no_surat);		
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_cari_hasil_batalplp($no_plp,$tgl_plp)
	{
		$listhasil = $this->LocalGatrans_model->cari_hasil_batalplp($no_plp,$tgl_plp);	
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	} 
	
	public function get_cari_hasil_mohonplp($no_surat,$tglsurat,$callsign,$gudang_tujuan)
	{
		$listhasil = $this->LocalGatrans_model->cari_hasil_mohonplp($no_surat,$tglsurat,$callsign,$gudang_tujuan);	
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_idmohon($namatable,$no_surat){
        // mengambil hasil mahasiswa dari hasilbase		
		$listhasil = $this->LocalGatrans_model->id_mohon($namatable,$no_surat);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
    }
	
	public function updatedata($id_mohon) {		
		// mengambil hasil mahasiswa dari hasilbase		
		$listhasil = $this->LocalGatrans_model->updatesending($id_mohon);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	public function get_view_plpfor_gatein($kd_kantor)	
	{
		$listhasil = $this->LocalGatrans_model->view_plpfor_gatein($kd_kantor);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
}