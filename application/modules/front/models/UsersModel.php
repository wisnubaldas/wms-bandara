<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends MY_Model {

	public $table = 'users'; // you MUST mention the table name
	public $primary_key = 'id'; // you MUST mention the primary key
	public $fillable = array('active','company','email','first_name','last_name','phone','username'); // If you want, you can set an array with the fields that can be filled by insert/update
	// public $protected = array(); // ...Or you can set an array with the fields that cannot be filled by insert/update
	public function __construct()
	{
		// $this->_database_connection  = 'TPS';
		$this->timestamps = false;
		$this->return_as = 'array';
		$this->after_get[] = 'cari_group';
		// $this->has_many['groups'] = array('foreign_model'=>'GroupModel','foreign_table'=>'groups','foreign_key'=>'id','local_key'=>'id');
		parent::__construct();
		
	}
	protected function cari_group($data)
	{
		// $groupID = $this->db->get_where('users_groups', array('user_id' => $data['id']))->result();
		// $grpID = [];
		// foreach ($groupID as $v) {
		// 	array_push($grpID,$v->group_id);
		// }
		$grp = $this->db->select('id,description')
					->from('groups')->get()->result();
		return array_merge($data,['groupnya'=>$grp]);
	}

}

/* End of file UsersModel.php */
/* Location: ./application/modules/front/models/UsersModel.php */