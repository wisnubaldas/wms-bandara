<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FHL_model extends CI_Model
{
	private $db10;
	private $db11;
	
    function __construct()
    {
        parent::__construct();			
		$this->db10 = $this->load->database('rdwarehouse_jkt', TRUE);	
		$this->db11 = $this->load->database('rdinterchangemessage_read', TRUE);	
    }
	
	public function fhl_approve($AirlinesCode)
	{
		$this->db10->distinct();
		$this->db10->select('A.ProofNumber,A.AirlinesCode,A.Origin,A.Destination,A.FlightNumber,A.ShipperCode,A.AgenCode,A.ConsigneeCode,
							DateOfFlight,B.ProofNumber,B.MasterAWB,B.HostAWB,B.Pieces,B.NettoWeight,B.StorageRoom,B.DG,B.KindOfNature');			
		$this->db10->from('eks_weighingheader A');
		$this->db10->join('eks_weighingdetail B', 'A.ProofNumber = B.ProofNumber');
		$this->db10->where('A.void=0');
		$this->db10->where("InvoiceNumber <>''");		
		$this->db10->where('FHL=0');
		$this->db10->where('AirlinesCode=',$AirlinesCode);
		$this->db10->where('Directmaster=0');
		$this->db10->where('DateOfFlight>=CURDATE()- interval 5 day');
		$query = $this->db10->get();
		return $query->result();
	}
	
	
	public function fhl_ready($DefaultHost)
	{
		$this->db11->distinct();
		$this->db11->select('sending_fhl_2_masterawbconsignmentdetail.*');
		$this->db11->from('sending_fhl_2_masterawbconsignmentdetail');
		$this->db11->join('sending_fhl_1_standardmessageindentification', 'sending_fhl_2_masterawbconsignmentdetail.MessageKey = sending_fhl_1_standardmessageindentification.MessageKey');
		$this->db11->where('HostName=',$DefaultHost);
		$this->db11->where('MessageSent=0');		
		$query = $this->db11->get();
		return $query->result();
	}	
	
	public function fhl_sent($DefaultHost)
	{
		$this->db11->distinct();
		$this->db11->select('sending_fhl_2_masterawbconsignmentdetail.*');		
		$this->db11->from('sending_fhl_2_masterawbconsignmentdetail');
		$this->db11->join('sending_fhl_1_standardmessageindentification', 'sending_fhl_2_masterawbconsignmentdetail.MessageKey = sending_fhl_1_standardmessageindentification.MessageKey');
		$this->db11->where('HostName=',$DefaultHost);
		$this->db11->where('MessageSent=2');		
		$query = $this->db11->get();
		return $query->result();
	}
	
	
}