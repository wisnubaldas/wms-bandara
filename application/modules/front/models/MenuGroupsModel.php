<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuGroupsModel extends MY_Model {
	public $table = 'menus_groups'; // you MUST mention the table name
	public $primary_key = 'id'; // you MUST mention the primary key
	public $fillable = array('groups_id','menus_id'); 
	public function __construct()
	{
		// $this->_database_connection  = 'TPS';
		$this->timestamps = false;
		$this->return_as = 'array';
		parent::__construct();


	}
	public function lsMenu($data)
	{
		// $grpID = [];
		// $menuID = [];
		// foreach ($data as $v) {
		// 	array_push($grpID, $v['groups_id']);

		// 	array_push($menuID, $v['menus_id']);
		// }
		// $data1 = $this->db->select('id,parent_name,name')
		// 					->where_in('id',$menuID)
		// 					->from('menus')
		// 					->get()->result_array();
		// $data2 = $this->db->select('id,name,description')
		// 					->where_in('id',$grpID)
		// 					->from('groups')
		// 					->get()->result_array();
		// return ['group'=>$data2,'menu'=>$data1];
		
	}
}

/* End of file MenuGroupsModel.php */
/* Location: ./application/modules/front/models/MenuGroupsModel.php */