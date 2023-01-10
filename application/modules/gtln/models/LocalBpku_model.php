<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LocalBpku_model extends CI_Model
{
	private $db3;
	private $db4;
	function __construct()
    {
        parent::__construct();			
		$this->db3 = $this->load->database('tpsonline_gtln', TRUE);	
		$this->db4 = $this->load->database('crm_gtln', TRUE);	
    }
	
	public function Outstanding_dps($id_kms,$baris=null)
	{
		$this->db3->select('*');
		$this->db3->where('flag_transfer=2');
		$this->db3->where('flag_gateout=0');
		$this->db3->where('id_kms>=',$id_kms);
		if(!is_null($baris))
		{
			$this->db3->limit($baris);
		}
			else
		{
			$this->db3->limit(50);		
		}
		$query = $this->db3->get('get_imp_in_dps');
        return $query->result();
	}
	
	public function Outstanding_gtln_dps($id_kms,$baris=null)
	{
		$kode_kantor='080100';
		$this->db3->select('*');		
		$this->db3->where('kode_kantor=',$kode_kantor);
		$this->db3->where('id_kms>=',$id_kms);
		$this->db3->where('flag_transfer=2');
		$this->db3->where('flag_gateout=0');		
		if(!is_null($baris))
		{
			$this->db3->limit($baris);
		}
			else
		{
			$this->db3->limit(50);		
		}	
		$query = $this->db3->get('get_imp_in');
        return $query->result();
	}
	
	public function data_gateIN_dps($namafield,$isifield)
	{
		$this->db3->select('*');
		$this->db3->where($namafield,$isifield);
		$query = $this->db3->get('get_imp_in_dps');
        return $query->result();
	}
	
	public function data_gateIN_GTLN_dps($namafield,$isifield)
	{
		$this->db3->select('*');
		$this->db3->where($namafield,$isifield);
		$query = $this->db3->get('get_imp_in');
        return $query->result();
	}
	
	public function data_gateOUT_dps($namafield,$isifield)
	{
		$this->db3->select('*');
		$this->db3->where($namafield,$isifield);
		$query = $this->db3->get('get_imp_out_dps');
        return $query->result();
	}
	
	public function data_gateOUT_GTLN_dps($namafield,$isifield)
	{
		$this->db3->select('*');
		$this->db3->where($namafield,$isifield);
		$query = $this->db3->get('get_imp_out');
        return $query->result();
	}
	
	// --------------------------------------------------------------
	
	public function data_import_gateIN_dps($tgl_first,$tgl_last,$id_kms,$baris=null)
	{
		$kode_kantor='080100';
		$kd_tps='BPKU';
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
		$query = $this->db3->get('get_imp_in_dps');
        return $query->result();
	}
	
	public function data_import_gateOUT_dps($tgl_first,$tgl_last,$id_kms,$baris=null)
	{
		$kode_kantor='080100';
		$kd_tps='BPKU';
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
		$query = $this->db3->get('get_imp_out_dps');
        return $query->result();
	}
	
	public function data_import_gateIN($tgl_first,$tgl_last,$id_kms,$baris=null)
	{
		$kode_kantor='080100';
		$kd_tps='BPKU';
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
	public function data_ekspor_gateIN($tgl_first,$tgl_last,$id_kms,$baris=null)
	{
		$kode_kantor='080100';
		$kd_tps='BPKU';
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
		$query = $this->db3->get('get_exp_in');
		if(!is_null($baris))$this->db3->limit($baris);
        return $query->result();
	}
	
	public function data_ekspor_gateOut($tgl_first,$tgl_last,$id_kms,$baris=null)
	{
		$kode_kantor='080100';
		$kd_tps='BPKU';
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
		$query = $this->db3->get('get_exp_out');
        return $query->result();
	}
	
	
	public function data_import_gateOut($tgl_first,$tgl_last,$id_kms,$baris=null,$flag_transfer=null)
	{
		$kode_kantor='080100';
		$kd_tps='BPKU';
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
	
	public function gatein_master_bl_awb($mawb)
	{
		$this->db3->select('*');
		
		$this->db3->where('void=0');
		$this->db3->where('mawb',$mawb);
		$query = $this->db3->get('gatein_master_bl_awb');
		return $query->result();
	}
	
	public function update_respon_gate($namatable,$namacode,$nilaicode,$ref_num,$respon,$flag_transfer,$date_update)
	{
		$data = array(
			'ref_num' 			=> $ref_num,
			'respon' 			=> URLDECODE($respon),
			'flag_transfer'		=> $flag_transfer,
			'date_update'		=>URLDECODE($date_update)
		);
		$this->db3->where($namacode,$nilaicode);	
		$this->db3->update($namatable,$data);
	}
	
}