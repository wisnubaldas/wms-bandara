<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbmaster_model extends CI_Model
{
	private $db6;
	
    function __construct()
    {
        parent::__construct();			
		$this->db6 = $this->load->database('dbmscargo', TRUE);	
    }
	
	 public function list_warehouse($WarehouseCode=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if(!is_null($WarehouseCode))$this->db6->like('WarehouseCode',$WarehouseCode);
		$this->db6->where('_is_active=1');
		$this->db6->order_by('WarehouseName');
		$query = $this->db6->get('dbwarehouse');
		return $query->result();
	}
	
	 public function list_Goods($GoodNames=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		//if(!is_null($WarehouseCode))$this->db6->like('WarehouseCode',$WarehouseCode);
		$this->db6->where('_is_active=1');
		$this->db6->where('GoodNames',$GoodNames);
		//$this->db6->order_by('WarehouseName');
		$query = $this->db6->get('dbgoods');
		return $query->result();
	}
	
    public function list_airlines($airlinescode)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		//$this->db6->where("(TypeOfFlight= 'A' OR TypeOfFlight='".$TypeOfFlight."')");		
		if(!is_null($airlinescode))$this->db6->like('airlinescode',$airlinescode);
		$this->db6->where('_is_active=1');
		$this->db6->order_by('airlinesname');
		$query = $this->db6->get('dbairlines');
		return $query->result();
	}
	
	public function list_country($IdCountry=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if(!is_null($IdCountry))$this->db6->like('IdCountry',$IdCountry);
		$this->db6->where('_is_active=1');
		$this->db6->order_by('CountryName');
		$query = $this->db6->get('dbcountry');
		return $query->result();
	}
	
	public function list_good($KGCode=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if(!is_null($KGCode))$this->db6->like('KGCode',$KGCode);
		$this->db6->where('_is_active=1');
		$this->db6->order_by('GoodNames');
		$query = $this->db6->get('dbgoods');
		return $query->result();
	}
	
	public function list_place($IdCity=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if(!is_null($IdCity))$this->db6->like('IdCity',$IdCity);
		$this->db6->where('_is_active=1');
		$this->db6->order_by('CityName');
		$query = $this->db6->get('dbplace');
		return $query->result();
	}
	
	public function list_route($route=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if(!is_null($route))$this->db6->like('route',$route);
		$this->db6->where('_is_active=1');
		$query = $this->db6->get('dbroute');
		return $query->result();
	}
	
	public function list_route_baru($idnumber)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if(!is_null($idnumber))$this->db6->like('idnumber',$idnumber);
		//if(!is_null($flightno))$this->db6->like('flightno',$flightno);
		$this->db6->where('_is_active=1');
		$query = $this->db6->get('dbflightno');
		return $query->result();
	}
	
	public function list_TimeRote($flightno)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		//if(!is_null($idnumber))$this->db6->like('idnumber',$idnumber);
		if(!is_null($flightno))$this->db6->like('flightno',$flightno);
		$query = $this->db6->get('dbflightno');
		return $query->result();
	}
	
	public function list_TimeRote_dest($dest)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		//if(!is_null($idnumber))$this->db6->like('idnumber',$idnumber);
		if(!is_null($dest))$this->db6->like('dest',$dest);
		$query = $this->db6->get('dbflightno');
		return $query->result();
	}
	
	public function list_shift($shiftname=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if(!is_null($shiftname))$this->db6->like('shiftname',$shiftname);
		$this->db6->where('_is_active=1');
		$this->db6->where('active=1');
		$query = $this->db6->get('dbshift');
		return $query->result();
	}
	
	public function list_truck($NoTruck=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if(!is_null($NoTruck))$this->db6->like('NoTruck',$NoTruck);
		$this->db6->where('_is_active=1');
		$query = $this->db6->get('dbtruck');
		return $query->result();
	}
	
	public function list_warehousecode($WarehouseCode=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if(!is_null($NoTruck))$this->db6->like('WarehouseCode',$WarehouseCode);
		$this->db6->where('_is_active=1');
		$query = $this->db6->get('dbWarehouse');
		return $query->result();
	}
	
	public function list_flight($AirlinesCode,$flightNo=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if(!is_null($flightNo))$this->db6->like('flightNo',$flightNo);
		$this->db6->where('AirlinesCode=',$AirlinesCode);
		$this->db6->where('_is_active=1');
		$query = $this->db6->get('dbflight');
		return $query->result();
	}
	
	public function flight($flighttype,$AirlinesCode,$route=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('flighttype',$flighttype);
		$this->db6->where('AirlinesCode',$AirlinesCode);
		if(!is_null($route))$this->db6->like('route',$route);
		$this->db6->where('_is_active=1');
		$query = $this->db6->get('dbflight');
		return $query->result();
	}
	
	
	public function route_flight($flighttype,$AirlinesCode=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('flighttype',$flighttype);
		if(!is_null($AirlinesCode))$this->db6->like('AirlinesCode',$AirlinesCode);
		$this->db6->where('_is_active=1');
		$query = $this->db6->get('dbroute');
		return $query->result();
	}
	
	
	public function list_point($PointMultiplication=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if(!is_null($PointMultiplication))$this->db6->like('PointMultiplication',$PointMultiplication);
		$this->db6->where('_is_active=1');
		$query = $this->db6->get('dbpoint');
		return $query->result();
	}
	
	public function pointnow($ValidNow)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('ValidFrom <=',$ValidNow);
		$this->db6->where('ValidUntil >=',$ValidNow);
		$this->db6->where('_is_active=1');
		$query = $this->db6->get('dbpoint');
		return $query->result();
	}
	
	public function pointkredit($ClientRegistration,$ValidNow)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('ValidFrom <=',$ValidNow);
		$this->db6->where('ValidUntil >=',$ValidNow);
		$this->db6->where('ClientRegistration=',$ClientRegistration);
		$this->db6->where("CodeOfPoint='K'");
		$this->db6->where('_is_active=1');
		$query = $this->db6->get('dbpoint');
		return $query->result();
	}
	
	public function NamaKolom($TABLE_SCHEMA,$TABLE_NAME)
	{
		$this->db6->distinct();
		$this->db6->select('COLUMN_NAME');
		$this->db6->where('TABLE_SCHEMA =',$TABLE_SCHEMA);
		$this->db6->where('TABLE_NAME >=',$TABLE_NAME);
		$query = $this->db6->get('INFORMATION_SCHEMA.COLUMNS');
		return $query->result();
	}
	
	
}