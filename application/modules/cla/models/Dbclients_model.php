<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbclients_model extends CI_Model
{
	private $db6;
	
    function __construct()
    {
        parent::__construct();			
		$this->db6 = $this->load->database('dbmscargo', TRUE);	
    }

	public function list_agent($CompanyName=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		$this->db6->where('IsAgent=1');
		if(!is_null($CompanyName))$this->db6->like('CompanyName',$CompanyName);
		$this->db6->order_by('CompanyName');
		$query = $this->db6->get('dbclients');
		return $query->result();
	}
	
	public function list_subagent($AgenCode,$subAgen=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		$this->db6->where('AgenCode=',$AgenCode);
		if(!is_null($subAgen))$this->db6->like('subAgen',$subAgen);
		$this->db6->order_by('subAgen');
		$query = $this->db6->get('dbsubagen');
		return $query->result();
	}
	
	public function detail_subagent($idnumber=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		$this->db6->where('_id=',$idnumber);
		$this->db6->order_by('subAgen');
		$query = $this->db6->get('dbsubagen');
		return $query->result();
	}
	
	
    public function get_ambil_data_clients($CompanyName=NULL)
	{
		$string = str_replace("%20"," ",$CompanyName);
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		$this->db6->where('CompanyName',$string);
		 //if(!is_null($CompanyName))$this->db6->like('CompanyName',$string);
		//$this->db6->where('CompanyName',$CompanyName);		
		$query = $this->db6->get('dbclients');
		return $query->result();
	}

	 public function get_ambil_data_clienshipper($CompanyName=NULL)
	{
		$string = str_replace("%20"," ",$CompanyName);
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		$this->db6->where('CompanyName',$string);
		 //if(!is_null($CompanyName))$this->db6->like('CompanyName',$string);
		//$this->db6->where('CompanyName',$CompanyName);		
		$query = $this->db6->get('dbclients');
		return $query->result();
	}

	
public function list_clients_baru($CompanyName=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		if(!is_null($CompanyName))$this->db6->like('CompanyName',$CompanyName);
		$this->db6->order_by('CompanyName');
		$query = $this->db6->get('dbclients');
		return $query->result();
	}
	
	public function list_clients($CompanyName=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		if(!is_null($CompanyName))$this->db6->like('CompanyName',$CompanyName);
		$this->db6->order_by('CompanyName');
		$query = $this->db6->get('dbclients');
		return $query->result();
	}
	
	public function codeclients($ClientRegistration=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		$this->db6->where('ClientRegistration',$ClientRegistration);
		$query = $this->db6->get('dbclients');
		return $query->result();
	}
	
	public function void_dbcargo($ClientRegistration)
	{
		$void='0';
		$data = array(
					'_is_active=' => $void
			);

		$this->db6->where('ClientRegistration =',$ClientRegistration);			
		$this->db6->update('dbclients', $data);
		
	}
	
}