<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LocalGatrans_model_new extends CI_Model
{
	private $db3;
	private $db4;
	private $db5;
	
	function __construct()
    {
        parent::__construct();			
		$this->db3 = $this->load->database('tpsonline_gtln', TRUE);	
		$this->db4 = $this->load->database('crm_gtln', TRUE);	
		$this->db5 = $this->load->database('dbrespon', TRUE);	
    }
	
	public function data_import_gateIN($tgl_first,$tgl_last,$id_kms,$baris=null)
	{
		$kode_kantor='050100';
		$kd_tps='GATR';
		$this->db3->select('*');
		$this->db3->where('id_kms>=',$id_kms);
		$this->db3->where('kode_kantor=',$kode_kantor);
		$this->db3->where('tgl_dok_inout>=',$tgl_first);
		$this->db3->where('tgl_dok_inout<=',$tgl_last);
		$this->db3->where('kd_tps=',$kd_tps);
		if(!is_null($baris))
		{
			$this->db3->limit($baris);
		}
			else
		{
			$this->db3->limit(1000);		
		}			
		$query = $this->db3->get('get_imp_in');
        return $query->result();
		
	}
	
	
	public function data_import_gateOut($tgl_first,$tgl_last,$id_kms,$baris=null,$flag_transfer=null)
	{
		$kode_kantor='050100';
		$kd_tps='GATR';
		$this->db3->select('*');	
		$this->db3->where('kode_kantor',$kode_kantor);			
		if(!is_null($baris))
		{	
			$this->db3->where('flag_transfer=',$flag_transfer);
		}
			else
		{
			$this->db3->where('flag_transfer=0');
		}
		if(!is_null($baris))
		{
			$this->db3->limit($baris);
		}
			else
		{
			$this->db3->limit(1000);		
		}
		$this->db3->where('kd_tps=',$kd_tps);	
		$this->db3->where('id_kms>=',$id_kms);
		$this->db3->where('tgl_dok_inout>=',$tgl_first);
		$this->db3->where('tgl_dok_inout<=',$tgl_last);
		$query = $this->db3->get('get_imp_out');			
        return $query->result();
	}
	
	
	
	public function view_forgateOut_gtln($id_kms)
	{
		$kode_kantor='050100';
		$this->db3->distinct();
		$this->db3->select('id_kms, kd_dok, kd_tps, nm_angkut, no_voy_flight, call_sign, tg_tiba, kd_gudang,  no_bl_awb, tgl_bl_awb, no_master_bl_awb, tgl_master_bl_awb, id_consignee, consignee, bruto, no_bc11, tgl_bc11, no_pos_bc11, cont_asal, seri_kem, kd_kem, jml_kem, kd_timbun, kd_dok_inout, no_dok_inout, tgl_dok_inout, wk_inout, kd_sar_angkut, no_pol, pel_muat, pel_transit, pel_bongkar, gudang_tujuan, kode_kantor, no_daftar_pabean, tgl_daftar_pabean, no_segel_bc, tg_segel_bc, no_ijin_tps, tgl_ijin_tps, flag_transfer');
		$this->db3->where('kode_kantor=',$kode_kantor);
		$this->db3->where('flag_transfer= 2');
		$this->db3->where('flag_gateout=0');
		$this->db3->where('id_kms>=',$id_kms);
		$this->db3->limit(5000);
		$query = $this->db3->get('get_imp_in');
		return $query->result();;
	}
	
	public function view_forgateOut_gtln_dps($id_kms)
	{
		$kode_kantor='080100';
		$this->db3->distinct();
		$this->db3->select('id_kms, kd_dok, kd_tps, nm_angkut, no_voy_flight, call_sign, tg_tiba, kd_gudang,  no_bl_awb, tgl_bl_awb, no_master_bl_awb, tgl_master_bl_awb, id_consignee, consignee, bruto, no_bc11, tgl_bc11, no_pos_bc11, cont_asal, seri_kem, kd_kem, jml_kem, kd_timbun, kd_dok_inout, no_dok_inout, tgl_dok_inout, wk_inout, kd_sar_angkut, no_pol, pel_muat, pel_transit, pel_bongkar, gudang_tujuan, kode_kantor, no_daftar_pabean, tgl_daftar_pabean, no_segel_bc, tg_segel_bc, no_ijin_tps, tgl_ijin_tps, flag_transfer');
		$this->db3->where('kode_kantor=',$kode_kantor);
		$this->db3->where('flag_transfer= 2');
		$this->db3->where('flag_gateout=0');
		$this->db3->where('id_kms>=',$id_kms);
		$this->db3->limit(5000);
		$query = $this->db3->get('get_imp_in');
		return $query->result();
	}
	
	public function view_respon_forgateout_gtln($NO_BARANG)
	{
		$this->db5->distinct();
		$this->db5->select('*');
		$this->db5->where('NO_BARANG= ',$NO_BARANG);
		$query = $this->db5->get('view_respon_forgateout_gtln');
		return $query->result();
	}
	
	public function view_respon_gateout($NO_BARANG)
	{
		$this->db5->distinct();
		$this->db5->select('*');
		$this->db5->where('NO_BARANG= ',$NO_BARANG);
		$query = $this->db5->get('bc_respone_400');
		return $query->result();
	}
	
	public function list_berat_mawb($mawb)
	{
		$this->db4->select('mawb,tot_gwt');
		$this->db4->where('mawb = ',$mawb);
		$query = $this->db4->get('h_mawb');
        return $query->result();
	}
	
	public function list_id_detail($namatable,$namafield,$isifield)
	{
		$this->db3->select('*');
		$this->db3->where($namafield,$isifield);
		$query = $this->db3->get($namatable);
        return $query->result();
	}
	
	public function list_nomor_referensi($namatable)
	{
		$this->db3->select('*');		
		$this->db3->order_by('noid', 'DESC');
		$query = $this->db3->get($namatable,30);
        return $query->result();
	}
	
	public function list_alasan()
	{
		$this->db3->select('*');
		$query = $this->db3->get('master_alasan');
        return $query->result();
	}
	
	public function list_noplp_asal()
	{
		$this->db3->select('*');
		$query = $this->db3->get('view_plp_setuju_asal');
        return $query->result();
	}
	
	public function list_noplp_tujuan()
	{
		$this->db3->select('*');
		$query = $this->db3->get('view_plp_setuju_tujuan');
        return $query->result();
	}
	
	public function list_mohon_resp_plp_tuj($ref_number=null)
	{
		$this->db3->select('*');		
		if(!is_null($ref_number))$this->db3->like('ref_number',$ref_number);
		$query = $this->db3->get('mohon_resp_plp_tuj');
        return $query->result();
	}
	
	public function list_mohon_resp_plp_tuj_det($id_header)
	{
		$this->db3->select('*');		
		$this->db3->like('id_header',$id_header);
		$query = $this->db3->get('mohon_resp_plp_tuj_det');
        return $query->result();
	}
	
	public function list_nobatalplp()
	{
		$this->db3->select('*');
		$query = $this->db3->get('batal_plp');
        return $query->result();
	}
	
	public function list_nosurat($namatable=NULL,$no_surat=NULL)
	{
		$this->db3->select('*');
		if(!is_null($no_surat))$this->db3->like('no_surat',$no_surat);
		if(is_null($namatable))$namatable='mohon_plp';
		$this->db3->order_by('no_surat', 'DESC');
		$query = $this->db3->get($namatable,30);
        return $query->result();
	}
	
	public function list_nosurat_dps($namatable=NULL,$no_surat=NULL)
	{
		$kd_kantor='080100';
		$this->db3->select('*');
		$this->db3->where('kd_kantor=',$kd_kantor);
		if(!is_null($no_surat))$this->db3->like('no_surat',$no_surat);
		if(is_null($namatable))$namatable='mohon_plp';
		$this->db3->order_by('no_surat', 'DESC');
		$query = $this->db3->get($namatable,30);
        return $query->result();
	}
	
	public function cari_data_mohonplp($no_surat,$tglsurat,$callsign,$gudang_tujuan)
	{
		$this->db3->distinct();
		$this->db3->select('*');
		$this->db3->where('no_surat =',$no_surat);
		$this->db3->where('tgl_surat =',$tgl_surat);
		$this->db3->where('call_sign =',$call_sign);
		$this->db3->where('gudang_tujuan =',$gudang_tujuan);
		$query = $this->db3->get('mohon_plp');
		return $query->result();
	}
	
	public function cari_data_batalplp($no_plp,$tgl_plp)
	{
		$this->db3->distinct();
		$this->db3->select('*');
		$this->db3->where('no_plp =',$no_plp);
		$this->db3->where('tgl_plp =',$tgl_plp);
		$query = $this->db3->get('mohon_plp');
		return $query->result();
	}
	
	public function idmohon($namatable,$no_surat)
	{
		$this->db3->where('no_surat =',$no_surat);
        $query = $this->db3->get($namatable);
        return $query->result();
	}
	
	public function updatesending($namatable,$namafield,$isifield)
	{
		if ($namatable == 'mohon_resp_plp_tuj') 
		{
			$status_gatein='1';
			$data = array(
						'status_gatein' => $status_gatein
				);
			$this->db3->where($namafield, $isifield);
			$this->db3->update($namatable, $data);
		}
		elseif ($namatable == 'bc_respone_400') 
		{
			$isdownload='1';
			$data = array(
						'isdownload' => $isdownload
				);
			$this->db5->where($namafield, $isifield);
			$this->db5->update($namatable, $data);
		}
		elseif ($namatable == 'get_imp_in') 
		{
			$flag_gateout=1;
			$data = array(
						'flag_gateout' => $flag_gateout
				);
			$this->db3->where($namafield, $isifield);
			$this->db3->update($namatable, $data);
		}
		elseif ($namatable == 't_shipment_cloud')
		{
			$flag_proses_bc='1';
			$data = array(
						'flag_proses_bc' => $flag_proses_bc
				);
			$this->db4->where($namafield, $isifield);
			$this->db4->update($namatable,$data);
		}
		else
		{	
			$flag_transfer='1';
			$data = array(
						'flag_transfer' => $flag_transfer
				);
			$this->db3->where($namafield, $isifield);
			$this->db3->where('flag_transfer <> 2');
			$this->db3->where('flag_transfer <> 10');
			$this->db3->update($namatable, $data);
		}
	}
	
	public function view_plpfor_gatein()
	{
		$this->db3->distinct();
		$this->db3->select('*');
		$query = $this->db3->get('view_plp_forgate');
		return $query->result();
	}
	
	public function view_plpfor_gatein_DPS()
	{
		$this->db3->distinct();
		$this->db3->select('*');
		$this->db3->where("kd_tps_tujuan ='BPKU'");
		$query = $this->db3->get('view_plp_forgate');
		return $query->result();
	}
	
	public function view_shipment_gatein($mawb)
	{
		$this->db4->distinct();
		$this->db4->select('noid,mawb,nopos,subpos,subsubpos,Package,consignee_name,hawb,tglawb,Weight');
		$this->db4->where('mawb =',$mawb);
		$this->db4->where('flag_proses_bc=0');
		$query = $this->db4->get('t_shipment_cloud');
		return $query->result();
	}
	
	public function view_shipment_gatein_dps($mawb)
	{
		$kdkntr='080100';
		$this->db4->distinct();
		$this->db4->select('noid,mawb,nopos,subpos,subsubpos,Package,consignee_name,hawb,tglawb,Weight');
		$this->db4->where('mawb =',$mawb);
		$this->db4->where('kdkntr =',$kdkntr);
		$this->db4->where('flag_proses_bc=0');
		$query = $this->db4->get('t_shipment_cloud');
		return $query->result();
	}
	
	
	public function view_mohon($id_mohon)
	{
		$this->db3->distinct();
		$this->db3->select('*');
		$this->db3->where('id_mohon <',$id_mohon);
		$this->db3->order_by('ref_number','DESC');		
		$query = $this->db3->get('view_mohon',30);
		return $query->result();
	}
	
	public function view_respon_mohon_tujuan($id_header)
	{
		$this->db3->distinct();
		$this->db3->select('*');
		$this->db3->where('id_header >',$id_header);
		$this->db3->order_by('ref_number','DESC');		
		$query = $this->db3->get('view_respon_mohon_tujuan',30);
		return $query->result();
	}
	
	public function view_gate_imp_in_GTLN($limit)
	{
		$this->db3->distinct();
		$this->db3->select('*');
		$this->db3->where("kd_tps ='GATR'");	
		$this->db3->where('flag_transfer=0');	
		$query = $this->db3->get('get_imp_in',$limit);
		return $query->result();
	}
	
	public function view_gate_imp_in_GTLN_DPS($limit)
	{
		$this->db3->distinct();
		$this->db3->select('*');
		$this->db3->where("kd_tps <>'GATR'");	
		$this->db3->where('flag_transfer=0');		
		$query = $this->db3->get('get_imp_in',$limit);
		return $query->result();
	}
	
	public function cari_nomor_ref($ref_number)
	{
		$this->db3->select('*');		
		$this->db3->like('ref_number',$ref_number);
		$query = $this->db3->get('mohon_plp');
        return $query->result();
	}
	
	public function list_t_number($remarknum)
	{
		$this->db3->distinct();
		$this->db3->select('*');
		$this->db3->where('remarknum',$remarknum);	
		$query = $this->db3->get('t_number');
		return $query->result();
	}
	
	
	public function update_dinamis($namatable,$namafield,$isifield,$namacode,$nilaicode)
	{
		$data = array(
			$namafield => $isifield
		);
		$this->db3->where($namacode,$nilaicode);	
		$this->db3->update($namatable,$data);
	}
}