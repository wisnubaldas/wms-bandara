<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fsu_model extends CI_Model
{
	private $db10;
	private $db11;
	
    function __construct()
    {
        parent::__construct();			
		$this->db10 = $this->load->database('rdwarehouse_jkt', TRUE);	
		$this->db11 = $this->load->database('rdinterchangemessage_read', TRUE);	
    }
	
	public function list_fsu_awb($HostName,$AirlinePrefix,$AWBNumber)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('HostName=',$HostName);
		$this->db11->where('AirlinePrefix=',$AirlinePrefix);
		$this->db11->where('AWBNumber=',$AWBNumber);
		$query = $this->db11->get('sending_fsu_awb');
		return $query->result();
	}
	
	public function list_fsu_awd($HostName,$AirlinePrefix,$AWBNumber)
	{
		$this->db11->distinct();
		$this->db11->select('*');				
		$this->db11->where('HostName=',$HostName);
		$this->db11->where('AirlinePrefix=',$AirlinePrefix);
		$this->db11->where('AWBNumber=',$AWBNumber);		
		$query = $this->db11->get('sending_fsu_awd');
		return $query->result();
	}
	
	public function list_fsu_dis($HostName,$AirlinePrefix,$AWBNumber)
	{
		$this->db11->distinct();
		$this->db11->select('*');			
		$this->db11->where('HostName=',$HostName);
		$this->db11->where('AirlinePrefix=',$AirlinePrefix);
		$this->db11->where('AWBNumber=',$AWBNumber);
		$query = $this->db11->get('sending_fsu_dis');
		return $query->result();
	}

	public function list_fsu_dlv($HostName,$AirlinePrefix,$AWBNumber)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('HostName=',$HostName);
		$this->db11->where('AirlinePrefix=',$AirlinePrefix);
		$this->db11->where('AWBNumber=',$AWBNumber);
		$query = $this->db11->get('sending_fsu_dlv');
		return $query->result();
	}

	public function list_fsu_foh($HostName,$AirlinePrefix,$AWBNumber)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('HostName=',$HostName);
		$this->db11->where('AirlinePrefix=',$AirlinePrefix);
		$this->db11->where('AWBNumber=',$AWBNumber);		
		$query = $this->db11->get('sending_fsu_foh');
		return $query->result();
	}

	public function list_fsu_nfd($HostName,$AirlinePrefix,$AWBNumber)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('HostName=',$HostName);
		$this->db11->where('AirlinePrefix=',$AirlinePrefix);
		$this->db11->where('AWBNumber=',$AWBNumber);			
		$query = $this->db11->get('sending_fsu_nfd');
		return $query->result();
	}

	public function list_fsu_rcf($HostName,$AirlinePrefix,$AWBNumber)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('HostName=',$HostName);
		$this->db11->where('AirlinePrefix=',$AirlinePrefix);
		$this->db11->where('AWBNumber=',$AWBNumber);			
		$query = $this->db11->get('sending_fsu_rcf');
		return $query->result();
	}

	public function list_fsu_rcs($HostName,$AirlinePrefix,$AWBNumber)
	{
		$this->db11->distinct();
		$this->db11->select('*');			
		$this->db11->where('HostName=',$HostName);
		$this->db11->where('AirlinePrefix=',$AirlinePrefix);
		$this->db11->where('AWBNumber=',$AWBNumber);			
		$query = $this->db11->get('sending_fsu_rcs');
		return $query->result();
	}

	public function list_fsu_rct($HostName,$AirlinePrefix,$AWBNumber)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('HostName=',$HostName);
		$this->db11->where('AirlinePrefix=',$AirlinePrefix);
		$this->db11->where('AWBNumber=',$AWBNumber);			
		$query = $this->db11->get('sending_fsu_rct');
		return $query->result();
	}

	public function list_fsu_tfd($HostName,$AirlinePrefix,$AWBNumber)
	{
		$this->db11->distinct();
		$this->db11->select('*');		
		$this->db11->where('HostName=',$HostName);
		$this->db11->where('AirlinePrefix=',$AirlinePrefix);
		$this->db11->where('AWBNumber=',$AWBNumber);			
		$query = $this->db11->get('sending_fsu_tfd');
		return $query->result();
	}
}