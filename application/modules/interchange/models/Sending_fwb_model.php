<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sending_fwb_model extends CI_Model
{
	private $db10;
	private $db11;
	
    function __construct()
    {
        parent::__construct();			
		$this->db10 = $this->load->database('rdwarehouse_jkt', TRUE);	
		$this->db11 = $this->load->database('rdinterchangemessage_read', TRUE);	
    }
	
	public function list_fwb_1_standardmessageindentification($HostName,$MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');				
		$this->db11->where('MessageKey=',$MessageKey);
		$this->db11->where('HostName=',$HostName);
		$query = $this->db11->get('sending_fwb_1_standardmessageindentification');
		return $query->result();
	}
	
	public function list_fwb_2_awbconsignmentdetails($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');					
		$this->db11->where('MessageKey=',$MessageKey);		
		$query = $this->db11->get('sending_fwb_2_awbconsignmentdetails');
		return $query->result();
	}
	
	public function list_fwb_3_flightbookings($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');				
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_3_flightbookings');
		return $query->result();
	}

	public function list_fwb_4_routing($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');			
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_4_routing');
		return $query->result();
	}

	public function list_fwb_5_shipper($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');			
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_5_shipper');
		return $query->result();
	}

	public function list_fwb_6_consignee($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');			
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_6_consignee');
		return $query->result();
	}

	public function list_fwb_7_agent($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_7_agent');
		return $query->result();
	}

	public function list_fwb_8_specialservicerequest($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_8_specialservicerequest');
		return $query->result();
	}

	public function list_fwb_9_alsonotify($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_9_alsonotify');
		return $query->result();
	}

	public function list_fwb_a_accountinginformation($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_a_accountinginformation');
		return $query->result();
	}

	public function list_fwb_b_chargedeclarations($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_b_chargedeclarations');
		return $query->result();
	}

	public function list_fwb_c_ratedescription($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_c_ratedescription');
		return $query->result();
	}

	public function list_fwb_d_othercharges($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_d_othercharges');
		return $query->result();
	}

	public function list_fwb_e_prepaidchargesummary($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_e_prepaidchargesummary');
		return $query->result();
	}

	public function list_fwb_f_collectchargesummary($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');			
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_f_collectchargesummary');
		return $query->result();
	}

	public function list_fwb_g_shippercertification($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_g_shippercertification');
		return $query->result();
	}

	public function list_fwb_h_carrierexecution($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_h_carrierexecution');
		return $query->result();
	}

	public function list_fwb_i_otherserviceinformation($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_i_otherserviceinformation');
		return $query->result();
	}

	public function list_fwb_j_chargerindestinationcurrency($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_j_chargerindestinationcurrency');
		return $query->result();
	}

	public function list_fwb_k_senderreference($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_k_senderreference');
		return $query->result();
	}

	public function list_fwb_l_customsorigin($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_l_customsorigin');
		return $query->result();
	}

	public function list_fwb_m_commisioninformation($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_m_commisioninformation');
		return $query->result();
	}

	public function list_fwb_n_salesincentiveinformation($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_n_salesincentiveinformation');
		return $query->result();
	}
	
	public function list_fwb_o_agentreferencedata($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_o_agentreferencedata');
		return $query->result();
	}

	public function list_fwb_p_specialhandlingdetails($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_p_specialhandlingdetails');
		return $query->result();
	}

	public function list_fwb_q_nominatedhandlingparty($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_q_nominatedhandlingparty');
		return $query->result();
	}

	public function list_fwb_r_shipmentreferenceinformation($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_r_shipmentreferenceinformation');
		return $query->result();
	}

	public function list_fwb_s_otherparticipantinformation($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_s_otherparticipantinformation');
		return $query->result();
	}

	public function list_fwb_t_othercustomsinformation($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		$this->db11->where('MessageKey=',$MessageKey);				
		$query = $this->db11->get('sending_fwb_t_othercustomsinformation');
		return $query->result();
	}
}