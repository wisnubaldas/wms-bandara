<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenusModel extends MY_Model {

	public $table = 'menus'; // you MUST mention the table name
	public $primary_key = 'id'; // you MUST mention the primary key
	public $fillable = array('parent_name','parent_icon','name','link'); 
	public $protected = array(); 
	public function __construct()
	{
		// $this->_database_connection  = 'TPS';
		$this->timestamps = ['create_at','update_at'];
		$this->return_as = 'array';
		$this->after_get[] = 'bikin_menu';
		parent::__construct();

	}
	protected function bikin_menu($data)
	{
		$kedua = [];
		$pertama = [];
		foreach ($data as $i => $v) {
			
			if($v['pertama'] != NULL)
			{
				 $pertama[] = $v;
			}
			if($v['kedua'] != NULL)
			{
				 $kedua[] = $v;
			}
		}
		$final = [];
		foreach ($pertama as $k=>$v) {
			$kk = [];
			foreach ($kedua as $val) {
				if($v['pertama'] == $val['kedua'])
				{
					array_push($kk,$val);
				}				
			}
			array_push($final,array_merge($v,['detail'=>$kk]));
		}
		return $final;
	}

}

/* End of file MenusModel.php */
/* Location: ./application/modules/front/models/MenusModel.php */