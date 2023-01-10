<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbfinance_model extends CI_Model
{
	private $db6;
	
	 function __construct()
    {
        parent::__construct();			
		$this->db6 = $this->load->database('dbmscargo', TRUE);	
    }
	
	public function list_calon_depositor($DepositName)
	{
		$this->db6->distinct();
		$this->db6->select('*');		
		if(!is_null($DepositName))$this->db6->like('DepositName',$DepositName);
		$this->db6->where('depositvoid=0');		
		$query = $this->db6->get('calon_depositor_view');
		return $query->result();
	}
	
	public function list_calon_kreditor($kreditName)
	{
		$this->db6->distinct();
		$this->db6->select('*');		
		if(!is_null($kreditName))$this->db6->like('kreditName',$kreditName);
		$this->db6->where('kreditvoid=0');		
		$query = $this->db6->get('calon_kreditor_view');
		return $query->result();
	}
	
	public function procedure_laporan_CSD($GlobalBY,$Globaldatefrom,$Globaldateuntil,$GlobalAgentBy,
	                                      $GlobalShipperBy,$GlobalAirlBy,$GlobalFlightType)
	{
		if ($GlobalBY=='ALL') 
		{
			$query=$this->db6->query("CALL Laporan_CSD_ALL('".$Globaldatefrom."','".$Globaldateuntil.
		                         "','".$GlobalAgentBy."','".$GlobalShipperBy."','".$GlobalAirlBy.
								 "','".$GlobalFlightType."')");   
		}
		elseif ($GlobalBY=='DUMMY')
		{
			$query=$this->db6->query("CALL Laporan_CSD_DUMMY('".$Globaldatefrom."','".$Globaldateuntil.
		                         "','".$GlobalAgentBy."','".$GlobalShipperBy."','".$GlobalAirlBy.
								 "','".$GlobalFlightType."')");  
		}	
		elseif ($GlobalBY=='REAL')
		{
			$query=$this->db6->query("CALL Laporan_CSD_REAL('".$Globaldatefrom."','".$Globaldateuntil.
		                         "','".$GlobalAgentBy."','".$GlobalShipperBy."','".$GlobalAirlBy.
								 "','".$GlobalFlightType."')");  
		}
		elseif ($GlobalBY=='DUMMY_VS_REAL')
		{
			$query=$this->db6->query("CALL Laporan_CSD_VS('".$Globaldatefrom."','".$Globaldateuntil.
		                         "','".$GlobalAgentBy."','".$GlobalShipperBy."','".$GlobalAirlBy.
								 "','".$GlobalFlightType."')");  
		}
		return $query->result();
	}
	
	public function procedure_laporan_INVOICE($GlobalBY,$Globaldatefrom,$Globaldateuntil,$GlobalAgentBy,
	                                      $GlobalShipperBy,$GlobalAirlBy,$GlobalFlightType,$GlobalPayment)
	{
		if ($GlobalBY=='ALL') 
		{
			$query=$this->db6->query("CALL Laporan_INVOICE_ALL('".$Globaldatefrom."','".$Globaldateuntil.
		                         "','".$GlobalAgentBy."','".$GlobalShipperBy."','".$GlobalAirlBy.
								 "','".$GlobalFlightType."','".$GlobalPayment."')");   
		}
		elseif ($GlobalBY=='REAL')
		{
			$query=$this->db6->query("CALL Laporan_INVOICE_REAL('".$Globaldatefrom."','".$Globaldateuntil.
		                         "','".$GlobalAgentBy."','".$GlobalShipperBy."','".$GlobalAirlBy.
								 "','".$GlobalFlightType."','".$GlobalPayment."')");  
		}
		
		elseif ($GlobalBY=='DUMMY_VS_REAL')
		{			
		}
		return $query->result();
	
	}
	
	public function procedure_laporan_SALES($GlobalBY,$Globaldatefrom,$Globaldateuntil,$GlobalAgentBy,
	                                      $GlobalShipperBy,$GlobalAirlBy,$GlobalFlightType,$GlobalPayment)
	{
		if ($GlobalBY=='ALL') 
		{
			$query=$this->db6->query("CALL Laporan_SALES_ALL('".$Globaldatefrom."','".$Globaldateuntil.
		                         "','".$GlobalAgentBy."','".$GlobalShipperBy."','".$GlobalAirlBy.
								 "','".$GlobalFlightType."','".$GlobalPayment."')");   
		}
		elseif ($GlobalBY=='REAL')
		{
			$query=$this->db6->query("CALL Laporan_SALES_REAL('".$Globaldatefrom."','".$Globaldateuntil.
		                         "','".$GlobalAgentBy."','".$GlobalShipperBy."','".$GlobalAirlBy.
								 "','".$GlobalFlightType."','".$GlobalPayment."')");  
		}
		elseif ($GlobalBY=='DUMMY_VS_REAL')
		{			
		}
		return $query->result();
	
	}
	
	public function procedure_laporan_TONNAGE($GlobalBY,$Globaldatefrom,$Globaldateuntil,$GlobalAgentBy,
	                                      $GlobalShipperBy,$GlobalAirlBy,$GlobalFlightType)
	{
		if ($GlobalBY=='ALL') 
		{
			$query=$this->db6->query("CALL Laporan_TONNAGE_ALL('".$Globaldatefrom."','".$Globaldateuntil.
		                         "','".$GlobalAgentBy."','".$GlobalShipperBy."','".$GlobalAirlBy.
								 "','".$GlobalFlightType."')");   
		}
		elseif ($GlobalBY=='DUMMY')
		{
			$query=$this->db6->query("CALL Laporan_TONNAGE_DUMMY('".$Globaldatefrom."','".$Globaldateuntil.
		                         "','".$GlobalAgentBy."','".$GlobalShipperBy."','".$GlobalAirlBy.
								 "','".$GlobalFlightType."')");  
		}	
		elseif ($GlobalBY=='REAL')
		{
			$query=$this->db6->query("CALL Laporan_TONNAGE_REAL('".$Globaldatefrom."','".$Globaldateuntil.
		                         "','".$GlobalAgentBy."','".$GlobalShipperBy."','".$GlobalAirlBy.
								 "','".$GlobalFlightType."')");  
		}
		elseif ($GlobalBY=='DUMMY_VS_REAL')
		{
			$query=$this->db6->query("CALL Laporan_TONNAGE_VS('".$Globaldatefrom."','".$Globaldateuntil.
		                         "','".$GlobalAgentBy."','".$GlobalShipperBy."','".$GlobalAirlBy.
								 "','".$GlobalFlightType."')");  
		}
		return $query->result();
	}
	
	public function procedure_laporan_TOP_AIRLINES($typeTop,$GlobalBy,$Globaldatefrom,$Globaldateuntil,$GlobalAirlBy,$GlobalFlightType)
	{
		if ($typeTop=='DPP') 
		{
			$query=$this->db6->query("CALL Laporan_AIRLINES_BY_DPP('".$GlobalBy."','".$Globaldatefrom."','".$Globaldateuntil.
		                         "','".$GlobalAirlBy."','".$GlobalFlightType."')");  
								  
		}
		elseif ($typeTop=='TONNAGE')
		{
			$query=$this->db6->query("CALL Laporan_AIRLINES_BY_TONNAGE('".$GlobalBy."','".$Globaldatefrom."','".$Globaldateuntil.
		                         "','".$GlobalAirlBy."','".$GlobalFlightType."')");  
		}	
		return $query->result();
	}
	
	public function procedure_laporan_TOP_CUSTOMER($typeTop,$GlobalBy,$Globaldatefrom,$Globaldateuntil,$GlobalAgentBy,$GlobalFlightType)
	{
		if ($typeTop=='DPP') 
		{
			$query=$this->db6->query("CALL Laporan_CUSTOMER_BY_DPP('".$GlobalBy."','".$Globaldatefrom."','".$Globaldateuntil.
		                         "','".$GlobalAgentBy."','".$GlobalFlightType."')");  
								  
		}
		elseif ($typeTop=='TONNAGE')
		{
			$query=$this->db6->query("CALL Laporan_CUSTOMER_BY_TONNAGE('".$GlobalBy."','".$Globaldatefrom."','".$Globaldateuntil.
		                         "','".$GlobalAgentBy."','".$GlobalFlightType."')");  
		}	
		return $query->result();
	}
	
	public function procedure_laporan_PIUTANG($Codeagen=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');		
		if(!is_null($Codeagen))$this->db6->like('Codeagen',$Codeagen);
		$query = $this->db6->get('report_piutang_view');
		return $query->result();
		
		
	}
}