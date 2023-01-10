<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuGroupJoinModel extends CI_Model {
	// public $table = 'menus_groups'; // you MUST mention the table name
	// public $primary_key = 'id'; // you MUST mention the primary key
	// public $fillable = array('groups_id','menus_id'); 
	public function __construct()
	{
		// $this->_database_connection  = 'TPS';
		// $this->timestamps = false;
		// $this->return_as = 'array';
		// $this->after_get[] = 'genMenuGroup';
		parent::__construct();
		$this->load->database();
	}
	public function dataMenu()
	{
		$final = [];
		$idMnu = [];
		$mnotg = $this->db->select('id,parent_name,name')
							->from('menus')
							->get()->result();
		$data = [];
		foreach ($mnotg as $v) {
		$grpMnu = $this->db->select('menus_id,groups_id')
					->from('menus_groups')
					->where('menus_id',$v->id)
					->get()->result();
					$grpx = [];
					foreach ($grpMnu as $g) {
						$grp = $this->db->select('name')
									->from('groups')
									->where('id',$g->groups_id)
									->get()->result_array();
						$gg = $this->db->select('id,name')->from('groups')->get()->result_array();
									foreach ($grp as $gp) {
										foreach ($gg as $gx) {
											if($gp['name']==$gx['name'])
											{
												array_push($grpx,[$gp['name'],'select']);
											}else {
												array_push($grpx,[$gx['name']]);
											}
										}
									}
					}
					array_push($data,array_merge((array)$v,['group'=>$grpx]));
		}
		return $data;
	}
}
/* End of file MenuGroupJoinModel.php */
/* Location: ./application/modules/front/models/MenuGroupJoinModel.php */