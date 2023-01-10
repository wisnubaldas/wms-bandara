<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbvoid_Model extends CI_Model
{
	private $db6;
	
	 function __construct()
    {
        parent::__construct();			
		$this->db6 = $this->load->database('dbmscargo', TRUE);	
    }
	
	
	public function void_invoice($receipt,$CWPnumber,$CSDNumber=NULL)
	{
		//void invoice
		$void='0';
		$data = array(
					'_is_active' => $void
			);

		$this->db6->where('receipt=',$receipt);	
		$this->db6->update('dbreceipt_header_edit', $data);
		
		$this->db6->where('receipt=',$receipt);	
		$this->db6->update('dbreceipt_detail_edit', $data);
		
		//balikin  data dbcargo_header_edit
		$FlagReceipt='0';
		$data = array(
					'FlagReceipt' => $FlagReceipt
			);
		$this->db6->where('CWPNumber =',$CWPnumber);	
		$this->db6->update('dbcargo_header_edit', $data);
		
		//balikin  data dbcargo_header
		$FlagReceipt='0';
		$data = array(
					'FlagReceipt' => $FlagReceipt
			);
		$this->db6->where('RCWPNumber =',$CWPnumber);	
		$this->db6->update('dbcargo_header', $data);
		
		//balikin  data csd edit
		$FlagReceipt='0';
		$NoKwitansi='';
		$data = array(
					'FlagReceipt' => $FlagReceipt,
					'NoKwitansi'  => $NoKwitansi
			);
		$this->db6->where('CSDNumber=',$CSDNumber);	
		$this->db6->update('dbcsd_edit', $data);
		
		//balikin  data csd
		$FlagReceipt='0';
		$NoKwitansi='';
		$data = array(
					'FlagReceipt' => $FlagReceipt,
					'NoKwitansi'  => $NoKwitansi
			);
		$this->db6->where('RCSDNumber=',$CSDNumber);	
		$this->db6->update('dbcsd', $data);
		
	}
}