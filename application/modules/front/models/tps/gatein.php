<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gatein extends MY_Model {
	public $table = 'get_imp_in'; // you MUST mention the table name
	public $primary_key = 'id_kms'; // you MUST mention the primary key
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
	

}

/* End of file Gatein.php */
/* Location: ./application/modules/front/models/tps/Gatein.php */