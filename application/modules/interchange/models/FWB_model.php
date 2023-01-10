<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FWB_model extends CI_Model
{
	//private $db10;
	//private $db11;
	
    function __construct()
    {
        parent::__construct();			
		$this->db10 = $this->load->database('rdwarehouse_jkt', TRUE);	
		$this->db11 = $this->load->database('rdinterchangemessage_read', TRUE);	
    }

	public function fwb_MasterAWB($MasterAWB)
	{
		$this->db10->distinct();
		$this->db10->select('*');			
		$this->db10->where('MasterAWB=',$MasterAWB);		
		$this->db10->where('void=0');
		$this->db10->where('FWB=0');
		$this->db10->where('Status=1');
		$this->db10->from('eks_masterwaybill');
		$query = $this->db10->get();
		return $query->result();
	}
	
	public function fwb_approve($AirlinesCode)
	{
		$this->db10->distinct();
		$this->db10->select('*');			
		$this->db10->where('AirlinesCode=',$AirlinesCode);		
		$this->db10->where('void=0');
		$this->db10->where('FWB=0');
		$this->db10->where('Status=1');
		$this->db10->where('DateOfFlight>=CURDATE()- interval 5 day');
		$this->db10->from('eks_masterwaybill');
		$query = $this->db10->get();
		return $query->result();
	}
	
	
	public function fwb_ready($HostName)
	{
		$this->db11->distinct();
		$this->db11->select('sending_fwb_2_awbconsignmentdetails.*');
		$this->db11->from('sending_fwb_2_awbconsignmentdetails');
		$this->db11->join('sending_fwb_1_standardmessageindentification', 'sending_fwb_2_awbconsignmentdetails.MessageKey = sending_fwb_1_standardmessageindentification.MessageKey');
		$this->db11->where('HostName=',$HostName);
		$this->db11->where('MessageSent=0');		
		$query = $this->db11->get();
		return $query->result();
	}	
	
	public function fwb_sent($AirlinesCode)
	{
		$this->db11->distinct();
		$this->db11->select('sending_fwb_2_awbconsignmentdetails.*');		
		$this->db11->from('sending_fwb_2_awbconsignmentdetails');
		$this->db11->join('sending_fwb_1_standardmessageindentification', 'sending_fwb_2_awbconsignmentdetails.MessageKey = sending_fwb_1_standardmessageindentification.MessageKey');
		$this->db11->where('AirlinesCode=',$AirlinesCode);
		$this->db11->where('MessageSent=2');		
		$query = $this->db11->get();
		return $query->result();
	}
	
	
}