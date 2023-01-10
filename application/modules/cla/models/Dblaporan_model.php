<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dblaporan_model extends CI_Model
{
	private $db6;
	
	 function __construct()
    {
        parent::__construct();			
		$this->db6 = $this->load->database('dbmscargo', TRUE);	
    }
	
	public function list_btb_dummy_valid()
	{
		$this->db6->distinct();
		$this->db6->select('*');		
		if(!is_null($DepositName))$this->db6->like('DepositName',$DepositName);
		$this->db6->where('depositvoid=0');		
		$query = $this->db6->get('calon_depositor_view');
		return $query->result();
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}