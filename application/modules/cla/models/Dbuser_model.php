<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbuser_model extends CI_Model
{
	private $db6;
	
    function __construct()
    {
        parent::__construct();			
		$this->db6 = $this->load->database('dbmscargo', TRUE);	
    }

	
	public function userid($UserID,$Password)
	{
		$this->db6->distinct();
		$this->db6->select('*');		
		$this->db6->where('UserID',$UserID);
		$this->db6->where('Password',$Password);
		$query = $this->db6->get('dbuser');
		return $query->result();
		
	}
	
	public function list_PXrayBaru($UserID=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		$this->db6->where('UserID',$UserID);
		//$this->db6->where('Group_User=J-AVS');
		//if(!is_null($EmployeeName))$this->db6->like('Group_User',$EmployeeName);
		//$this->db6->order_by('Group_User');
		$query = $this->db6->get('dbuser');
		return $query->result();
	}
	
    public function list_permission($EmployeeCode,$DateDuty)
	{
		$this->db6->distinct();
		$this->db6->select('*');		
		$this->db6->where('EmployeeCode',$EmployeeCode);
		$this->db6->where('DateFrom<=',$DateDuty);
		$this->db6->where('DateUntil>=',$DateDuty);		
		$query = $this->db6->get('view_permission');
		return $query->result();
	}
	
	public function list_menu()
	{
		$this->db6->distinct();
		$this->db6->select('*');		
		$query = $this->db6->get('dbmenu');
		return $query->result();
	}
	public function EmployeeBaru($EmployeeCode=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('EmployeeCode',$EmployeeCode);		
		//if(!is_null($EmployeeCode))$this->db6->like('EmployeeCode',$EmployeeCode);		
		$query = $this->db6->get('dbuser');
		return $query->result();
	}
	
	public function Employee($EmployeeCode=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');	
		if(!is_null($EmployeeCode))$this->db6->like('EmployeeCode',$EmployeeCode);		
		$query = $this->db6->get('dbuser');
		return $query->result();
	}
	
	
}