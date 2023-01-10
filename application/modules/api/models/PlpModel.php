<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlpModel extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	
	public function get_xml($table,$awb)
	{
		if($table == 'mohonplp')
		{
			$this->db->select('*');
	        $this->db->from('mohon_plp');
	        $this->db->where('no_surat',$awb);
	        $this->db->limit(1);
	        $query = $this->db->get()->result();
        return $query;
		}
		if($table == 'batalplp')
		{
			$this->db->select('*');
	        $this->db->from('batal_plp');
	        $this->db->where('no_surat',$awb);
	        $this->db->limit(1);
	        $query = $this->db->get()->result();
        return $query;
		}
		if($table == 'bongkarmuat')
		{
			$this->db->select('*');
	        $this->db->from('bongkarmuat');
	        $this->db->where('ref_number',$awb);
	        $this->db->limit(1);
	        $query = $this->db->get()->result();
        return $query;
		}
		
	}
	
	public function getData($table)
	{
		
		if($table == 'mohonplp')
		{
			$this->db->select('*');
	        $this->db->from('mohon_plp');
	        $this->db->where('flag_transfer','0');
	        $this->db->limit(1);
	        $query = $this->db->get()->result();
        return $query;
		}
		if($table == 'batalplp')
		{
			$this->db->select('*');
	        $this->db->from('batal_plp');
	        $this->db->where('flag_transfer','0');
	        $this->db->limit(1);
	        $query = $this->db->get()->result();
        return $query;
		}
		if($table == 'bongkarmuat')
		{
			$this->db->select('*');
	        $this->db->from('bongkarmuat');
	        $this->db->where('flag_transfer','0');
	        $this->db->limit(1);
	        $query = $this->db->get()->result();
        return $query;
		}
		if($table == 'serviceYOR')
		{
			$this->db->select('*');
	        $this->db->from('serviceYOR');
	        $this->db->where('flag_transfer','0');
	        $this->db->limit(1);
	        $query = $this->db->get()->result();
        return $query;
		}
	}

	public function updateData($hawb,$table)
	{	
		$this->db->set('flag_transfer',1);
		$this->db->set('ref_num',$hawb['ref_num']);
		$this->db->where('no_bl_awb',$hawb['no_bl_awb']);
		$this->db->update($table);
		log_message('error', $hawb['ref_num'].' update sending');
	}

}

/* End of file BcTpsModel.php */
/* Location: ./application/models/BcTpsModel.php */