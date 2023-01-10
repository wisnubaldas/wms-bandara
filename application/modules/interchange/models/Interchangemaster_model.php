<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Interchangemaster_model extends CI_Model
{
	private $db17;	
    function __construct()
    {
        parent::__construct();			
		$this->db17 = $this->load->database('rdinterchangemessage_read', TRUE);	
    }
	
	public function sita_mastercustomer($CustomerCode)
	{
		$this->db17->distinct();
		$this->db17->select('*');		
		$this->db17->like('CustomerCode',$CustomerCode);				
		$query = $this->db17->get('mastercustomer');
		return $query->result();
	}
	
	public function list_mst_airport($AirportCode=null)
	{
		$this->db17->distinct();
		$this->db17->select('*');		
		if(!is_null($AirportCode))$this->db17->like('AirportCode',$AirportCode);				
		$query = $this->db17->get('mst_airport');
		return $query->result();
	}
	public function activation_airlines($AirlineCode)
	{
		$this->db17->distinct();
		$this->db17->select('*');		
		$this->db17->where('AirlineCode=',$AirlineCode);		
		$this->db17->where('Activation=1');
		$query = $this->db17->get('mst_authenticate');
		return $query->result();
	}
	
	public function list_mst_authenticate($DefaultHost=null)
	{
		$this->db17->distinct();
		$this->db17->select('*');		
		if(!is_null($DefaultHost))$this->db17->like('DefaultHost',$DefaultHost);		
		$this->db17->where('Activation=1');
		$query = $this->db17->get('mst_authenticate');
		return $query->result();
	
	}
	
	public function list_mst_authenticate_addrbydest($DefaultHost=null)
	{
		$this->db17->distinct();
		$this->db17->select('*');		
		if(!is_null($DefaultHost))$this->db7->like('DefaultHost',$DefaultHost);		
		$query = $this->db17->get('mst_authenticate_addrbydest');
		return $query->result();
	
	}
	
	public function list_mst_authenticate_messagesendname($DefaultHost=null,$MessageCode=null)
	{
		$this->db17->distinct();
		$this->db17->select('*');		
		if(!is_null($MessageCode))$this->db17->like('MessageCode',$MessageCode);
		if(!is_null($DefaultHost))$this->db17->like('DefaultHost',$DefaultHost);		
		$query = $this->db17->get('mst_authenticate_messagesendname');
		return $query->result();
	
	}
	
	public function list_mst_authenticate_emailsending($DefaultHost=null)
	{
		$this->db17->distinct();
		$this->db17->select('*');		
		if(!is_null($DefaultHost))$this->db17->like('DefaultHost',$DefaultHost);		
		$query = $this->db17->get('mst_authenticate_emailsending');
		return $query->result();
	
	}
	
	public function list_mastermessagename($inc_out=null)
	{
		$this->db17->distinct();
		$this->db17->select('*');		
		if(!is_null($inc_out))$this->db17->like('inc_out',$inc_out);		
		$query = $this->db17->get('mastermessagename');
		return $query->result();
	
	}
	
	
}