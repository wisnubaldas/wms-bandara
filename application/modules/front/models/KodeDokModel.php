<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KodeDokModel extends MY_Model {
	public $table = 'master_KD_DOK'; // you MUST mention the table name
	public $primary_key = 'id'; // you MUST mention the primary key
	// public $fillable = array('name','description'); // If you want, you can set an array with the fields that can be filled by insert/update
	// public $protected = array(); // ...Or you can set an array with the fields that cannot be filled by insert/update

	public function __construct()
	{
		// $this->_database_connection  = 'TPS';
		$this->timestamps = false;
		$this->return_as = 'array';
		// $this->after_get[] = 'get_menu_group';
		$this->has_one['gateIn'] = array('foreign_model'=>'GateinModel','foreign_table'=>'get_imp_in','foreign_key'=>'kd_dok','local_key'=>'id');
		parent::__construct();
	}
	

}

/* End of file KodeDokModel.php */
/* Location: ./application/modules/front/models/KodeDokModel.php */