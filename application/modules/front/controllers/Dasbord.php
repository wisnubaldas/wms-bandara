<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbord extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->model(['menusModel','menuGroupsModel']);
	}
	private function get_user()
	{
		$kk = $this->ion_auth->users()->result();
		return count($kk);
	}
	private function get_group()
	{
		$groups = $this->ion_auth->groups()->result();
		return count($groups);
	}
	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else
		{
			// kusut
			$grp = $this->ion_auth->get_users_groups()->row();
			if($grp == false)
			{
				redirect('auth/login', 'refresh');
			}
			$idGroup = $this->menuGroupsModel->fields('menus_id')->where('groups_id',$grp->id)->get_all();
			$id = [];
			foreach ($idGroup as $v) {
				array_push($id,$v['menus_id']);
			}
			$data['data'] = $this->menusModel
							->fields('parent_name,parent_icon,name,link,pertama,kedua')
							->where('id',$id)
							->get_all();
			$data['user'] = $this->ion_auth->user()->row();
			$data['dasbord'] = ['user'=>$this->get_user(),'group'=>$this->get_group()];
			$data['title'] = ['Admin','Page','Home','admin','index'];
			// $data['pages'] = 'adminPage/index.tpl';
			$this->parser->parse('index.tpl',$data);

		}

		
	}

}

/* End of file Dasbord.php */
/* Location: ./application/modules/front/controllers/Dasbord.php */