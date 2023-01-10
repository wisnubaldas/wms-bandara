<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbreceipt_model extends CI_Model
{
	private $db6;
	
    function __construct()
    {
        parent::__construct();			
		$this->db6 = $this->load->database('dbmscargo', TRUE);	
    }

    public function list_dbreceipt_detail($receipt=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');		
		if(!is_null($receipt))$this->db6->like('receipt',$receipt);
		$query = $this->db6->get('dbreceipt_detail');
		return $query->result();
	}
	
	public function list_dbreceipt_detail_Edit($receipt=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->Where('_is_active=1');
		$this->db6->where('receipt=',$receipt);
		//if(!is_null($receipt))$this->db6->like('receipt',$receipt);
		$query = $this->db6->get('dbreceipt_detail_edit');
		return $query->result();
	}
	
	public function list_dbreceipt_header($receipt=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if(!is_null($receipt))$this->db6->like('receipt',$receipt);
		$query = $this->db6->get('dbreceipt_header');
		return $query->result();
	}
	
	public function list_dbreceipt_header_Edit($receipt=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		if(!is_null($receipt))$this->db6->like('receipt',$receipt);
		$query = $this->db6->get('dbreceipt_header_edit');
		return $query->result();
	}
	
	public function search_invoice($tablename,$hostAWB=NULL)
	{
		$this->db6->distinct();
		$this->db6->select('*');
		$this->db6->where('_is_active=1');
		if(!is_null($hostAWB))$this->db6->like('hostAWB',$hostAWB);
		if ($tablename=='dbreceipt_header_edit') 
		{
			$query = $this->db6->get('search_invoice_view');
		}
		elseif ($tablename=='dbreceipt_header')
		{
			$query = $this->db6->get('search_invoice_view');
		}	
		return $query->result();
	}
	
	public function view_daily_invoicing($typeshift,$datefrom,$timefrom,$dateuntil,$timeuntil)
	{
		$this->db6->distinct();
		$this->db6->select('*');		
		
		if ($typeshift == 'SATU')
		{
			$this->db6->where('DateOfReceipt=',$datefrom);	
			$this->db6->where('TimeOfReceipt>=',$timefrom);		
			$this->db6->where('TimeOfReceipt<=',$timeuntil);		
		}
		elseif ($typeshift == 'DUA')
		{
			$this->db6->where("(DateOfReceipt='".$datefrom."' AND TimeOfReceipt >='".$timefrom."') OR (DateOfReceipt='".$dateuntil."' AND TimeOfReceipt<='".$timeuntil."')");
		}
		$query = $this->db6->get('invoicing_daily_report_view');
		return $query->result();
		
	}
	
	public function void_dbreceipt($tablename,$receipt)
	{
		$void='0';
		$data = array(
					'_is_active' => $void
			);

		$this->db6->where('receipt =',$receipt);	
		if ($tablename == 'dbreceipt_header_edit')
		{
			$this->db6->update('dbreceipt_header_edit', $data);
		}
		elseif ($tablename == 'dbreceipt_header' )
		{
			$this->db6->update('dbreceipt_header', $data);
		}
	}
	public function list_void_dbreceipt($tablename,$receipt)
	{
		$void='0';
		$data = array(
					'_is_active' => $void
			);

		$this->db6->where('receipt =',$receipt);	
		if ($tablename == 'dbreceipt_header_edit')
		{
			$this->db6->update('dbreceipt_header_edit', $data);
		}
		elseif ($tablename == 'dbreceipt_detail_edit' )
		{
			$this->db6->update('dbreceipt_detail_edit', $data);
	}
	}
	
}