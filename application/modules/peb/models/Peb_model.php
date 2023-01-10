<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peb_model extends CI_Model
{
	
	private $db1;
    function __construct()
    {
        parent::__construct();			
		$this->db1 = $this->load->database('dev_peb_pli', TRUE);	
    }
	
	public function delete_table($mytable)
	{
		$this->db1->from($mytable);
		$this->db1->truncate();
	}
	
	
	public function list_car_close()
	{
		$this->db1->select('*');    
		$this->db1->where("is_status<>'CLOSE'");
		$this->db1->from('car_close');
		$query = $this->db1->get();
		return $query->result();
	}
	
	public function temp_car_close()
	{
		$this->db1->select('*');    		
		$this->db1->from('temp_car_close');
		$query = $this->db1->get();
		return $query->result();
	}
	
	
	public function sortir_data()
	{
		$query=$this->db1->query("CALL sortir_data();");
		return $query->result();
	}
	
	
	public function insert_data_peb()
	{
		$query=$this->db1->query("CALL insert_data();");
		return $query->result();
	}
	
	public function insert_data_peb_ocean()
	{
		$query=$this->db1->query("CALL insert_data_ocean();");
		return $query->result();
	}
	
	public function insert_data_peb_birnest()
	{
		$query=$this->db1->query("CALL insert_data_birnest();");
		return $query->result();
		
	}
	
	/*
	public function drsc_import($shifname,$dateDRSC,$PaymentCode,$token)
	{
		$query=$this->db7->query("CALL Get_drsc_import('".$shifname."','".$dateDRSC."','".$PaymentCode."','".$token."');");
		return $query->result();
	}
	*/
	
	
	
	
}