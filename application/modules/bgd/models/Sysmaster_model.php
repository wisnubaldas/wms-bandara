<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sysmaster_model extends CI_Model 
{
	private $db2;
    function __construct()
    {
        parent::__construct();		
		$this->db2 = $this->load->database('sys_cms_master', TRUE);
		
    }
	
	public function list_kemasan()
	{
		$this->db2->where('void=0');
		$this->db2->where('active=1');
        $query = $this->db2->get('m_kemasan');
        return $query->result();
	}
	
	public function list_tps($kd_kbpc)
	{
		
		$this->db2->where('kd_kbpc = ',$kd_kbpc);
		//if(!is_null($kd_tps))$this->db2->like('kd_tps',$kd_tps);
		$this->db2->group_by("kd_tps");		
        $query = $this->db2->get('m_tps');
        return $query->result();
	}
	
    public function list_kode_kantor()
	{
		$this->db2->where('active=1');
        $query = $this->db2->get('m_beacukai');
        return $query->result();
	}
	
	public function list_nama_angkut()
	{
		$this->db2->where('void=0');
        $query = $this->db2->get('m_airlines');
        return $query->result();
	}
	
	public function list_nomor_penerbangan($airlinescode)
	{
		$this->db2->where('airlinescode=',$airlinescode);
        $query = $this->db2->get('m_flight');
        return $query->result();
	}
	
	public function list_kode_gudang($kd_tps,$kd_gudang=NULL)
	{	
		if(!is_null($kd_gudang)){			
			$query="SELECT m_gudang.kd_gudang,m_gudang.nama_gudang FROM m_gudang INNER JOIN m_tps ".
					"ON m_gudang.kd_gudang = m_tps.kd_gudang ".
					"WHERE m_gudang.kd_gudang='".$kd_gudang."' AND kd_tps='".$kd_tps."'";
			 
			
		}else {
			$query="SELECT m_gudang.kd_gudang,m_gudang.nama_gudang FROM m_gudang INNER JOIN m_tps ".
					"ON m_gudang.kd_gudang = m_tps.kd_gudang ".
					"WHERE kd_tps='".$kd_tps."'";
		}
		$query=$this->db2->query($query);	
		return $query->result();
	}
	

	
}