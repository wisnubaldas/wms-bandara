<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LocalBgdController_New extends MX_Controller
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('LocalBgd_model_new'));
    }	

	public function get_list_berat_mawb($mawb)
	{
		$listhasil = $this->LocalBgd_model_new->list_berat_mawb($mawb);
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
		if ($namatable=='mohon_plp_det') {
			$listhasil = $this->LocalBgd_model_new->list_id_detail('mohon_plp_det','id_mohon =',$id_header);
		}
		elseif ($namatable=='mohon_resp_plp') {
			$listhasil = $this->LocalBgd_model_new->list_id_detail('mohon_resp_plp','Noid =',$id_header);
		}
		elseif ($namatable=='mohon_resp_plp_det') {
			$listhasil = $this->LocalBgd_model_new->list_id_detail('mohon_resp_plp_det','id_header =',$id_header);
		}
		elseif ($namatable=='mohon_resp_plp_tuj') {
			$listhasil = $this->LocalBgd_model_new->list_id_detail('mohon_resp_plp_tuj','Noid =',$id_header);		
		}
		elseif ($namatable=='mohon_resp_plp_tuj_det') {
			$listhasil = $this->LocalBgd_model_new->list_id_detail('mohon_resp_plp_tuj_det','id_header =',$id_header);		
		}
		elseif ($namatable=='batal_plp_det') {
			$listhasil = $this->LocalBgd_model_new->list_id_detail('batal_plp_det','id_batal =',$id_header);		
		}		
		elseif ($namatable=='batal_resp_plp') {
			$listhasil = $this->LocalBgd_model_new->list_id_detail('batal_resp_plp','Noid =',$id_header);		
		}
		elseif ($namatable=='batal_resp_plp_det') {
			$listhasil = $this->LocalBgd_model_new->list_id_detail('batal_resp_plp_det','id_header =',$id_header);	
		}
		elseif ($namatable=='batal_resp_plp_tuj') {
			$listhasil = $this->LocalBgd_model_new->list_id_detail('batal_resp_plp_tuj','Noid =',$id_header);	
		}
		elseif ($namatable=='batal_resp_plp_tuj_det') {
			$listhasil = $this->LocalBgd_model_new->list_id_detail('batal_resp_plp_tuj_det','id_header =',$id_header);	
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
		$listhasil = $this->LocalBgd_model_new->list_nomor_referensi($namatable);		
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
	
	public function get_list_noplp($jenis=NULL)
	{
		
		if ($jenis == 'ASAL')
		{
			$listhasil = $this->LocalBgd_model_new->list_noplp_asal();
		}
		elseif ($jenis == 'TUJUAN')
		{
			$listhasil = $this->LocalBgd_model_new->list_noplp_tujuan();	
		}	
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	
	}
	
	public function get_list_nosurat($namatable=NULL,$no_surat=NULL)
	{
		$listhasil = $this->LocalBgd_model_new->list_nosurat($namatable,$no_surat);		
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
		$listhasil = $this->LocalBgd_model_new->cari_hasil_batalplp($no_plp,$tgl_plp);	
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
		$listhasil = $this->LocalBgd_model_new->cari_hasil_mohonplp($no_surat,$tglsurat,$callsign,$gudang_tujuan);	
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
		$listhasil = $this->LocalBgd_model_new->id_mohon($namatable,$no_surat);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
    }

	public function updatedata($namatable,$isifield) {	
		
		if ($namatable == 'mohon_plp')
		{
			$namafield ='id_mohon=';
		}
		elseif ($namatable == 'batal_plp')
		{
			$namafield='id_batal=';
		}
		elseif ($namatable == 'mohon_resp_plp_tuj')
		{
			$namafield='ref_number=';
		}
		elseif ($namatable == 't_shipment_cloud')
		{
			$namafield='noid=';			
		}
		elseif ($namatable == 'get_imp_in')
		{
			$namafield='id_kms=';
		}
		elseif ($namatable == 'bc_respone_400')
		{
			$namafield='id_res_cn=';
		}
		// mengambil hasil mahasiswa dari hasilbase		
		$listhasil = $this->LocalBgd_model_new->updatesending($namatable,$namafield,$isifield);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function updatedata_bawah() 
	{
		$listhasil = $this->LocalBgd_model_new->updatedata_bawah();
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	public function get_view_plpfor_gatein($no_bl_awb=null)	{
		$listhasil = $this->LocalBgd_model_new->view_plpfor_gatein($no_bl_awb);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_forgateOut_xsyspjt()	
	{
		$listhasil = $this->LocalBgd_model_new->view_forgateOut_xsyspjt();
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_respon_forgateout_xsyspjt($NO_BARANG)
	{
		$listhasil = $this->LocalBgd_model_new->view_respon_forgateout_xsyspjt($NO_BARANG);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	public function get_view_shipment_gatein($mawb)	{
		$listhasil = $this->LocalBgd_model_new->view_shipment_gatein($mawb);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_mohon($id_mohon)	{
		$listhasil = $this->LocalBgd_model_new->view_mohon($id_mohon);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_respon_mohon_tujuan($id_header)	{
		$listhasil = $this->LocalBgd_model_new->view_respon_mohon_tujuan($id_header);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);	
	}

	public function get_view_tegah($no_bl_awb)
	{
		$listhasil = $this->LocalBgd_model_new->view_tegah($no_bl_awb);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);	
	}
	
	public function get_Check_gateIn_imp($no_bl_awb)
	{
		$listhasil = $this->LocalBgd_model_new->Check_gateIn_imp($no_bl_awb);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);	
	}
	
	public function get_Check_gateOut_imp($no_bl_awb)
	{
		$listhasil = $this->LocalBgd_model_new->Check_gateOut_imp($no_bl_awb);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);	
	}
	
	public function get_Check_gateOut_eco($limit,$id_kms)
	{
		$listhasil = $this->LocalBgd_model_new->Check_gateOut_eco($limit,$id_kms);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);	
	}
	
}