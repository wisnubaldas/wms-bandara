<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rubah_model extends CI_Model
{
	private $db5;
	private $db6;
	private $db7;	
	private $db8;
    function __construct()
    {
        parent::__construct();			
		$this->db7 = $this->load->database('rdwarehouse_bdo_read', TRUE);
		$this->db8 = $this->load->database('rdwarehouse_bdo', TRUE);		
		$this->db5 = $this->load->database('db_tpsonline_read', TRUE);	
		$this->db6 = $this->load->database('db_tpsonline', TRUE);	
    }
	
	public function update_data($namatable,$keycode,$namafield,$nilaiField)
	{
		if ($namatable=='eks_weighingheader')
		{		
			if ($namafield=='InvoiceNumber')
			{
				$nilaiFlag='1';
				
				$data = array(
					'PaymentCode' 	=> $nilaiFlag,
					'InvoiceNumber'	=> $nilaiField
				);
			}
			$this->db8->where('ProofNumber=',$keycode);	
			$this->db8->update('eks_weighingheader', $data);
		}
		else if ($namatable=='eks_dokcustom')
		{		
			if ($namafield=='InvoiceNumber')
			{
				$data = array(
					'InvoiceNumber'	=> $nilaiField
				);
			}
			$this->db8->where('InvoiceNumber=',$keycode);	
			$this->db8->update('eks_dokcustom', $data);
		}
		else if ($namatable=='mst_tax')
		{
			if ($namafield=='InvoiceNumber')
			{
				$data = array(
					'InvoiceNumber'	=> $nilaiField
				);
			}
			$this->db8->where('taxnumber=',$keycode);	
			$this->db8->update('mst_tax', $data);
		}
		else if ($namatable=='imp_breakdowndetail')
		{
			if ($namafield=='sisa')
			{
				$data = array(
					'sisa'	=> $nilaiField
				);
			}
			$this->db8->where('MasterAWB=',$keycode);	
			$this->db8->update('imp_breakdowndetail', $data);
			
		}
		else if ($namatable=='imp_obdetail')
		{
			if ($namafield=='sisa')
			{
				$data = array(
					'sisa'	=> $nilaiField
				);
			}
			$this->db8->where('MasterAWB=',$keycode);	
			$this->db8->update('imp_obdetail', $data);
			
		}
		
		
	}
	
	public function update_void($namatable,$namacode,$nilaicode)
	{
		$nilaiFlag='1';
		$data = array(
			'void' => $nilaiFlag
		);
		$this->db8->where($namacode,$nilaicode);	
		$this->db8->update($namatable,$data);
	}
	
	public function update_flag($namatable,$namafield,$namacode,$nilaicode)
	{
		$nilaiFlag='1';
		$data = array(
			$namafield => $nilaiFlag
		);
		$this->db8->where($namacode,$nilaicode);	
		$this->db8->update($namatable,$data);
	}
	
	public function update_dinamis($namatable,$namafield,$isifield,$namacode,$nilaicode)
	{
		
		$data = array(
			$namafield => $isifield
		);
		$this->db8->where($namacode,$nilaicode);	
		$this->db8->update($namatable,$data);
	}
	
	public function update_dinamis_tps($namatable,$namafield,$isifield,$namacode,$nilaicode)
	{
		
		$data = array(
			$namafield => $isifield
		);
		$this->db6->where($namacode,$nilaicode);	
		$this->db6->update($namatable,$data);
	}
	
}