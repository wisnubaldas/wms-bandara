<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DbDelivery_model extends CI_Model
{
	private $db6;
	
    function __construct()
    {
        parent::__construct();			
		$this->db6 = $this->load->database('dbmscargo', TRUE);	
    }
	
	 public function list_Delivery($NameOfDo=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if(!is_null($NameOfDo))$this->db6->like('NameOfDo',$NameOfDo);
		$this->db6->order_by('DateOfDO');
		$query = $this->db6->get('dbdelivery');
		return $query->result();
	}
	
	public  function find_Delivery($NameOfDO=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		if(!is_null($NameOfDO))$this->db6->like('NameOfDO',$NameOfDO);
		$this->db6->order_by('DateOfDO');
		$query = $this->db6->get('dbdelivery');
		return $query->result();
	}
	
	public  function find_DeliveryAWB($MasterAWB=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		//$this->db6->where('MasterAWB=',$MasterAWB);
		if(!is_null($MasterAWB))$this->db6->like('MasterAWB',$MasterAWB);
		$this->db6->order_by('DateOfDO');
		$query = $this->db6->get('dbdelivery');
		return $query->result();
	}
	
	
	//public function delivery_daily_report($typeshift,$datefrom,$timefrom,$dateuntil,$timeuntil)
	public function delivery_daily_report($typeshift,$datefrom,$dateuntil)
	{
		$this->db6->distinct();
		$this->db6->select('*');		
		
		if ($typeshift == 'SATU')
		{
			$this->db6->where ("(DateOfDO>='".$datefrom."') AND (DateOfDO<='".$dateuntil."')");
			//$this->db6->where("(DateOfDO>='".$datefrom."') AND (DateOfDO<='".$dateuntil."')");
			//$this->db6->where('DateOfDO=',$datefrom);	
			//$this->db6->where('TimeOfDO>=',$timefrom);		
			//$this->db6->where('TimeOfDO<=',$timeuntil);		
		}
		elseif ($typeshift == 'DUA')
		{
			$this->db6->where("(DateOfDO>='".$datefrom."') AND (DateOfDO<='".$dateuntil."')");
			//$this->db6->where("(DateOfDO='".$datefrom."' AND TimeOfDO>='".$timefrom."') OR (DateOfDO='".$dateuntil."' AND TimeOfDO<='".$timeuntil."')");
		}
		$query = $this->db6->get('delivery_daily_report_view');
		return $query->result();
		
	}
	
	public function void_Delivery($NameOfDo)
	{
		
		$void='0';
		$data = array(
					'_is_active' => $void
			);

		$this->db6->where('NameOfDo =',$NameOfDo);		
			$this->db6->update('dbdelivery', $data);		
	}
	
}