<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersMenus extends MY_Model {

	public $table = 'users_menus'; // you MUST mention the table name
	public $primary_key = 'id'; // you MUST mention the primary key
	public $fillable = array('id_user','id_menu'); 
	public $protected = array(); 
	public function __construct()
	{
		// $this->_database_connection  = 'TPS';
		// $this->timestamps = ['create_at','update_at'];
		$this->return_as = 'array';
		$this->timestamps = FALSE;
		parent::__construct();

	}

}

/* End of file UsersMenus.php */
/* Location: ./application/models/UsersMenus.php */