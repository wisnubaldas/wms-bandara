<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LocalGatrans_model extends CI_Model
{
	private $db3;
	private $db4;
	function __construct()
    {
        parent::__construct();			
		$this->db3 = $this->load->database('tpsonline_gtln', TRUE);	
		$this->db4 = $this->load->database('crm_gtln', TRUE);	
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
		$this->db3->where("kd_kantor='050100'");
		$this->db3->order_by('noid', 'DESC');
		$query = $this->db3->get($namatable,20);
        return $query->result();
	}
	
	public function list_nomor_referensi_DPS($namatable)
	{
		$this->db3->select('*');
		$this->db3->where("kd_kantor='080100'");
		$this->db3->order_by('noid', 'DESC');		
		$query = $this->db3->get($namatable,20);
        return $query->result();
	}
	
	public function list_alasan()
	{
		$this->db3->select('*');
		$query = $this->db3->get('master_alasan');
        return $query->result();
	}
	
	public function list_noplp()
	{
		$this->db3->select('*');
		$query = $this->db3->get('mohon_plp');
        return $query->result();
	}
	
	public function list_nosurat($no_surat=NULL)
	{
		$this->db3->select('*');
		if(!is_null($no_surat))$this->db3->like('no_surat',$no_surat);
		$query = $this->db3->get('mohon_plp');
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
	
	public function updatesending($id_mohon)
	{
		$flag_transfer='1';
		$data = array(
					'flag_transfer' => $flag_transfer
			);

		$this->db3->where('id_mohon =', $id_mohon);
		$this->db3->where('flag_transfer <> 2');
		$this->db3->where('flag_transfer <> 10');
		$this->db3->update('mohon_plp', $data);
	}
	
	public function view_plpfor_gatein($kd_kantor)
	{
		$this->db3->distinct();
		$this->db3->select('*');
		$this->db3->where('kd_kantor =',$kd_kantor);
		$query = $this->db3->get('view_plpfor_gatein');
		return $query->result();
	}
	
	
}