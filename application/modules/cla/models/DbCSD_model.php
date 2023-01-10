<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DbCSD_model extends CI_Model
{
	private $db6;
	
    function __construct()
    {
        parent::__construct();			
		$this->db6 = $this->load->database('dbmscargo', TRUE);	
    }

	 public function list_CSD_by_SMU($tablename,$AWB=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		if(!is_null($AWB))$this->db6->like('AWB',$AWB);
		$this->db6->order_by('AWB');
		$this->db6->order_by('_id','DESC');
		$this->db6->limit(30);
		if ($tablename=='dbcsd') 
		{
			$query = $this->db6->get('dbcsd');
		}
		elseif ($tablename=='dbcsd_edit')
		{
			$query = $this->db6->get('dbcsd_edit');
		}		
		return $query->result();
	}
		public function list_NoPIB($register_no=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		$this->db6->where('register_no',$register_no);
		//if(!is_null($AWB))$this->db6->like('AWB',$AWB);
		//$this->db6->order_by('AWB');
		$query = $this->db6->get('tbl_pti');
		return $query->result();
		//if ($tablename =='tbl_pti')
		//{
	//		$query = $this->db6->get('tbl_pti');
		//}
		
	}

	
	
    public function list_CSD($tablename,$CSDNumber=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		if(!is_null($CSDNumber))$this->db6->like('CSDNumber',$CSDNumber);
		$this->db6->order_by('AWB');
		if ($tablename=='dbcsd') 
		{
			$query = $this->db6->get('dbcsd');
		}
		elseif ($tablename=='dbcsd_edit')
		{
			$query = $this->db6->get('dbcsd_edit');
		}		
		return $query->result();
	}
	
	public function list_cwpnumber($tablename,$CWPNumber=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		if(!is_null(CWPNumber))$this->db6->like('CWPNumber',$CWPNumber);
		$this->db6->order_by('AWB');
		if ($tablename=='dbcsd') 
		{
			$query = $this->db6->get('dbcsd');
		}
		elseif ($tablename=='dbcsd_edit')
		{
			$query = $this->db6->get('dbcsd_edit');
		}		
		return $query->result();
	}
	
	public function list_void_CSD($tablename,$CWPNumber)
	{
		$void='0';
		$data = array(
					'_is_active' => $void
			);

		$this->db6->where('CWPNumber =',$CWPNumber);		
		if ($tablename == 'dbcsd' )
		{
			$this->db6->update('dbcsd', $data);
		}
		elseif ($tablename == 'dbcsd_edit' )
		{
			$this->db6->update('dbcsd_edit', $data);
		}
		
	}
	
	public function list_voidCSD_inv($tablename,$NoKwitansi)
	{
		$FlagReceipt='0';
		$data = array(
					'FlagReceipt' => $FlagReceipt
			);

		$this->db6->where('NoKwitansi =',$NoKwitansi);		
		if ($tablename == 'dbcsd_edit')
		{
			$this->db6->update('dbcsd_edit', $data);
		}
		elseif ($tablename == 'dbcsd')
		{
			$this->db6->update('dbcsd', $data);
		}
		
	}
	public function list_void_Delivery($tablename,$NameOfDO)
	{
		$FlagDo='0';
		$data = array(
					'FlagDo' => $FlagDo
			);

		$this->db6->where('NameOfDO=',$NameOfDO);		
		if ($tablename == 'dbcsd' )
		{
			$this->db6->update('dbcsd', $data);
		}
		elseif ($tablename == 'dbcsd_edit' )
		{
			$this->db6->update('dbcsd_edit', $data);
		}
		
	}
	
	public function list_monitoring_CSD_dummy($TypeOfFlight)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where("_is_active=0 and  CSDNumber=RCSDNumber and TypeOfFlight='".$TypeOfFlight."' and CWPNumber not in (SELECT CWPNumber FROM dbcargo_header WHERE FlagReceipt =1)");
		$this->db6->order_by('DateOfCSD');
		$this->db6->order_by('TimeOfCSD');
		$query = $this->db6->get('dbcsd');
		return $query->result();
	}
	
	
	public function list_waybill($tablename,$AWB=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		//if(!is_null($AWB))$this->db6->like('AWB',$AWB);
		$this->db6->where('AWB',$AWB);
		$this->db6->order_by('AWB');
		
		if ($tablename =='dbcsd')
		{
			$query = $this->db6->get('dbcsd');
		}
		elseif ($tablename =='dbcsd_edit')
		{
			$query = $this->db6->get('dbcsd_edit');
		}		
		return $query->result();
	}
	
	
	public function List_AWBNumber($tablename,$AWB=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		$this->db6->where('AWB=',$AWB);
		$this->db6->order_by('AWB');
		
		if ($tablename =='dbcsd')
		{
			$query = $this->db6->get('dbcsd');
		}
		elseif ($tablename =='dbcsd_edit')
		{
			$query = $this->db6->get('dbcsd_edit');
		}		
		return $query->result();
	}

	public function list_AWBINV($tablename,$AWB=NULL,$ShipperName=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		$this->db6->where('FlagReceipt=0');
		$this->db6->where('AWB',$AWB);
		$this->db6->where('ShipperName',$ShipperName);
		if ($tablename =='dbcsd')
		{
			$query = $this->db6->get('dbcsd');
		}
		elseif ($tablename =='dbcsd_edit')
		{
			$query = $this->db6->get('dbcsd_edit');
		}		
		return $query->result();
	}
	
	public function list_PetugasXray($Group_User=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		$this->db6->where('Group_User',$Group_User);
		//$this->db6->where('Group_User=J-AVS');
		//if(!is_null($EmployeeName))$this->db6->like('Group_User',$EmployeeName);
		//$this->db6->order_by('Group_User');
		$query = $this->db6->get('dbuser');
		return $query->result();
	}
	
	
	public function list_AWBINVDummy($tablename,$AWB=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		$this->db6->where('AWB',$AWB);
		if ($tablename =='dbcsd')
		{
			$query = $this->db6->get('dbcsd');
		}		
		return $query->result();
	}
	public function view_ready_delivery($WarehouseCode=NULL,$forwaderName=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		$this->db6->where('FlagDo=0');
		if(!is_null($WarehouseCode))$this->db6->like('WarehouseCode',$WarehouseCode);
		if(!is_null($forwaderName))$this->db6->like('forwaderName',$forwaderName);
		$query = $this->db6->get('view_ready_delivery');
		return $query->result();
	}
	
	public function view_ready_delivery_XAWB($AWB=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		$this->db6->where('FlagDo=0');
		$this->db6->where('AWB',$AWB);
	//if(!is_null($AWB))$this->db6->like('AWB',$AWB);	
//		if(!is_null($WarehouseCode))$this->db6->like('WarehouseCode',$WarehouseCode);
	//	if(!is_null($forwaderName))$this->db6->like('forwaderName',$forwaderName);
		$query = $this->db6->get('view_ready_delivery');
		return $query->result();
	}
	
	
	public function view_deliveryBaru($NameOfDO=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		$this->db6->where('NameOfDO=',$NameOfDO);
		//if(!is_null($NameOfDO))$this->db6->where('NameOfDO=',$NameOfDO);
		$query = $this->db6->get('view_delivery');
		return $query->result();
	}
	
	public function csd_daily_report($tablename,$typeshift,$datefrom,$timefrom,$dateuntil,$timeuntil)
	{
		$this->db6->distinct();
		$this->db6->select('*');		
		
		if ($typeshift == 'SATU')
		{
			$this->db6->where('DateOfCSD=',$datefrom);	
			$this->db6->where('TimeOfCSD>=',$timefrom);		
			$this->db6->where('TimeOfCSD<=',$timeuntil);		
		}
		elseif ($typeshift == 'DUA')
		{
			$this->db6->where("(DateOfCSD='".$datefrom."' AND TimeOfCSD>='".$timefrom."') OR (DateOfCSD='".$dateuntil."' AND TimeOfCSD<='".$timeuntil."')");
		}
		if ($tablename=='dbcsd') 
		{
			$query = $this->db6->get('dbcsd');
		}
		elseif ($tablename=='dbcsd_edit')
		{
			$query = $this->db6->get('dbcsd_edit');
		}		
		return $query->result();
	}
	
	public function ready_invoice($tablename,$ShipperName=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('FlagReceipt=0');
		$this->db6->where('_is_active=1');
		$this->db6->where('ShipperName',$ShipperName);
		//$this->db6->select('CSDNumber,AWB,CWPNumber,Origin,Destination,AirlinesCode,Quantity,ActWeight,Volume,ShipperName,DateOfCSD, TimeOfCSD,NameOfDo');
		//$this->db6->where('TypeOfFlight=',$TypeOfFlight);
		//if(!is_null($ForwaderName))$this->db6->like('ForwaderName',$ForwaderName);
		//if(!is_null($ShipperName))$this->db6->like('ShipperName',$ShipperName);
		if ($tablename =='dbcsd_edit')
		{
			$query = $this->db6->get('dbcsd_edit');
		}
		elseif ($tablename =='dbcsd')
		{
			$query = $this->db6->get('dbcsd');
		}	
		return $query->result();
	}
	
	public function ready_invoiceDummy($tablename,$ShipperName=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('FlagReceipt=0');
		$this->db6->where('_is_active=1');
		$this->db6->where('ShipperName',$ShipperName);
		//$this->db6->select('CSDNumber,AWB,CWPNumber,Origin,Destination,AirlinesCode,Quantity,ActWeight,Volume,ShipperName,DateOfCSD, TimeOfCSD,NameOfDo');
		//$this->db6->where('TypeOfFlight=',$TypeOfFlight);
		//if(!is_null($ForwaderName))$this->db6->like('ForwaderName',$ForwaderName);
		//if(!is_null($ShipperName))$this->db6->like('ShipperName',$ShipperName);
		
		/*if ($tablename =='dbcsd_edit')
		{
			$query = $this->db6->get('dbcsd_edit');
		}*/
		if ($tablename =='dbcsd')
		{
			$query = $this->db6->get('dbcsd');
		}	
		return $query->result();
	}
	
	
	public function Ambilready_invoice($tablename,$ShipperName=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('CSDNumber,AWB,CWPNumber,Origin,Destination,AirlinesCode,Quantity,ActWeight,Volume,ShipperName,DateOfCSD, TimeOfCSD,NameOfDo,TypeOfFlight');
		$this->db6->where('FlagReceipt=0');
		$this->db6->where('_is_active=1');
		$this->db6->where('ShipperName',$ShipperName);
		//$this->db6->where('TypeOfFlight=',$TypeOfFlight);
		//if(!is_null($ForwaderName))$this->db6->like('ForwaderName',$ForwaderName);
		//if(!is_null($ShipperName))$this->db6->like('ShipperName',$ShipperName);
		if ($tablename =='dbcsd_edit')
		{
			$query = $this->db6->get('dbcsd_edit');
		}
		elseif ($tablename =='dbcsd')
		{
			$query = $this->db6->get('dbcsd');
		}	
		return $query->result();
	}
	public function ready_invoiceBaru($tablename,$TypeOfFlight,$ShipperName=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('CSDNumber,AWB,CWPNumber,Origin,Destination,AirlinesCode,Quantity,ActWeight,Volume,ShipperName,DateOfCSD, TimeOfCSD,NameOfDo');
		$this->db6->where('FlagReceipt=0');
		$this->db6->where('_is_active=1');
		$this->db6->where('TypeOfFlight=',$TypeOfFlight);
		if(!is_null($ShipperName))$this->db6->like('ShipperName',$ShipperName);
		//if(!is_null($ForwaderName))$this->db6->like('ForwaderName',$ForwaderName);
		if ($tablename =='dbcsd_edit')
		{
			$query = $this->db6->get('dbcsd_edit');
		}
		elseif ($tablename =='dbcsd')
		{
			$query = $this->db6->get('dbcsd');
		}	
		return $query->result();
	}
	
	
	public function csd_daily_new($typeshift,$datefrom,$timefrom,$dateuntil,$timeuntil)
	{
		$this->db6->distinct();
		$this->db6->select('*');		
		
		if ($typeshift == 'SATU')
		{
			$this->db6->where('DateofEntry=',$datefrom);	
			$this->db6->where('TimeofEntry>=',$timefrom);		
			$this->db6->where('TimeofEntry<=',$timeuntil);		
		}
		elseif ($typeshift == 'DUA')
		{
			$this->db6->where("(DateofEntry='".$datefrom."' AND TimeofEntry>='".$timefrom."') OR (DateofEntry='".$dateuntil."' AND TimeofEntry<='".$timeuntil."')");
		}
		$query = $this->db6->limit(500);
		//$query = $this->db6->get('daily_csd_view');
		$query = $this->db6->get('view_ready_csd_dummy');
		return $query->result();
	}
	
	public function csd_daily_newBaru($typeshift,$datefrom,$dateuntil)
	{
		$this->db6->distinct();
		$this->db6->select('*');		
		
		if ($typeshift == 'SATU')
			
		{
			$this->db6->where ("(DateofEntry>='".$datefrom."') AND (DateofEntry<='".$dateuntil."')");
			//$this->db6->where ("(DateofEntry>='".$datefrom."') AND (DateofEntry<='".$dateuntil."')");
		}
		elseif ($typeshift == 'DUA')
		{
			$this->db6->where ("(DateofEntry>='".$datefrom."') AND (DateofEntry<='".$dateuntil."')");
			/*$this->db6->where("(DateofEntry='".$datefrom."' AND TimeofEntry>='".$timefrom."') OR (DateofEntry='".$dateuntil."' AND TimeofEntry<='".$timeuntil."')");
		*/
		}
		$query = $this->db6->limit(50000);
		//$query = $this->db6->get('daily_csd_view');
		$query = $this->db6->get('view_ready_csd_dummy');
		return $query->result();
	}
	
	
	public function csd_Outstanding($typeshift,$datefrom,$dateuntil)
	{
		$this->db6->distinct();
		$this->db6->select('*');		
		$this->db6->where('FlagReceipt=0');
		$this->db6->where('_is_active=1');
		if ($typeshift == 'SATU')
			
		{
			
			$this->db6->where ("(DateOfCSD>='".$datefrom."') AND (DateOfCSD<='".$dateuntil."')");
			//$this->db6->where ("(DateofEntry>='".$datefrom."') AND (DateofEntry<='".$dateuntil."')");
		}
		elseif ($typeshift == 'DUA')
		{
			$this->db6->where ("(DateOfCSD>='".$datefrom."') AND (DateOfCSD<='".$dateuntil."')");
			/*$this->db6->where("(DateofEntry='".$datefrom."' AND TimeofEntry>='".$timefrom."') OR (DateofEntry='".$dateuntil."' AND TimeofEntry<='".$timeuntil."')");
		*/
		}
		$query = $this->db6->limit(50000);
		//$query = $this->db6->get('daily_csd_view');
		$query = $this->db6->get('view_ready_csd_Terbaru');
		return $query->result();
	}
	
	
	public function update_flag_receipt($NoKwitansi,$RCWPnumber)
	{
		$FlagReceipt='2';
		$data = array(
					'FlagReceipt' => $FlagReceipt,
					'NoKwitansi'  => $NoKwitansi
			);

		$this->db6->where('CWPNumber =',$RCWPnumber);	
		$this->db6->update('dbcsd', $data);
	}
}