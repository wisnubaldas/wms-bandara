<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TpsModel extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	
	public function get_xml($table,$awb)
	{
		
		if($table == 'gateIn')
		{
			$this->db->select('*');
	        $this->db->from('get_imp_in');
	        $this->db->where('no_bl_awb',$awb);
	        $this->db->limit(1);
	        $query = $this->db->get()->result();
        return $query;
		}
		if($table == 'gateOut')
		{
			$this->db->select('*');
	        $this->db->from('get_imp_out');
	        $this->db->where('no_bl_awb',$awb);
	        $this->db->limit(1);
	        $query = $this->db->get()->result();
        return $query;
		}
	}

	public function getData($table)
	{
		
		if($table == 'gateIn')
		{
			$this->db->select('*');
	        $this->db->from('get_imp_in');
	        $this->db->where('flag_transfer','0');
	        $this->db->limit(10);
	        $query = $this->db->get()->result();
        return $query;
		}
		if($table == 'gateOut')
		{
			$this->db->select('*');
	        $this->db->from('get_imp_out');
	        $this->db->where('flag_transfer','0');
	        $this->db->limit(100);
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