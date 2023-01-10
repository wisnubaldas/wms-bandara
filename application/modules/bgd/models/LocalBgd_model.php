<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LocalBgd_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();			
		$this->load->database();	
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
		$query = $this->db->get($namatable,10);
        return $query->result();
	}
	
	public function list_alasan()
	{
		$this->db->select('*');
		$query = $this->db->get('master_alasan');
        return $query->result();
	}
	
	public function list_noplp()
	{
		$this->db->select('*');
		$query = $this->db->get('mohon_plp');
        return $query->result();
	}
	
	public function list_nosurat($no_surat=NULL)
	{
		$this->db->select('*');
		if(!is_null($no_surat))$this->db->like('no_surat',$no_surat);
		$query = $this->db->get('mohon_plp');
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
	
	public function updatesending($id_mohon)
	{
		$flag_transfer='1';
		$data = array(
					'flag_transfer' => $flag_transfer
			);

		$this->db->where('id_mohon =', $id_mohon);
		$this->db->where('flag_transfer <> 2');
		$this->db->where('flag_transfer <> 10');
		$this->db->update('mohon_plp', $data);
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
	
}