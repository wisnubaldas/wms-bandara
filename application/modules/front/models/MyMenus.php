<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyMenus extends MY_Model {
	public $table = 'menus'; // you MUST mention the table name
	public $primary_key = 'id'; // you MUST mention the primary key
	// public $fillable = array('pertama','kedua','active','id','parent_name','parent_icon','name','link'); 
	// public $protected = array(); 
	public function __construct()
	{
		// $this->_database_connection  = 'TPS';
		$this->timestamps = ['create_at','update_at'];
		$this->return_as = 'array';
		parent::__construct();

	}
	

}

/* End of file MenusModel.php */
/* Location: ./application/modules/front/models/MenusModel.php */