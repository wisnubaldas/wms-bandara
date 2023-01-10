<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gate_model extends CI_Model
{
	private $db4;
	private $db7;
	private $db8;
    function __construct()
    {
        parent::__construct();			
		$this->db4 = $this->load->database('tpsonline_mau', TRUE);
		$this->db7 = $this->load->database('rdwarehouse_aap_read', TRUE);
		$this->db8 = $this->load->database('rdwarehouse_aap', TRUE);
		$this->db5 = $this->load->database('db_tpsonline', TRUE);
    }
	// ***************  show tps online ******************************
	
	
	public function Check_c1_imp($noid)
	{
		
		$this->db7->select('*');    		
		$this->db7->distinct();
		$this->db7->where('fl_gate=0');
		$this->db7->where('noid >=',$noid);
		$this->db7->limit(5000);
		$this->db7->from('imp_scan_c1');
		$query = $this->db7->get();
		return $query->result();
	}
	
	public function Check_c1_imp_hawb($hawb)
	{
		
		$this->db7->select('*');    		
		$this->db7->distinct();
		$this->db7->where('hawb',$hawb);
		$this->db7->from('imp_scan_c1');
		$query = $this->db7->get();
		return $query->result();
	}
	
	public function m_manifest_detail($token,$no_host_blawb=null)
	{
		$this->db5->select('*');    
		if(!is_null($no_host_blawb))$this->db5->where('no_host_blawb',$no_host_blawb);	
		$this->db5->where('token',$token);	
		$this->db5->from('manifest_detail');
		$query = $this->db5->get();
		return $query->result();
		
	}
	
	public function Check_gateIn_imp($no_bl_awb)
	{
		$this->db4->select('*');    
		$this->db4->where('no_bl_awb',$no_bl_awb);
		$this->db4->from('get_imp_in');
		$query = $this->db4->get();
		return $query->result();
	}
	
	public function Check_gateOut_imp($no_bl_awb)
	{
		$this->db4->select('*');    
		$this->db4->where('no_bl_awb',$no_bl_awb);
		$this->db4->from('get_imp_out');
		$query = $this->db4->get();
		return $query->result();
	}
	
	public function GateOut_sys_lama($limit,$flag_transfer,$id_kms)
	{
		$this->db4->select('*');    
		$this->db4->where('id_kms>=',$id_kms);
		$this->db4->where('flag_transfer',$flag_transfer);
		$this->db4->order_by('id_kms');	
		$this->db4->from('get_imp_out_sys_lama');
		$this->db4->limit($limit);
		$query = $this->db4->get();
		return $query->result();
	}
	
	public function Check_gateIn_sys_lama($no_bl_awb) 
	{
		$this->db4->select('*');    
		$this->db4->where('no_bl_awb',$no_bl_awb);
		$this->db4->from('get_imp_in_sys_lama');
		$query = $this->db4->get();
		return $query->result();
	}
	
	public function GateIn_sys_lama($limit,$flag_transfer,$id_kms)
	{
		$this->db4->select('*');    
		$this->db4->where('id_kms>=',$id_kms);
		$this->db4->where('flag_transfer',$flag_transfer);
		$this->db4->order_by('id_kms');			
		$this->db4->from('get_imp_in_sys_lama');
		$this->db4->limit($limit);
		$query = $this->db4->get();
		return $query->result();
	}
	
	public function show_gateIn_imp_tanggal($token,$limit,$flag_transfer,$tgfirst,$tglast,$id_kms)
	{
		$this->db4->select('*');    
		$this->db4->where('id_kms>=',$id_kms);
		$this->db4->where('flag_transfer',$flag_transfer);
		$this->db4->where("tgl_dok_inout between CAST('".$tgfirst."' as date) AND CAST('".$tglast."' as date)");
		$this->db4->where('token',$token);
		$this->db4->order_by('id_kms','DESC');	
		$this->db4->from('get_imp_in');
		$this->db4->limit($limit);
		$query = $this->db4->get();
		return $query->result();
	}	
	public function show_gateIn_imp_mawb($token,$limit,$flag_transfer,$no_master_bl_awb,$id_kms)
	{
		$this->db4->select('*');    
		$this->db4->where('id_kms>=',$id_kms);
		$this->db4->where('flag_transfer',$flag_transfer);
		$this->db4->where('no_master_bl_awb',$no_master_bl_awb);
		$this->db4->where('token',$token);
		$this->db4->order_by('id_kms','DESC');	
		$this->db4->from('get_imp_in');
		$this->db4->limit($limit);
		$query = $this->db4->get();
		return $query->result();
	}	
	public function show_gateOut_imp_tanggal($token,$limit,$flag_transfer,$tgfirst,$tglast,$id_kms)
	{
		$this->db4->select('*');    
		$this->db4->where('id_kms>=',$id_kms);
		$this->db4->where('flag_transfer',$flag_transfer);	
		$this->db4->where("tgl_dok_inout between CAST('".$tgfirst."' as date) AND CAST('".$tglast."' as date)");
		$this->db4->where('token',$token);
		$this->db4->order_by('id_kms','DESC');	
		$this->db4->from('get_imp_out');
		$this->db4->limit($limit);
		$query = $this->db4->get();
		return $query->result();
	}
	public function show_gateOut_imp_mawb($token,$limit,$flag_transfer,$no_master_bl_awb,$id_kms)
	{
		$this->db4->select('*');    
		$this->db4->where('id_kms>=',$id_kms);
		$this->db4->where('flag_transfer',$flag_transfer);	
		$this->db4->where('no_master_bl_awb',$no_master_bl_awb);	
		$this->db4->where('token',$token);
		$this->db4->order_by('id_kms','DESC');	
		$this->db4->from('get_imp_out');
		$this->db4->limit($limit);
		$query = $this->db4->get();
		return $query->result();
	}	
	public function show_gateIn_exp_tanggal($token,$limit,$flag_transfer,$tgfirst,$tglast,$id_kms)
	{
		$this->db4->select('*');    
		$this->db4->where('id_kms>=',$id_kms);
		$this->db4->where('flag_transfer',$flag_transfer);	
		$this->db4->where("tgl_dok_inout between CAST('".$tgfirst."' as date) AND CAST('".$tglast."' as date)");
		$this->db4->where('token',$token);
		$this->db4->order_by('id_kms','DESC');	
		$this->db4->from('get_exp_in');
		$this->db4->limit($limit);
		$query = $this->db4->get();
		return $query->result();
	}
	public function show_gateIn_exp_mawb($token,$limit,$flag_transfer,$no_master_bl_awb,$id_kms)
	{
		$this->db4->select('*');    
		$this->db4->where('id_kms>=',$id_kms);
		$this->db4->where('flag_transfer',$flag_transfer);	
		$this->db4->where('no_master_bl_awb',$no_master_bl_awb);
		$this->db4->where('token',$token);
		$this->db4->order_by('id_kms','DESC');	
		$this->db4->from('get_exp_in');
		$this->db4->limit($limit);
		$query = $this->db4->get();
		return $query->result();
	}	
	
	public function show_gateIn_exp_for_Out($token,$limit,$flag_transfer,$flag_gateout,$id_kms)
	{
		$this->db4->select('*');    
		$this->db4->where('id_kms>=',$id_kms);
		$this->db4->where('flag_transfer',$flag_transfer);	
		$this->db4->where('flag_gateout',$flag_gateout);	
		$this->db4->where('token',$token);
		$this->db4->order_by('id_kms','DESC');	
		$this->db4->from('get_exp_in');
		$this->db4->limit($limit);
		$query = $this->db4->get();
		return $query->result();
	}
	
	public function show_gateOut_exp_tanggal($token,$limit,$flag_transfer,$tgfirst,$tglast,$id_kms)
	{
		$this->db4->select('*');    
		$this->db4->where('id_kms>=',$id_kms);
		$this->db4->where('flag_transfer',$flag_transfer);	
		//$this->db4->where("tgl_dok_inout between CAST('".$tgfirst."' as date) AND CAST('".$tglast."' as date)");
		$this->db4->where('token',$token);
		$this->db4->order_by('id_kms');	
		$this->db4->from('get_exp_out');
		$this->db4->limit($limit);
		$query = $this->db4->get();
		return $query->result();
	}
	public function show_gateOut_exp_mawb($token,$limit,$flag_transfer,$no_master_bl_awb,$id_kms)
	{
		$this->db4->select('*');    
		$this->db4->where('id_kms>=',$id_kms);
		$this->db4->where('flag_transfer',$flag_transfer);	
		$this->db4->where('no_master_bl_awb',$no_master_bl_awb);
		$this->db4->where('token',$token);
		$this->db4->order_by('id_kms','DESC');	
		$this->db4->from('get_exp_out');
		$this->db4->limit($limit);
		$query = $this->db4->get();
		return $query->result();
	}
	
	//**************** SENDING DATA TPS ONLINE ***************************************
	
	public function sending_gatein_imp($limit,$flag_transfer,$id_kms)
	{
		$this->db4->select('*');    
		$this->db4->where('id_kms>=',$id_kms);
		$this->db4->where('flag_transfer',$flag_transfer);	
		$this->db4->from('get_imp_in');
		$this->db4->limit($limit);
		$query = $this->db4->get();
		return $query->result();
	}
	
	public function sending_gateout_imp($limit,$flag_transfer,$id_kms)
	{
		$this->db4->select('*');    
		$this->db4->where('id_kms>=',$id_kms);
		$this->db4->where('flag_transfer',$flag_transfer);
		$this->db4->from('get_imp_out');
		$this->db4->limit($limit);
		$query = $this->db4->get();
		return $query->result();
	}
	
	public function sending_gatein_exp($token,$limit,$flag_transfer,$id_kms)
	{
		$this->db4->select('*');    
		$this->db4->where('id_kms>=',$id_kms);
		$this->db4->where('flag_transfer',$flag_transfer);	
		$this->db4->where('token',$token);
		$this->db4->from('get_exp_in');
		$this->db4->limit($limit);
		$query = $this->db4->get();
		return $query->result();
	}
	
	public function sending_gateout_exp($token,$limit,$flag_transfer,$id_kms)
	{
		$this->db4->select('*');    
		$this->db4->where('id_kms>=',$id_kms);
		$this->db4->where('flag_transfer',$flag_transfer);	
		$this->db4->where('token',$token);
		$this->db4->from('get_exp_out');
		$this->db4->limit($limit);
		$query = $this->db4->get();
		return $query->result();
	}
	
	public function ready_move_to_cloud($type)
	{
		$flag_transfer="2";
		$this->db4->select('*'); 
		$this->db4->where('flag_transfer',$flag_transfer);	
		if ($type == "get_imp_in") 
		{
			$this->db4->from('get_imp_in');	
		}
		else
		{
			$this->db4->from('get_imp_out');	
		}
		$this->db4->limit(500);
		$query = $this->db4->get();
		return $query->result();
	}
	
	
	//**************** modul manifest dasar ***************************************
	
	public function modul_manifest_header($token,$nomor_aju=null)
	{
		$this->db5->select('*');    
		if(!is_null($nomor_aju))$this->db5->where('nomor_aju',$nomor_aju);	
		//$this->db4->where('token',$token);
		$this->db5->from('manifest_header');
		$query = $this->db5->get();
		return $query->result();
	}
	
	public function modul_manifest_masterentry($token,$nomor_aju=null,$id_master)
	{
		$this->db5->select('*');    
		if(!is_null($nomor_aju))$this->db5->where('nomor_aju',$nomor_aju);	
		$this->db5->where('id_master',$id_master);
		$this->db5->where('token',$token);
		$this->db5->from('manifest_masterentry');
		$query = $this->db5->get();
		return $query->result();
	}
	
	public function modul_manifest_detail($token,$nomor_aju=null,$id_detail)
	{
		$this->db5->select('*');    
		if(!is_null($nomor_aju))$this->db5->where('nomor_aju',$nomor_aju);	
		$this->db5->where('id_detail',$id_detail);
		$this->db5->where('token',$token);
		$this->db5->from('manifest_detail');
		$query = $this->db5->get();
		return $query->result();
	}
	
	public function modul_manifest_detail_by_mawb($token,$no_master_blawb)
	{
		$this->db5->select('b.*');    		
		$this->db5->from('manifest_detail a');
		$this->db5->join('manifest_header b','a.nomor_aju=b.nomor_aju','inner');
		$this->db5->where('a.no_master_blawb',$no_master_blawb);			
		$this->db5->where('a.token',$token);
		$query = $this->db5->get();
		return $query->result();
	}
	
	public function modul_manifest_detail_reguler($token,$no_master_blawb,$no_host_blawb)
	{
		$this->db5->select('*');    
		$this->db5->where('no_master_blawb',$no_master_blawb);	
		$this->db5->where('no_host_blawb',$no_host_blawb);
		$this->db5->where('token',$token);
		$this->db5->from('manifest_detail');
		$query = $this->db5->get();
		return $query->result();
	}
	
	public function modul_manifest_barang($token,$id_detail,$id_barang=null)
	{
		
		$this->db5->select('*');    
		$this->db5->where('id_detail',$id_detail);
		if(!is_null($id_barang))$this->db5->where('id_barang',$id_barang);
		$this->db5->where('token',$token);
		$this->db5->from('manifest_barang');
		$query = $this->db5->get();
		return $query->result();
	}
	
	public function modul_manifest_dokumen($token,$id_detail=null,$id_dokumen)
	{
		$this->db5->select('*');    
		$this->db5->where('id_dokumen',id_dokumen);
		if(!is_null($id_detail))$this->db5->where('id_detail',$id_detail);
		$this->db5->where('token',$token);
		$this->db5->from('manifest_dokumen');
		$query = $this->db5->get();
		return $query->result();
	}
	
	public function modul_manifest_respon($token,$nomor_aju,$id_respon=null)
	{
		$this->db5->select('*');
		if(!is_null($id_respon))$this->db5->where('id_respon',$id_respon);
		$this->db5->where('token',$token);
		$this->db5->where('nomor_aju',$nomor_aju);	
		$this->db5->from('manifest_respon');
		$query = $this->db5->get();
		return $query->result();
	}
	
	//************************ modul manifest manipulasi ****************************************************************************
	
	
	public function modul_manifest_detail_waybill($token,$no_master_blawb)
	{
		$this->db5->select('*');    		
		$this->db5->where('no_master_blawb',$no_master_blawb);
		$this->db5->where('token',$token);
		$this->db5->from('manifest_detail');
		$query = $this->db5->get();
		return $query->result();
	}
	
	public function modul_manifest_detail_zerro($id_detail,$token=null,$no_master_blawb=null)
	{
		$this->db5->select('*');    	
		$this->db5->where('fl_gate=0');
		if(!is_null($no_master_blawb))$this->db5->where('no_master_blawb',$no_master_blawb);
		if(!is_null($token))$this->db5->where('token',$token);
		$this->db5->where('id_detail>=',$id_detail);
		$this->db5->limit(100);
		$this->db5->order_by('id_detail');
		$this->db5->from('manifest_detail');
		$query = $this->db5->get();
		return $query->result();
	}
	
	
	public function search_gateIn_imp_done($token,$no_bl_awb)
	{
		$this->db4->select('*');    
		$this->db4->where('no_bl_awb',$no_bl_awb);	
		$this->db4->where('token',$token);
		$this->db4->from('get_imp_in');
		$query = $this->db4->get();
		return $query->result();
	}
	public function manifest_masterentry_for_gateIn($token,$fl_gate=null,$limit=null,$no_master_bl=null)
	{
		$this->db5->select('*');    
		if(!is_null($no_master_bl))$this->db5->where('no_master_bl',$no_master_bl);
		if(!is_null($fl_gate))$this->db5->where('fl_gate',$fl_gate);
		$this->db5->where('token',$token);
		if(!is_null($limit))$this->db5->limit($limit);
		$this->db5->from('manifest_masterentry');
		$query = $this->db5->get();
		return $query->result();
	}
	
	public function total_manifest_detail_gateIn_done($token,$no_master_blawb)
	{
		$this->db5->select('count(fl_gate) as total');    
		$this->db5->where('no_master_blawb',$no_master_blawb);	
		$this->db5->where('token',$token);
		$this->db5->where('fl_gate=1');
		$this->db5->from('manifest_detail');
		$query = $this->db5->get();
		return $query->result();
	}
	
	public function find_gateIn_imp($token,$no_master_bl_awb=null)
	{
		$this->db4->select('*');    
		if(!is_null($no_master_bl_awb))$this->db4->where('no_master_bl_awb',$no_master_bl_awb);	
		$this->db4->where('token',$token);
		$this->db4->from('get_imp_in');
		$this->db4->limit(25);
		$query = $this->db4->get();
		return $query->result();
	}
	
	public function show_breakdown_gatein_zerro($token)
	{
		$this->db7->distinct();
		$this->db7->select('a.*'); 
		$this->db7->from('imp_breakdowndetail a');
		$this->db7->join('imp_breakdownheader b','b.BreakdownNumber=a.BreakdownNumber','inner');	
		$this->db7->where('b.token',$token);
		$this->db7->where('a.void=0');
		$this->db7->where('gatein=0');
		$this->db7->where('b.void=0');
		$query = $this->db7->get();
		return $query->result();
	}
	
	public function gateOut_ekspor_by_manifest($token)
	{
		$this->db5->select('*');    
		$this->db5->where('kd_kelompok_pos=09');
		$this->db5->where('token',$token);
		$this->db5->where('fl_gate=0');
		$this->db5->from('manifest_detail');
		$query = $this->db5->get();
		return $query->result();
	}
	
	public function manifest_for_delivery($token,$no_host_blawb=null)
	{
		$this->db5->select('*');    
		$this->db5->where('no_master_blawb!=no_host_blawb');
		$this->db5->where('token',$token);
		$this->db5->where('fl_pecah=0');
		$this->db5->from('manifest_detail');
		$query = $this->db5->get();
		return $query->result();
	}
	
	public function load_manifest_mawb($token,$nomor_aju)
	{
		$this->db5->select('*');    
		$this->db5->where('nomor_aju',$nomor_aju);
		$this->db5->where('token',$token);		
		$this->db5->from('manifest_masterentry');
		$query = $this->db5->get();
		return $query->result();
	}
	
	public function load_manifest_hawb($token,$nomor_aju)
	{
		$this->db5->select('*');    
		$this->db5->where('nomor_aju',$nomor_aju);
		$this->db5->where('token',$token);		
		$this->db5->from('manifest_detail');
		$query = $this->db5->get();
		return $query->result();
	}
	
	public function ref_number($DescriptionCode)
	{
		$this->db4->select('*');    
		$this->db4->where('DescriptionCode',$DescriptionCode);		
		$this->db4->from('t_number');
		$query = $this->db4->get();
		return $query->result();
	}
	public function update_flag($namatable,$namafield,$namacode,$nilaicode)
	{
		$nilaiFlag='1';
		$data = array(
			$namafield => $nilaiFlag
		);
		$this->db5->where($namacode,$nilaicode);	
		$this->db5->update($namatable,$data);
	}
	
	public function update_flag_tps($namatable,$namafield,$namacode,$nilaicode)
	{
		$nilaiFlag='1';
		$data = array(
			$namafield => $nilaiFlag
		);
		$this->db4->where($namacode,$nilaicode);	
		$this->db4->update($namatable,$data);
	}

	
	public function update_dinamis($namatable,$namafield,$isifield,$namacode,$nilaicode)
	{
		$data = array(
			$namafield => $isifield
		);
		$this->db4->where($namacode,$nilaicode);	
		$this->db4->update($namatable,$data);
	}
	
	public function update_respon_gate($namatable,$namacode,$nilaicode,$ref_num,$respon,$flag_transfer,$date_update)
	{
		$data = array(
			'ref_num' 			=> $ref_num,
			'respon' 			=> URLDECODE($respon),
			'flag_transfer'		=> $flag_transfer,
			'date_update'		=>URLDECODE($date_update)
		);
		$this->db4->where($namacode,$nilaicode);	
		$this->db4->update($namatable,$data);
	}
	
	public function list_penegahan_awb($no_bl_awb)
	{
		$this->db4->select('*');    
		$this->db4->where('no_bl_awb',$no_bl_awb);	
		$this->db4->where('flag_release=0');	
		$this->db4->from('auto_penegahan');
		$query = $this->db4->get();
		return $query->result();
	}
	
	public function list_penegahan_mawb($no_master_bl_awb)
	{
		$this->db4->select('*');    
		$this->db4->where('no_master_bl_awb',$no_master_bl_awb);	
		$this->db4->where('flag_release=0');	
		$this->db4->from('auto_penegahan');
		$query = $this->db4->get();
		return $query->result();
	}
	
	public function list_inventory()
	{
		$this->db4->select('*');    
		$this->db4->where(' no_bl_awb NOT IN (SELECT no_bl_awb FROM get_imp_out)');	
		$this->db4->from('get_imp_in');
		$query = $this->db4->get();
		return $query->result();
	}
	
	public function list_bc20_CAR($CAR)
	{
		$this->db4->select('*');    
		$this->db4->where('CAR',$CAR);	
		$this->db4->from('getbc20_sppb');
		$query = $this->db4->get();
		return $query->result();
	}
	
	public function list_bc20_hawb($NO_BL_AWB)
	{
		$this->db4->select('*');    
		$this->db4->where('NO_BL_AWB',$NO_BL_AWB);	
		$this->db4->from('getbc20_sppb');
		$query = $this->db4->get();
		return $query->result();
	}
	
	public function list_bc23_CAR($CAR)
	{
		$this->db4->select('*');    
		$this->db4->where('CAR',$CAR);	
		$this->db4->from('getbc23_sppb');
		$query = $this->db4->get();
		return $query->result();
	}
	
	public function list_bc23_hawb($NO_BL_AWB)
	{
		$this->db4->select('*');    
		$this->db4->where('NO_BL_AWB',$NO_BL_AWB);	
		$this->db4->from('getbc23_sppb');
		$query = $this->db4->get();
		return $query->result();
	}

	public function list_sppb($tanggal,$type_clearance=null)
	{
		$this->db7->select('*'); 
		$this->db7->where('tanggal',$tanggal);
		if(!is_null($type_clearance))$this->db7->where('type_clearance',$type_clearance);	
		$this->db7->from('imp_sppb_ecommerce');
		$query = $this->db7->get();
		return $query->result();
	}
	
	public function transfer_tpsonline_outward($token)
	{
		$this->db5->select("*");    
		$this->db5->where("fl_gate=0");	
		$this->db5->where("kd_kelompok_pos='09'");			
		$this->db5->where("token",$token);
		$this->db5->limit(50);
		$this->db5->from("manifest_detail");
		$query = $this->db5->get();
		return $query->result();
	}
	
	public function cek_data_cwp_for_tpsonline($token,$MasterAWB)
	{		
		$this->db7->distinct();
		$this->db7->select('a.noid, a.ProofNumber, a.MasterAWB, a.AirlinesCode, a.Origin, a.Destination, a.FlightNumber, a.TotalPieces,');
		$this->db7->select('a.TotalNetto, a.TotalVolume, a.TotalCAW, a.DateOfFlight, a.InvoiceNumber, a.DateOfEntry, a.TimeOfEntry,');
		$this->db7->select('a.token, b.HostAWB, b.KindOfCode, b.KindOfNature,');
		$this->db7->select('(SELECT CompanyName FROM mst_customer WHERE CustomerCode = ShipperCode limit 1) AS Shipper_Company,');
		$this->db7->select('(SELECT CONCAT(Address1," ",Address2," ",City) FROM mst_customer WHERE CustomerCode=ShipperCode limit 1) AS shipper_Address,');
		$this->db7->select('(SELECT CompanyName FROM mst_customer WHERE CustomerCode=ConsigneeCode limit 1) AS Consignee_Company,');
		$this->db7->select('IF(a.PaymentCode="1",(SELECT PEB FROM eks_dokcustom WHERE InvoiceNumber=a.InvoiceNumber limit 1),(SELECT PEB FROM eks_dokcustom WHERE InvoiceNumber= a.ProofNumber limit 1)) AS PEB,');
		$this->db7->select('IF(a.PaymentCode="1",(SELECT DateOfPEB FROM eks_dokcustom WHERE InvoiceNumber=a.InvoiceNumber limit 1),(SELECT DateOfPEB FROM eks_dokcustom WHERE InvoiceNumber=a.ProofNumber limit 1)) AS DateOfPEB');
		$this->db7->from('eks_weighingheader a');
		$this->db7->join('eks_weighingdetail b','b.ProofNumber = a.ProofNumber','INNER');
		$this->db7->where('a.token',$token);
		$this->db7->where('a.MasterAWB',$MasterAWB);
		$this->db7->where('a.void=0');
		$query = $this->db7->get();
		return $query->result();
	}

	public function proc_get_data_Gate_in()
	{
		$query=$this->db4->query("get_data_Gate_in;"); 
	}
	
	
}