<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Plp_model extends CI_Model
{
	
	private $db3;
	private $db4;
    function __construct()
    {
        parent::__construct();			
		$this->db3 = $this->load->database('tpsonline_mau_read', TRUE);	
		$this->db4 = $this->load->database('tpsonline_mau', TRUE);	
    }
	
	public function show_mohon_plp($id_mohon=null)
	{
		$this->db3->select('*');    
		if(!is_null($id_mohon))$this->db3->where('id_mohon>=',$id_mohon);	
		$this->db3->from('mohon_plp');
		$this->db3->order_by('id_mohon');	
		$this->db3->limit(50);
		$query = $this->db3->get();
		return $query->result();
	}
	
	public function show_batal_plp($id_batal=null)
	{
		$this->db3->select('*');    
		if(!is_null($id_batal))$this->db3->where('id_batal>=',$id_batal);	
		$this->db3->from('batal_plp');
		$this->db3->order_by('id_batal');	
		$this->db3->limit(50);
		$query = $this->db3->get();
		return $query->result();
	}
	
	public function show_respon_mohon_plp($typeshow,$noid)
	{
		$this->db3->select('*');   
		if ( $typeshow == 'SATUAN' )
		{
			$this->db3->where('noid=',$noid);
		} else
		{
			$this->db3->where('noid>=',$noid);
		}
		$this->db3->from('mohon_resp_plp_tuj');
		$this->db3->order_by('noid');	
		$this->db3->limit(50);
		$query = $this->db3->get();
		return $query->result();
	}
	
	public function show_respon_batal_plp($typeshow,$noid)
	{
		$this->db3->select('*'); 
		if ($typeshow == 'SATUAN')	
		{
			$this->db3->where('noid=',$noid);
		}
		else
		{
			$this->db3->where('noid>=',$noid);
		}
		$this->db3->from('batal_resp_plp_tuj');
		$this->db3->order_by('noid');	
		$this->db3->limit(50);
		$query = $this->db3->get();
		return $query->result();
	}
	
	public function show_ref_mohon()
	{
		$this->db3->select('id_mohon,ref_number,gudang_tujuan'); 
		$this->db3->where("ref_number not in (select ref_number from mohon_resp_plp_tuj)");
		$this->db3->from('mohon_plp');
		$this->db3->order_by('id_mohon');	
		$this->db3->limit(50);
		$query = $this->db3->get();
		return $query->result();
	}
	
	public function show_ref_batal()
	{
		$this->db3->select('id_batal,ref_number'); 
		$this->db3->where("ref_number not in (select ref_number from batal_resp_plp_tuj)");
		$this->db3->from('batal_plp');
		$this->db3->order_by('id_batal');	
		$this->db3->limit(50);
		$query = $this->db3->get();
		return $query->result();
	}
	
	public function respon_mohon_plp_gatein()
	{
		$this->db3->select('*');   
		$this->db3->where('status_gatein=0');
		$this->db3->from('mohon_resp_plp_tuj');
		$this->db3->limit(1);
		$query = $this->db3->get();
		return $query->result();
	}
	
	
	
}