<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbdeposikredit_model extends CI_Model
{
	private $db6;
	
    function __construct()
    {
        parent::__construct();			
		$this->db6 = $this->load->database('dbmscargo', TRUE);	
    }

	public function list_depositor($ClientRegistration=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if(!is_null($ClientRegistration))$this->db6->where('ClientRegistration',$ClientRegistration);
		$this->db6->where('_is_active=1');	
		$this->db6->order_by('ClientRegistration');
		$query = $this->db6->get('dbdeposit');
		return $query->result();
	}
	
	
    public function list_kreditor($ClientRegistration=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if(!is_null($ClientRegistration))$this->db6->where('ClientRegistration',$ClientRegistration);
		$this->db6->where('_is_active=1');		
		$this->db6->order_by('ClientRegistration');
		$query = $this->db6->get('dbkredit');
		return $query->result();
	}
	
	public function transaksi_depositor($ClientRegistration,$datefrom,$dateuntil,$TypeOfFlight=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		$this->db6->where('ClientRegistration',$ClientRegistration);
		$this->db6->where('DateOfTransaction>=',$datefrom);
		$this->db6->where('DateOfTransaction<=',$dateuntil);
		if(!is_null($TypeOfFlight))$this->db6->like('TypeOfFlight',$TypeOfFlight);
		$this->db6->order_by('DateOfTransaction');
		$this->db6->order_by('TimeOfTransaction');
		$query = $this->db6->get('dbdeposittransaction');
		return $query->result();
	}
	
	public function transaksi_kreditor($ClientRegistration,$datefrom,$dateuntil,$TypeOfFlight=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		$this->db6->where("Jurnal='K'");
		$this->db6->where('ClientRegistration',$ClientRegistration);
		$this->db6->where('DateOfTransaction>=',$datefrom);
		$this->db6->where('DateOfTransaction<=',$dateuntil);
		$this->db6->where("Newreceipt='-'");
		if(!is_null($TypeOfFlight))$this->db6->like('TypeOfFlight',$TypeOfFlight);
		
		$this->db6->order_by('DateOfTransaction');
		$this->db6->order_by('TimeOfTransaction');
		$query = $this->db6->get('dbkredittransaction');
		return $query->result();
	}
	
	public function transaksi_pembayaran($Receipt)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		$this->db6->where("Jurnal='D'");
		$this->db6->where('Receipt',$Receipt);
		$query = $this->db6->get('dbkredittransaction');
		return $query->result();
	}
	
	
	public function void_deposikredit($tablename,$idnumber)
	{
		$void='1';
		$data = array(
					'_is_active' => $void
			);

		$this->db6->where('idnumber =',$idnumber);	
		if ($tablename=='dbkredittransaction') 
		{
			$this->db6->update('dbkredittransaction', $data);
		}
		elseif ($tablename=='dbdeposittransaction')
		{
			$this->db6->update('dbdeposittransaction', $data);
		}	
	}
	
	
}