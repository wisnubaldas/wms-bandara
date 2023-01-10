<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbcargo_model extends CI_Model
{
	private $db6;
	
    function __construct()
    {
        parent::__construct();			
		$this->db6 = $this->load->database('dbmscargo', TRUE);	
    }

    public function list_dbcargo_detail($tablename,$CWPnumber=NULL,$idnumber=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');		
		if(!is_null($CWPnumber))$this->db6->like('CWPnumber',$CWPnumber);
		if(!is_null($idnumber))$this->db6->like('idnumber',$idnumber);		
		if ($tablename=='dbcargo_detail') 
		{
			$query = $this->db6->get('dbcargo_detail');
		}
		elseif ($tablename=='dbcargo_detail_edit')
		{
			$query = $this->db6->get('dbcargo_detail_edit');
		}	
		
		return $query->result();
	}
		public function list_dbcargo_PerishabelReal($Cariawb)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('MasterAWB=',$Cariawb);
		$this->db6->where('_is_active=1');
		$this->db6->where('CWPnumber=CWPnumber');
		$query = $this->db6->get('dbcargo_header_edit');
		return $query->result();
	}

	public function list_dbcargo_dummy_findbaru($findawb)
	{
		
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('MasterAWB=',$findawb);
		$this->db6->where('_is_active=1');
		$this->db6->where('CWPnumber=CWPnumber');
		$query = $this->db6->get('dbcargo_header');
		return $query->result();
	}
	
	
	public function list_dbcargo_Real($Cariawb)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('MasterAWB=',$Cariawb);
		$this->db6->where('_is_active=1');
		$this->db6->where('CWPnumber=CWPnumber');
		$query = $this->db6->get('dbcargo_header_edit');
		return $query->result();
	}

	
	public function calon_CSD_DUMMY($MasterAWB=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');	
		$this->db6->where("typeOfCargo='DUMMY'");
		$this->db6->where("_is_active=1");
		if(!is_null($MasterAWB))$this->db6->like('MasterAWB',$MasterAWB);
		$this->db6->where("(CSDNumber IS NULL OR CSDNumber ='')");
		$query = $this->db6->get('weighing_daily_report_view');
		return $query->result();
	}
	
	public function calon_CSD_REAL($MasterAWB=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');		
		$this->db6->where("typeOfCargo='GENERAL'");
		$this->db6->where("_is_active=1");
		if(!is_null($MasterAWB))$this->db6->like('MasterAWB',$MasterAWB);
		$this->db6->where("(CSDNumber IS NULL OR CSDNumber ='')");
		$query = $this->db6->get('weighing_daily_report_view');
		return $query->result();
	}
	
	public function cwp_langsung_invoice($TypeOfFlight,$agenCode=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');			
		$this->db6->where('TypeOfFlight=',$TypeOfFlight);
		if(!is_null($agenCode))$this->db6->like('agenCode',$agenCode);
		$this->db6->where("TypeOfCargo='PERISABLE REAL'");
		$this->db6->where('FlagReceipt=0');
		$query = $this->db6->get('view_dbcargo_edit');
		return $query->result();
	}
	
	public function cwp_langsung_invoiceBaru($TypeOfFlight,$ShipperName=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');			
		$this->db6->where('TypeOfFlight=',$TypeOfFlight);
		if(!is_null($ShipperName))$this->db6->like('ShipperName',$ShipperName);
		$this->db6->where("TypeOfCargo='PERISABLE REAL'");
		$this->db6->where('FlagReceipt=0');
		$query = $this->db6->get('view_dbcargo_edit');
		return $query->result();
	}
	
	
	public function monitoring_cwp_ke_invoice()
	{
		$this->db6->distinct();
		$this->db6->select('*');			
		$this->db6->where("TypeOfCargo='PERISABLE REAL'");
		$this->db6->where('FlagReceipt=0');
		$query = $this->db6->get('view_dbcargo_edit');
		
		return $query->result();
	}
	
	
	public function list_dbcargo_header($tablename,$CWPnumber=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if(!is_null($CWPnumber))$this->db6->like('CWPnumber',$CWPnumber);
		if ($tablename=='dbcargo_header') 
		{
			$query = $this->db6->get('dbcargo_header');
		}
		elseif ($tablename=='dbcargo_header_edit')
		{
			$query = $this->db6->get('dbcargo_header_edit');
		}	
		return $query->result();
	}
	
	public function list_dbcargo_header_rcwp($RCWPnumber)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('RCWPnumber=',$RCWPnumber);
		$query = $this->db6->get('dbcargo_header');
		return $query->result();
	}
	
	public function list_view_dbcargo($tablename,$CSDNumber=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if(!is_null($CSDNumber))$this->db6->like('CSDNumber',$CSDNumber);
		if ($tablename=='view_dbcargo') 
		{
			$query = $this->db6->get('view_dbcargo');
		}
		elseif ($tablename=='view_dbcargo_Edit')
		{
			$query = $this->db6->get('view_dbcargo_Edit');
		}	
		return $query->result();
	}
	
	public function view_dbcargo_byAgenshipper($tablename,$agenCode,$ShipperCode=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('FlagReceipt = 0');	
		$this->db6->where('_is_active=1');
		$this->db6->where('agenCode =',$agenCode);	
		if(!is_null($ShipperCode))$this->db6->like('ShipperCode',$ShipperCode);
		if ($tablename=='view_dbcargo') 
		{
			$query = $this->db6->get('view_dbcargo');
		}
		elseif ($tablename=='view_dbcargo_edit')
		{
			$query = $this->db6->get('view_dbcargo_edit');
		}	;
		return $query->result();
	}
	
	public function view_dbcargo_byAgenshipper_baru($tablename,$masterawb)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('FlagReceipt = 0');	
		$this->db6->where('_is_active=1');
		if(!is_null($masterawb))$this->db6->like('masterawb',$masterawb);
		if ($tablename=='view_dbcargo') 
		{
			$query = $this->db6->get('view_dbcargo');
		}
		elseif ($tablename=='view_dbcargo_edit')
		{
			$query = $this->db6->get('view_dbcargo_edit');
		}	;
		return $query->result();
	}
	
	public function list_void_dbcargo($tablename,$CWPnumber)
	{
		$void='0';
		$data = array(
					'_is_active' => $void
			);

		$this->db6->where('CWPnumber =',$CWPnumber);	
		if ($tablename == 'dbcargo_header_edit' )
		{
			$this->db6->update('dbcargo_header_edit', $data);
		}
		elseif ($tablename == 'dbcargo_header' )
		{
			$this->db6->update('dbcargo_header', $data);
		}

		elseif ($tablename == 'dbcsd_edit' )
		{
			$this->db6->update('dbcsd_edit', $data);
		}

	}
	
	
	public function list_void_dbcargodelivery($tablename,$NameOfDo)
	{
		$FlagDo='0';
		$data = array(
					'FlagDo' => $FlagDo
			);

		$this->db6->where('NameOfDo =',$NameOfDo);	
		if ($tablename == 'dbcargo_detail_edit' )
		{
			$this->db6->update('dbcargo_detail_edit', $data);
		}
		elseif ($tablename == 'dbcargo_header' )
		{
			$this->db6->update('dbcargo_header', $data);
		}

	}
	
	public function view_ready_csd_dummy($TypeOfFlight,$MasterAWB)
	{
		$this->db6->select('*');			
		$this->db6->where('TypeOfFlight =',$TypeOfFlight);
		$this->db6->where('MasterAWB =',$MasterAWB);
		$query = $this->db6->get('view_ready_csd_dummy');
		return $query->result();
	}
	public function search_waybill($tablename,$TypeOfFlight,$MasterAWB=NULL,$TypeOfCargo=NULL)
	{
		
		if(!is_null($TypeOfCargo))$this->db6->like('TypeOfCargo',$TypeOfCargo);
		if(!is_null($MasterAWB))$this->db6->like('MasterAWB',$MasterAWB);
		$this->db6->where('TypeOfFlight=',$TypeOfFlight);
		if ($tablename == 'dbcargo_header' )
		{
			$query = $this->db6->get('dbcargo_header');
		}
		elseif ($tablename == 'dbcargo_header_edit' )
		{
			$query = $this->db6->get('dbcargo_header_edit');
		}
		return $query->result();
	}
	
	public function list_dbcargo_dummy($TypeOfFlight)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('TypeOfFlight=',$TypeOfFlight);
		$this->db6->where('_is_active=1');
		$this->db6->where('CWPnumber=RCWPnumber');
		$query = $this->db6->get('dbcargo_header');
		return $query->result();
	}
	public function list_dbcargo_dummy_find($findawb)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('MasterAWB=',$findawb);
		$this->db6->where('_is_active=1');
		$this->db6->where('CWPnumber=RCWPnumber');
		$query = $this->db6->get('dbcargo_header');
		return $query->result();
	}
	
	
	public function view_monitor_csd_dummy()
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('CSDNumber IS NOT NULL AND LENGTH(CSDNumber)>5');
		$query = $this->db6->get('view_monitor_csd_dummy');
		return $query->result();
	}
	
	public function view_monitor_csd_real()
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('CSDNumber IS NOT NULL AND LENGTH(CSDNumber)>5');
		$query = $this->db6->get('view_monitor_csd_real');
		return $query->result();
	}
	
	public function view_monitor_cargo_real($TypeOfFlight)
	{
		$this->db6->distinct();
		$this->db6->select('*');		
		$this->db6->where('_is_active=1');
		$this->db6->where('(CSDnumber is NULL OR CSDnumber="") AND TypeOfFlight="'.$TypeOfFlight.'"');
		$query = $this->db6->get('view_dbcargo_edit');
		return $query->result();
		
	}
	
	public function view_daily_btb($typeshift,$datefrom,$timefrom,$dateuntil,$timeuntil)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if ($typeshift == 'SATU')
		{
			$this->db6->where('DateOfEntry=',$datefrom);	
			$this->db6->where('TimeOfEntry>=',$timefrom);		
			$this->db6->where('TimeOfEntry<=',$timeuntil);	
		}	
		elseif ($typeshift == 'DUA')
		{
			$this->db6->where("(DateOfEntry='".$datefrom."' AND TimeOfEntry >='".$timefrom."') OR (DateOfEntry='".$dateuntil."' AND TimeOfEntry<='".$timeuntil."')");
		}
		$query = $this->db6->get('weighing_daily_report_view');
		return $query->result();
	}
	
	
	
	public function update_flag_receipt($RCWPnumber)
	{
		$FlagReceipt='1';
		$data = array(
					'FlagReceipt' => $FlagReceipt
			);
		$this->db6->where('CWPnumber =',$RCWPnumber);	
		$this->db6->update('dbcargo_header', $data);
	}
	
}