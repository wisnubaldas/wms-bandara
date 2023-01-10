<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Whmaster_model extends CI_Model
{
	private $db7;
	private $db4;
    function __construct()
    {
        parent::__construct();
		$this->db8 = $this->load->database('rdinterchangemessage', TRUE);
		$this->db7 = $this->load->database('rdwarehouse_bdo', TRUE);
		$this->db4 = $this->load->database('db_tpsonline', TRUE);
		$this->db3 = $this->load->database('rdlogin', TRUE);
    }
	
	public function list_airport($AirportCode=null)
	{
		$this->db7->distinct();
		$this->db7->select('*');		
		if(!is_null($AirportCode))$this->db7->where('AirportCode',$AirportCode);				
		$query = $this->db7->get('mst_airport');
		return $query->result();	
	}
	
	public function tools_file_transfer($WarehouseCode)
	{
		//$this->db7->distinct();
		$this->db7->select('*');		
		$this->db7->where('WarehouseCode',$WarehouseCode);				
		$query = $this->db7->get('tools_file_transfer');
		return $query->result();
	}
	
	public function list_shift($ShiftName=null)
	{
		$this->db7->distinct();
		$this->db7->select('*');		
		if(!is_null($ShiftName))$this->db7->where('ShiftName',$ShiftName);				
		$query = $this->db7->get('mst_shift');
		return $query->result();
	}
	
	public function mst_airlines($namafield,$isifield)
	{
		$this->db7->distinct();
		$this->db7->select('*');
		if	($namafield=="TwoLetterCode")
		{
			$this->db7->where('TwoLetterCode=',$isifield);
		}
		elseif ($namafield=="AirlinesName") 
		{
			$this->db7->where("AirlinesName like '%".URLDECODE($isifield)."%'");
		}
		$query = $this->db7->get('mst_airlines');
		return $query->result();
	}
	
	public function list_airlines($WHcode,$TwoLetterCode=null)
	{
		$this->db7->distinct();
		$this->db7->select('*');	
		if(!is_null($WHcode))$this->db7->where('WHcode=',$WHcode);
		if(!is_null($TwoLetterCode))$this->db7->where('TwoLetterCode=',$TwoLetterCode);				
		$query = $this->db7->get('mst_airlines');
		return $query->result();
	}
	
	public function list_natureofgood($nat_code=null)
	{
		$this->db7->distinct();
		$this->db7->select('*');		
		if(!is_null($nat_code))$this->db7->where('nat_code',$nat_code);				
		$query = $this->db7->get('mst_natureofgood');
		return $query->result();
	}
	
	public function list_natureofgood_name($nat_description=null)
	{
		$this->db7->distinct();
		$this->db7->select('*');		
		if(!is_null($nat_description))$this->db7->where("nat_description like '%".URLDECODE($nat_description)."%'");			
		$query = $this->db7->get('mst_natureofgood');
		return $query->result();
	}
	
	public function list_location($WarehouseCode=null,$LocationCode=null)
	{
		$this->db7->distinct();
		$this->db7->select('*');		
		if(!is_null($WarehouseCode))$this->db7->where('WarehouseCode',$WarehouseCode);
		if(!is_null($LocationCode))$this->db7->where('LocationCode',$LocationCode);				
		$query = $this->db7->get('mst_location');
		return $query->result();
	}
	
	public function list_warehouse($kd_Gudang=null)
	{
		$this->db7->distinct();
		$this->db7->select('*');		
		if(!is_null($kd_Gudang))$this->db7->where('kd_Gudang',$kd_Gudang);				
		$query = $this->db7->get('mst_gudang');
		return $query->result();
	}
	
	public function type_warehouse($WarehouseCode=null)
	{
		$this->db7->distinct();
		$this->db7->select('*');		
		if(!is_null($WarehouseCode))$this->db7->where('WarehouseCode',$WarehouseCode);				
		$query = $this->db7->get('mst_warehouse');
		return $query->result();
	}
		
	public function list_WhOperator($WHOperatorCode=null)
	{
		$this->db7->distinct();
		$this->db7->select('*');		
		if(!is_null($WHOperatorCode))$this->db7->where('WHOperatorCode',$WHOperatorCode);				
		$query = $this->db7->get('mst_operatorwrh');
		return $query->result();
	}
	
	public function list_route($WarehouseCode=null,$TwoLetterCode=null,$Route=null)
	{
		$this->db7->distinct();
		$this->db7->select('a.WarehouseCode,a.TwoLetterCode,a.FlightNumber,a.TimeDeparture,a.TimeArrival,b.Route');	
		$this->db7->from('mst_flight a');
		$this->db7->join('mst_route b', 'a.TwoLetterCode = b.TwoLetterCode');
		$this->db7->where('a.FlightNumber = b.FlightNumber');
		if(!is_null($WarehouseCode))$this->db7->where('a.WarehouseCode=',$WarehouseCode);
		if(!is_null($TwoLetterCode))$this->db7->where('a.TwoLetterCode=',$TwoLetterCode);
		if(!is_null($Route))$this->db7->where('b.Route',$Route);	
		$query = $this->db7->get();
		return $query->result();
	}
	
	public function list_flight($WarehouseCode,$TwoLetterCode,$Route,$FlightNumber=null)
	{
		$this->db7->distinct();
		$this->db7->select('WarehouseCode, TwoLetterCode, FlightNumber, TimeDeparture, TimeArrival, Route');	
		$this->db7->where('WarehouseCode=',$WarehouseCode);
		$this->db7->where('TwoLetterCode=',$TwoLetterCode);
		$this->db7->where('Route=',$Route);	
		if(!is_null($FlightNumber))$this->db7->where('FlightNumber',$FlightNumber);	
		$query = $this->db7->get('join_flight_route_view');
		return $query->result();
	}
	
	public function list_country($CountryCode=null)
	{
		$this->db7->distinct();
		$this->db7->select('*');		
		if(!is_null($CountryCode))$this->db7->where('CountryCode',$CountryCode);				
		$query = $this->db7->get('mst_country');
		return $query->result();
	}
	
	public function list_harmonized($HSCode=null)
	{
		$this->db7->distinct();
		$this->db7->select('*');		
		if(!is_null($HSCode))$this->db7->where('HSCode',$HSCode);				
		$query = $this->db7->get('mst_harmonized');
		return $query->result();
	}
	
	public function list_CountryCode($PlaceCode=null)
	{
		$this->db7->select('*');		
		if(!is_null($PlaceCode))$this->db7->where('PlaceCode',$PlaceCode);				
		$query = $this->db7->get('mst_place');
		return $query->result();
	}
	
	public function list_customer($CustomerCode=null)
	{
		$this->db7->distinct();
		$this->db7->select('*');		
		if(!is_null($CustomerCode))$this->db7->where('CustomerCode',$CustomerCode);	
		$this->db7->order_by('CompanyName','ASC');	
		$this->db7->limit(50);
		$query = $this->db7->get('mst_customer');
		return $query->result();
	}
	
	public function list_customer_by_name($CompanyName=null)
	{
		$this->db7->distinct();
		$this->db7->select('*');			
		if(!is_null($CompanyName))$this->db7->where("CompanyName like '%".URLDECODE($CompanyName)."%'");
		$this->db7->order_by('CompanyName','ASC');	
		$this->db7->limit(50);
		$query = $this->db7->get('mst_customer');
		return $query->result();
	}
	
	public function list_discrepancy($DiscrepancyCode=null)
	{
		$this->db7->distinct();
		$this->db7->select('*');		
		if(!is_null($DiscrepancyCode))$this->db7->where('DiscrepancyCode',$DiscrepancyCode);				
		$query = $this->db7->get('mst_discrepancy');
		return $query->result();
	}
	
	public function list_number($DescriptionCode)
	{
		$this->db7->distinct();
		$this->db7->select('*');		
		$this->db7->where('DescriptionCode=',$DescriptionCode);			
		$query = $this->db7->get('mst_number');
		return $query->result();
	}
	
	public function update_list_number($DescriptionCode,$QueveNumber)
	{
		$data = array(
					'QueveNumber' => $QueveNumber
			);
		$this->db7->where('DescriptionCode =',$DescriptionCode);	
		$this->db7->update('mst_number', $data);
	}
	
	//  ini bagian group tps_online
	
	public function list_tpsnumber($remarknum)
	{
		$this->db4->distinct();
		$this->db4->select('*');		
		$this->db4->where('remarknum=',$remarknum);			
		$query = $this->db4->get('t_number');
		return $query->result();
	}
	
	public function list_kd_dok_inout($keterangan=null)
	{
		$this->db4->distinct();
		$this->db4->select('*');	
		if(!is_null($keterangan))$this->db4->where('keterangan',$keterangan);				
		$query = $this->db4->get('m_kd_dok_inout');
		return $query->result();
	}
	
	public function m_beacukai($kd_KBPC=null)
	{
		$this->db4->distinct();
		$this->db4->select('*');		
		if(!is_null($kd_KBPC))$this->db4->where('kd_KBPC',$kd_KBPC);				
		$query = $this->db4->get('m_beacukai');
		return $query->result();
	}
	
	public function m_airlines($airlinescode=null)
	{
		$this->db4->distinct();
		$this->db4->select('*');		
		if(!is_null($airlinescode))$this->db4->where('airlinescode',$airlinescode);				
		$query = $this->db4->get('m_airlines');
		return $query->result();
	}
	
	public function m_airlines_bytps($kd_tps=null)
	{
		$this->db4->distinct();
		$this->db4->select('*');		
		if(!is_null($kd_tps))$this->db4->where('kd_tps',$kd_tps);				
		$query = $this->db4->get('m_airlines');
		return $query->result();
	}
	
	public function m_kemasan($kd_kemasan=null)
	{
		$this->db4->distinct();
		$this->db4->select('*');		
		if(!is_null($kd_kemasan))$this->db4->where('kd_kemasan',$kd_kemasan);				
		$query = $this->db4->get('m_kemasan');
		return $query->result();
	}
	
	public function m_tps($kd_kbpc=null)
	{
		$this->db4->distinct();
		$this->db4->select('*');
		if(!is_null($kd_kbpc))$this->db4->where('kd_kbpc',$kd_kbpc);
		$this->db4->order_by('kd_tps');
		$query = $this->db4->get('m_tps');
        return $query->result();
	}
		
	public function m_gudang($kd_tps,$kd_gudang=null)
	{
		$this->db4->distinct();
		$this->db4->select('a.*');
		$this->db4->from('m_gudang a');
		$this->db4->join('m_tps b','a.kd_gudang=b.kd_gudang','inner');
		$this->db4->where('kd_tps=',$kd_tps);
		if(!is_null($kd_gudang))$this->db4->where('a.kd_gudang',$kd_gudang);
		$this->db4->limit(10);
		$query = $this->db4->get();
        return $query->result();
	}
	
	public function mst_flight($TwoLetterCode=null)
	{
		$this->db7->distinct();
		$this->db7->select('*');
		if(!is_null($TwoLetterCode))$this->db7->where('TwoLetterCode',$TwoLetterCode);
		$this->db7->order_by('TwoLetterCode');
		$query = $this->db7->get('mst_flight');
        return $query->result();
	}
	
	
	public function master_alasan()
	{
		$this->db4->distinct();
		$this->db4->select('*');
		$query = $this->db4->get('master_alasan');
        return $query->result();
	}
	
	
	// bagian dari dblogin
	public function kodegudang($databaseCode,$warehouseCode)
	{
		$this->db3->distinct();
		$this->db3->select('*');		
		$this->db3->where('databaseCode',$databaseCode);				
		$this->db3->where('warehouseCode',$warehouseCode);
		$query = $this->db3->get('masterdatabase');
		return $query->result();
	}
	
	public function list_tokenname($databaseCode)
	{
		$this->db3->distinct();
		$this->db3->select('*');					
		$this->db3->where('databaseCode',$databaseCode);
		$query = $this->db3->get('masterdatabase');
		return $query->result();
	}
	
	public function service($noid=null)
	{
		$this->db4->distinct();
		$this->db4->select('*');					
		$this->db4->where('noid',$noid);
		$query = $this->db4->get('m_service');
		return $query->result();
	}
	
	public function subservice($id_service,$noid=null)
	{
		$this->db4->distinct();
		$this->db4->select('*');					
		$this->db4->where('id_service',$id_service);
		if(!is_null($noid))$this->db4->where('noid',$noid);		
		$query = $this->db4->get('m_subservice');
		return $query->result();
	}
	
	
	
}