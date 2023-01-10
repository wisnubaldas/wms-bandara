<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbnumber_model extends CI_Model
{
	private $db6;
	
    function __construct()
    {
        parent::__construct();			
		$this->db6 = $this->load->database('dbmscargo', TRUE);	
    }

    public function dbnumber($description)
	{
		$this->db6->distinct();
		$this->db6->select('*');		
		$this->db6->where('description',$description);		
		$query = $this->db6->get('dbnumber');
		return $query->result();
	}
	
}