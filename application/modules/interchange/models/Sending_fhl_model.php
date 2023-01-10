<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sending_fhl_model extends CI_Model
{
	private $db10;
	private $db11;
	
    function __construct()
    {
        parent::__construct();			
		$this->db10 = $this->load->database('rdwarehouse_jkt', TRUE);	
		$this->db11 = $this->load->database('rdinterchangemessage_read', TRUE);	
    }
	
	public function list_fhl_1_standardmessageindentification($MessageKey=null)
	{
		$this->db11->distinct();
		$this->db11->select('*');			
		if(!is_null($MessageKey))$this->db11->where('MessageKey',$MessageKey);
		$query = $this->db11->get('sending_fhl_1_standardmessageindentification');
		return $query->result();
	}
	
	public function list_fhl_2_masterawbconsignmentdetail($MessageKey=null)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		if(!is_null($MessageKey))$this->db11->where('MessageKey',$MessageKey);		
		$query = $this->db11->get('sending_fhl_2_masterawbconsignmentdetail');
		return $query->result();
	}
	
	public function list_fhl_3_housewaybillsummarydetails($MessageKey=null)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		if(!is_null($MessageKey))$this->db11->where('MessageKey',$MessageKey);
		$query = $this->db11->get('sending_fhl_3_housewaybillsummarydetails');
		return $query->result();
	}

	public function list_fhl_4_freetextdescriptionofgoods($MessageKey=null)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		if(!is_null($MessageKey))$this->db11->where('MessageKey',$MessageKey);	
		$query = $this->db11->get('sending_fhl_4_freetextdescriptionofgoods');
		return $query->result();
	}

	public function list_fhl_5_harmonisedtariffscheduleinformation($MessageKey=null)
	{
		$this->db11->distinct();
		$this->db11->select('*');			
		if(!is_null($MessageKey))$this->db11->where('MessageKey',$MessageKey);	
		$query = $this->db11->get('sending_fhl_5_harmonisedtariffscheduleinformation');
		return $query->result();
	}

	public function list_fhl_5b_othercustomsecurityandregulatory($MessageKey=null)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		if(!is_null($MessageKey))$this->db11->where('MessageKey',$MessageKey);
		$query = $this->db11->get('sending_fhl_5b_othercustomsecurityandregulatory');
		return $query->result();
	}

	public function list_fhl_6_shippernameandaddress($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		if(!is_null($MessageKey))$this->db11->where('MessageKey',$MessageKey);
		$query = $this->db11->get('sending_fhl_6_shippernameandaddress');
		return $query->result();
	}

	public function list_fhl_7_consigneenameandaddress($MessageKey=null)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		if(!is_null($MessageKey))$this->db11->where('MessageKey',$MessageKey);	
		$query = $this->db11->get('sending_fhl_7_consigneenameandaddress');
		return $query->result();
	}

	public function list_fhl_8_chargedeclarations($MessageKey=null)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		if(!is_null($MessageKey))$this->db11->where('MessageKey',$MessageKey);
		$query = $this->db11->get('sending_fhl_8_chargedeclarations');
		return $query->result();
	}

}