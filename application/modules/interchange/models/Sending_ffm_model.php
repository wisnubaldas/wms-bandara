<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sending_ffm_model extends CI_Model
{
	private $db10;
	private $db11;
	
    function __construct()
    {
        parent::__construct();			
		$this->db10 = $this->load->database('rdwarehouse_jkt', TRUE);	
		$this->db11 = $this->load->database('rdinterchangemessage', TRUE);	
    }
	
	public function list_ffm_1_messageidentifier($HostName,$MessageKey)
	{
		
		$this->db11->select('*');	
		$this->db11->where('MessageKey',$MessageKey);	
		$this->db11->where('HostName=',$HostName);
		$query = $this->db11->get('sending_ffm_1_messageidentifier');
		return $query->result();
	}
	
	public function list_ffm_2_manifestheader($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');					
		$this->db11->where('MessageKey=',$MessageKey);
		$query = $this->db11->get('sending_ffm_2_manifestheader');
		return $query->result();
	}
	
	public function list_ffm_3_destinationheader($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('MessageKey=',$MessageKey);		
		$query = $this->db11->get('sending_ffm_3_destinationheader');
		return $query->result();
	}

	public function list_ffm_4_bulkloadedcargo($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');			
		$this->db11->where('MessageKey=',$MessageKey);		
		$query = $this->db11->get('sending_ffm_4_bulkloadedcargo');
		return $query->result();
	}

	public function list_ffm_5_dimensionsinformation($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');			
		$this->db11->where('MessageKey=',$MessageKey);
		$query = $this->db11->get('sending_ffm_5_dimensionsinformation');
		return $query->result();
	}

	public function list_ffm_6_consignmentonwardmovementinformation($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');					
		$this->db11->where('MessageKey=',$MessageKey);
		$query = $this->db11->get('sending_ffm_6_consignmentonwardmovementinformation');
		return $query->result();
	}

	public function list_ffm_7_uldmovementinformation($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		$this->db11->where('MessageKey=',$MessageKey);		
		$query = $this->db11->get('sending_ffm_7_uldmovementinformation');
		return $query->result();
	}
	
	public function list_ffm_8_otherserviceinformation($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		$this->db11->where('MessageKey=',$MessageKey);		
		$query = $this->db11->get('sending_ffm_8_otherserviceinformation');
		return $query->result();
	}

	public function list_ffm_8b_customsorigin($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('MessageKey=',$MessageKey);		
		$query = $this->db11->get('sending_ffm_8b_customsorigin');
		return $query->result();
	}

	public function list_ffm_8c_othercustomsinformation($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		$this->db11->where('MessageKey=',$MessageKey);		
		$query = $this->db11->get('sending_ffm_8c_othercustomsinformation');
		return $query->result();
	}

	public function list_ffm_9_specialcustomsinformation($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		$this->db11->where('MessageKey=',$MessageKey);		
		$query = $this->db11->get('sending_ffm_9_specialcustomsinformation');
		return $query->result();
	}

	public function list_ffm_a_uldloadedcargo($MessageKey,$ULDType,$ULDSerialNumber,$AirlinePrefix,$AWBSerialNumber)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		$this->db11->where('MessageKey',$MessageKey);		
		$this->db11->where('ULDType',$ULDType);
		$this->db11->where('ULDSerialNumber',$ULDSerialNumber);
		$this->db11->where('AirlinePrefix',$AirlinePrefix);
		$this->db11->where('AWBSerialNumber',$AWBSerialNumber);
		$query = $this->db11->get('sending_ffm_a_uldloadedcargo');
		return $query->result();
	}
	
	public function list_ffm_a_uldloadedcargo2($MessageKey,$Point_Of_Unloading)
	{
		$this->db11->distinct();
		$this->db11->select('*');	
		$this->db11->where('MessageKey',$MessageKey);		
		$this->db11->where('Point_Of_Unloading',$Point_Of_Unloading);
		$this->db11->order_by('ULDType', 'asc');
		$query = $this->db11->get('sending_ffm_a_uldloadedcargo');
		return $query->result();
	}

	public function list_ffm_b_manifesttrailer($MessageKey)
	{
		$this->db11->distinct();
		$this->db11->select('*');					
		$this->db11->where('MessageKey=',$MessageKey);
		$query = $this->db11->get('sending_ffm_b_manifesttrailer');
		return $query->result();
	}
}