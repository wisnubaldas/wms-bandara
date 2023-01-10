<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mohon extends MY_Model {
	public $view_mohon = 'view_mohon'; // you MUST mention the table name
	public $mohon_plp = 'mohon_plp'; // you MUST mention the table name
	public $mohon_plp_det = 'mohon_plp_det'; // you MUST mention the table name
	public $primary_key = 'id_mohon'; // you MUST mention the primary key

	public $id_mohon;
	public $kd_kantor;
	public $tipe_data;
	public $kd_tps_asal;
	public $ref_number;
	public $no_surat;
	public $tgl_surat;
	public $gudang_asal;
	public $kd_tps_tujuan;
	public $gudang_tujuan;
	public $kd_alasan_plp;
	public $yor_asal;
	public $yor_tujuan;
	public $call_sign;
	public $nm_angkut;
	public $no_voy_flight;
	public $tgl_tiba;
	public $no_bc11;
	public $tgl_bc11;
	public $nm_pemohon;

	// public $fillable = array('name','description'); // If you want, you can set an array with the fields that can be filled by insert/update
	// public $protected = array(); // ...Or you can set an array with the fields that cannot be filled by insert/update
	
	public function __construct()
	{
		$this->_database_connection  = 'BC';
		$this->timestamps = ['date_create','date_update'];
		$this->return_as = 'array';
		// $this->after_get[] = 'get_menu_group';
		parent::__construct();
	}

	public function insert(){
		$this->db->insert($this->get_table_name(),$this);

	}

	public function update(){
		$this->db->update($this->get_table_name(),$this,['id'=>$this->id]);

	}

	public function delete(){
		$this->db->delete($this->get_table_name(),['id'=>$this->id]);

	}
	

}

/* End of file Mohon.php */
/* Location: ./application/modules/front/models/plp/Mohon.php */