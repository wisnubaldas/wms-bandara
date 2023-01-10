<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LocalBgd_model_new extends CI_Model
{
	private $db8;
	private $db10;
	function __construct()
    {
        parent::__construct();			
		$this->load->database();
		$this->db8 = $this->load->database('tpsonline_mau', TRUE);
		$this->db10 = $this->load->database('tpsonline_mau', TRUE);
    }
	
	public function view_forgateout_xsyspjt()
	{
		$this->db10->distinct();
		$this->db10->select('id_kms, kd_dok, kd_tps, nm_angkut, no_voy_flight, call_sign, tg_tiba, kd_gudang,  no_bl_awb, tgl_bl_awb, no_master_bl_awb, tgl_master_bl_awb, id_consignee, consignee, bruto, no_bc11, tgl_bc11, no_pos_bc11, cont_asal, seri_kem, kd_kem, jml_kem, kd_timbun, kd_dok_inout, no_dok_inout, tgl_dok_inout, wk_inout, kd_sar_angkut, no_pol, pel_muat, pel_transit, pel_bongkar, gudang_tujuan, kode_kantor, no_daftar_pabean, tgl_daftar_pabean, no_segel_bc, tg_segel_bc, no_ijin_tps, tgl_ijin_tps, flag_transfer');
		$query = $this->db10->get('view_forgateout_xsyspjt');
		return $query->result();
	}
	
	public function view_respon_forgateout_xsyspjt($NO_BARANG)
	{
		$this->db10->distinct();
		$this->db10->select('*');
		$this->db10->where('NO_BARANG=',$NO_BARANG);
		$query = $this->db10->get('view_respon_forgateout_xsyspjt');
		return $query->result();
	}
	
	public function list_id_detail($namatable,$namafield,$isifield)
	{
		$this->db->select('*');
		$this->db->where($namafield,$isifield);
		$query = $this->db->get($namatable);
        return $query->result();
	}
	
	public function list_nomor_referensi($namatable)
	{
		$this->db->select('*');
		$this->db->order_by('noid', 'DESC');
		$query = $this->db->get($namatable,5);
        return $query->result();
	}
	
	public function list_alasan()
	{
		$this->db->select('*');
		$query = $this->db->get('master_alasan');
        return $query->result();
	}
	
	public function list_noplp_asal()
	{
		$this->db->select('*');
		$query = $this->db->get('view_plp_setuju_asal');
        return $query->result();
	}
	
	public function list_noplp_tujuan()
	{
		$this->db->select('*');
		$query = $this->db->get('view_plp_setuju_tujuan');
        return $query->result();
	}
	
	
	public function list_nobatalplp()
	{
		$this->db->select('*');
		$query = $this->db->get('batal_plp');
        return $query->result();
	}
	
	public function list_nosurat($namatable=NULL,$no_surat=NULL)
	{
		$this->db->select('*');
		if(!is_null($no_surat))$this->db->like('no_surat',$no_surat);
		if(is_null($namatable))$namatable='mohon_plp';
		if ($namatable == 'mohon_plp') 
		{
			$this->db->order_by('id_mohon', 'DESC');
		}
		elseif ($namatable == 'batal_plp') 
		{	
			$this->db->order_by('id_batal', 'DESC');
		}
		$query = $this->db->get($namatable);
        return $query->result();
	}
	
	public function cari_data_mohonplp($no_surat,$tglsurat,$callsign,$gudang_tujuan)
	{
		$this->db->distinct();
		$this->db->select('*');
		$this->db->where('no_surat =',$no_surat);
		$this->db->where('tgl_surat =',$tgl_surat);
		$this->db->where('call_sign =',$call_sign);
		$this->db->where('gudang_tujuan =',$gudang_tujuan);
		$query = $this->db->get('mohon_plp');
		return $query->result();
	}
	
	
	public function cari_data_batalplp($no_plp,$tgl_plp)
	{
		$this->db->distinct();
		$this->db->select('*');
		$this->db->where('no_plp =',$no_plp);
		$this->db->where('tgl_plp =',$tgl_plp);
		$query = $this->db->get('mohon_plp');
		return $query->result();
	}
	
	public function idmohon($namatable,$no_surat)
	{
		$this->db->where('no_surat =',$no_surat);
        $query = $this->db->get($namatable);
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
			$this->db->where($namafield, $isifield);
			$this->db->update($namatable, $data);
		}
		elseif ($namatable == 'bc_respone_400') 
		{
			$isdownload='1';
			$data = array(
						'isdownload' => $isdownload
				);
			$this->db10->where($namafield, $isifield);
			$this->db10->update($namatable, $data);
		}
		elseif ($namatable == 't_shipment_cloud')
		{
			$flag_proses_bc='1';
			$data = array(
						'flag_proses_bc' => $flag_proses_bc
				);
			$this->db8->where($namafield, $isifield);
			$this->db8->update($namatable,$data);
		}
		elseif ($namatable == 'get_imp_in')
		{
			$flag_gateout='1';
			$data = array(
						'flag_gateout' => $flag_gateout
				);
			$this->db->where($namafield, $isifield);
			$this->db->update($namatable,$data);
			
		}
		else
		{
			$flag_transfer='1';
			$data = array(
					'flag_transfer' => $flag_transfer
			);
			$this->db->where($namafield, $isifield);
			$this->db->where('flag_transfer <> 2');
			$this->db->where('flag_transfer <> 10');
			$this->db->update($namatable, $data);
		}
	}
	
	public function updatedata_bawah() 
	{
		$flag_cn='1';
			$data = array(
					'flag_cn' => $flag_cn
			);
			$this->db10->where('flag_cn', $flag_cn);		
			$this->db10->update('bc_respone_400', $data);
	}
	
	public function statusnow($status)
	{
		$this->db->where('status =', $status);
		$this->db->where('flag_close = 0');
		$query = $this->db->get('t_shipment_ekspor');
        return $query->result();
	}
	
	public function ekspor_detail($status,$mawb,$history)
	{
		$this->db->where('status =', $status);
		$this->db->where('mawb =',$mawb);
		$this->db->like('history',$history);
		$query = $this->db->get('t_shipment_ekspor');
        return $query->result();
	}
	
	public function update_ekspor($status,$mawb)
	{
		$flag_close='1';
		$data = array(
					'flag_close' => $flag_close
			);

		$this->db->where('status =', $status);
		$this->db->where('mawb =', $mawb);		
		$this->db->update('t_shipment_ekspor', $data);
	}
	
	public function view_shipment_gatein($mawb)
	{
		$this->db8->distinct();
		$this->db8->select('noid,mawb,nopos,subpos,subsubpos,Package,consignee_name,hawb,tglawb,Weight');
		$this->db8->where('mawb =',$mawb);
		$this->db8->where('flag_proses_bc=0');
		$this->db8->limit(1000);
		$query = $this->db8->get('t_shipment_cloud');
		
		return $query->result();
	}
	
	public function view_mohon($id_mohon)
	{
		$this->db->distinct();
		$this->db->select('*');
		$this->db->where('id_mohon >',$id_mohon);
		$this->db->order_by('id_mohon');		
		$query = $this->db->get('view_mohon',10);
		return $query->result();
	}
	
	public function view_respon_mohon_tujuan($id_header)
	{
		$this->db->distinct();
		$this->db->select('*');
		$this->db->where('id_header >',$id_header);
		$this->db->order_by('id_header');		
		$query = $this->db->get('view_respon_mohon_tujuan',10);
		return $query->result();
	}
	
	public function view_plpfor_gatein($no_bl_awb=null)
	{
		$this->db->distinct();
		$this->db->select('*');
		if(!is_null($no_bl_awb))$this->db->like('no_bl_awb',$no_bl_awb);
		$query = $this->db->get('view_plp_forgate');
		return $query->result();
	}
	
	public function view_tegah($no_bl_awb)
	{
		$this->db->distinct();
		$this->db->select('*');
		$this->db->where('no_bl_awb',$no_bl_awb);
		$this->db->where('flag_release =0');
		$query = $this->db->get('auto_penegahan');
		return $query->result();
	}
	
	public function Check_gateIn_imp($no_bl_awb)
	{
		$this->db->distinct();
		$this->db->select('*');
		$this->db->where('no_bl_awb',$no_bl_awb);
		$query = $this->db->get('get_imp_in');
		return $query->result();
	}
	
	public function Check_gateOut_imp($no_bl_awb)
	{
		$this->db->distinct();
		$this->db->select('*');
		$this->db->where('no_bl_awb',$no_bl_awb);
		$query = $this->db->get('get_imp_out');
		return $query->result();
	}
	
	public function Check_gateOut_eco($limit,$id_kms)
	{
		$this->db->distinct();
		$this->db->select('*');
		$this->db->where('flag_gateout=0');
		$this->db->where('id_kms>=',$id_kms);
		$this->db->where('no_bl_awb not in (select no_bl_awb from get_imp_out)');
		$this->db->limit($limit);
		$this->db->order_by('id_kms');
		$query = $this->db->get('get_imp_in');
		return $query->result();
	}
	
}