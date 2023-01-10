<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sigo_model extends CI_Model
{
	private $db7;
	private $db8;
    function __construct()
    {
        parent::__construct();			
		$this->db7 = $this->load->database('rdwarehouse_bdo_read', TRUE);	
		$this->db8 = $this->load->database('rdwarehouse_bdo', TRUE);	
    }
	
	public  function inc_header($token,$Invoicenumber)
	{
		$this->db7->distinct();
		$this->db7->select('*');
		$this->db7->where('Invoicenumber',$Invoicenumber);
		$this->db7->where('token',$token);
		$query = $this->db7->get('sigo_inc_invoiceheader');
		return $query->result();
	}
	
	public  function inc_detail($token,$Invoicenumber)
	{
		$this->db7->distinct();
		$this->db7->select('*');
		$this->db7->where('Invoicenumber',$Invoicenumber);
		$this->db7->where('token',$token);
		$query = $this->db7->get('sigo_inc_invoicedetail');
		return $query->result();
	}
	
	public  function out_header($token,$Invoicenumber)
	{
		$this->db7->distinct();
		$this->db7->select('*');
		$this->db7->where('Invoicenumber',$Invoicenumber);
		$this->db7->where('token',$token);
		$query = $this->db7->get('sigo_out_invoiceheader');
		return $query->result();
	}
	
	public  function out_detail($token,$Invoicenumber)
	{
		$this->db7->distinct();
		$this->db7->select('*');
		$this->db7->where('Invoicenumber',$Invoicenumber);
		$this->db7->where('token',$token);
		$query = $this->db7->get('sigo_out_invoicedetail');
		return $query->result();
	}
	
	public  function imp_header($token,$Invoicenumber)
	{
		$this->db7->distinct();
		$this->db7->select('*');
		$this->db7->where('Invoicenumber',$Invoicenumber);
		$this->db7->where('token',$token);
		$query = $this->db7->get('sigo_imp_invoiceheader');
		return $query->result();
	}
	
	public  function imp_detail($token,$Invoicenumber)
	{
		$this->db7->distinct();
		$this->db7->select('*');
		$this->db7->where('Invoicenumber',$Invoicenumber);
		$this->db7->where('token',$token);
		$query = $this->db7->get('sigo_imp_invoicedetail');
		return $query->result();
	}

	public  function eks_header($token,$Invoicenumber)
	{
		$this->db7->distinct();
		$this->db7->select('*');
		$this->db7->where('Invoicenumber',$Invoicenumber);
		$this->db7->where('token',$token);
		$query = $this->db7->get('sigo_eks_invoiceheader');
		return $query->result();
	}
	
	public  function eks_detail($token,$Invoicenumber)
	{
		$this->db7->distinct();
		$this->db7->select('*');
		$this->db7->where('Invoicenumber',$Invoicenumber);
		$this->db7->where('token',$token);
		$query = $this->db7->get('sigo_eks_invoicedetail');
		return $query->result();
	}
	
}