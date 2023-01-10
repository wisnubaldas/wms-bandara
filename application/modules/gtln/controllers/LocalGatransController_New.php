<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LocalGatransController_New extends MX_Controller
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('LocalGatrans_model_new'));
    }	

	
	public function show_data_import_gateIN($tgl_first,$tgl_last,$id_kms,$baris=null)
	{
		$listhasil = $this->LocalGatrans_model_new->data_import_gateIN($tgl_first,$tgl_last,$id_kms,$baris);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function show_data_import_gateOut($tgl_first,$tgl_last,$id_kms,$baris=null)
	{
		$listhasil = $this->LocalGatrans_model_new->data_import_gateOut($tgl_first,$tgl_last,$id_kms,$baris=null,$flag_transfer=null);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_berat_mawb($mawb)
	{
		$listhasil = $this->LocalGatrans_model_new->list_berat_mawb($mawb);
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
			$listhasil = $this->LocalGatrans_model_new->list_id_detail('mohon_plp_det','id_mohon =',$id_header);
		}
		elseif ($namatable=='mohon_resp_plp') {
			$listhasil = $this->LocalGatrans_model_new->list_id_detail('mohon_resp_plp','Noid =',$id_header);
		}
		elseif ($namatable=='mohon_resp_plp_det') {
			$listhasil = $this->LocalGatrans_model_new->list_id_detail('mohon_resp_plp_det','id_header =',$id_header);
		}
		elseif ($namatable=='mohon_resp_plp_tuj') {
			$listhasil = $this->LocalGatrans_model_new->list_id_detail('mohon_resp_plp_tuj','Noid =',$id_header);		
		}
		elseif ($namatable=='mohon_resp_plp_tuj_det') {
			$listhasil = $this->LocalGatrans_model_new->list_id_detail('mohon_resp_plp_tuj_det','id_header =',$id_header);		
		}
		elseif ($namatable=='batal_plp_det') {
			$listhasil = $this->LocalGatrans_model_new->list_id_detail('batal_plp_det','id_batal =',$id_header);		
		}		
		elseif ($namatable=='batal_resp_plp') {
			$listhasil = $this->LocalGatrans_model_new->list_id_detail('batal_resp_plp','Noid =',$id_header);		
		}
		elseif ($namatable=='batal_resp_plp_det') {
			$listhasil = $this->LocalGatrans_model_new->list_id_detail('batal_resp_plp_det','id_header =',$id_header);	
		}
		elseif ($namatable=='batal_resp_plp_tuj') {
			$listhasil = $this->LocalGatrans_model_new->list_id_detail('batal_resp_plp_tuj','Noid =',$id_header);	
		}
		elseif ($namatable=='batal_resp_plp_tuj_det') {
			$listhasil = $this->LocalGatrans_model_new->list_id_detail('batal_resp_plp_tuj_det','id_header =',$id_header);	
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
		$listhasil = $this->LocalGatrans_model_new->list_nomor_referensi($namatable);		
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_mohon_resp_plp_tuj($ref_number=null)
	{
		$listhasil = $this->LocalGatrans_model_new->list_mohon_resp_plp_tuj($ref_number);		
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_mohon_resp_plp_tuj_det($id_header)
	{
		$listhasil = $this->LocalGatrans_model_new->list_mohon_resp_plp_tuj_det($id_header);		
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
			$listhasil = $this->LocalGatrans_model_new->list_noplp_asal();
		}
		elseif ($jenis == 'TUJUAN')
		{
			$listhasil = $this->LocalGatrans_model_new->list_noplp_tujuan();	
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
		$listhasil = $this->LocalGatrans_model_new->list_nosurat($namatable,$no_surat);		
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_nosurat_dps($namatable=NULL,$no_surat=NULL)
	{
		$listhasil = $this->LocalGatrans_model_new->list_nosurat_dps($namatable,$no_surat);		
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
		$listhasil = $this->LocalGatrans_model_new->cari_hasil_batalplp($no_plp,$tgl_plp);	
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
		$listhasil = $this->LocalGatrans_model_new->cari_hasil_mohonplp($no_surat,$tglsurat,$callsign,$gudang_tujuan);	
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
		$listhasil = $this->LocalGatrans_model_new->id_mohon($namatable,$no_surat);
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
		elseif ($namatable == 'get_imp_in')
		{
			$namafield='id_kms=';
		}
		elseif ($namatable == 't_shipment_cloud')
		{
			$namafield='noid=';			
		}
		elseif ($namatable == 'bc_respone_400')
		{
			$namafield='id_res_cn=';
		}
		// mengambil hasil mahasiswa dari hasilbase		
		$listhasil = $this->LocalGatrans_model_new->updatesending($namatable,$namafield,$isifield);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_plpfor_gatein()	
	{
		$listhasil = $this->LocalGatrans_model_new->view_plpfor_gatein();
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_plpfor_gatein_DPS()
	{
		$listhasil = $this->LocalGatrans_model_new->view_plpfor_gatein_DPS();
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_forgateOut_gtln($id_kms)	
	{
		$listhasil = $this->LocalGatrans_model_new->view_forgateOut_gtln($id_kms);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_forgateOut_gtln_dps($id_kms)
	{
		$listhasil = $this->LocalGatrans_model_new->view_forgateOut_gtln_dps($id_kms);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	
	public function get_view_respon_forgateout_gtln($NO_BARANG)
	{
		$listhasil = $this->LocalGatrans_model_new->view_respon_forgateout_gtln($NO_BARANG);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_respon_gateout($NO_BARANG)
	{
		$listhasil = $this->LocalGatrans_model_new->view_respon_gateout($NO_BARANG);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_shipment_gatein($mawb)	{
		$listhasil = $this->LocalGatrans_model_new->view_shipment_gatein($mawb);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_shipment_gatein_dps($mawb)	{
		$listhasil = $this->LocalGatrans_model_new->view_shipment_gatein_dps($mawb);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	
	
	public function get_view_mohon($id_mohon)	{
		$listhasil = $this->LocalGatrans_model_new->view_mohon($id_mohon);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_view_respon_mohon_tujuan($id_header)	{
		$listhasil = $this->LocalGatrans_model_new->view_respon_mohon_tujuan($id_header);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);	
	}
	
	public function get_view_gate_imp_in_GTLN($limit)
	{
		$listhasil = $this->LocalGatrans_model_new->view_gate_imp_in_GTLN($limit);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);	
	}
	
	public function get_view_gate_imp_in_GTLN_DPS($limit)
	{
		$listhasil = $this->LocalGatrans_model_new->view_gate_imp_in_GTLN_DPS($limit);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);	
	}
	
	public function get_cari_nomor_ref($ref_number)
	{
		$listhasil = $this->LocalGatrans_model_new->cari_nomor_ref($ref_number);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);
		
	}
	
	public function get_list_t_number($remarknum)
	{
		$listhasil = $this->LocalGatrans_model_new->list_t_number($remarknum);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		// mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($hasil));
        exit($hasil);	
		
	}
	
	public function get_update_dinamis($namatable,$namafield,$isifield,$namacode,$nilaicode)
	{
		$listhasil = $this->LocalGatrans_model_new->update_dinamis($namatable,$namafield,$isifield,$namacode,$nilaicode);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);	
	}
	
}