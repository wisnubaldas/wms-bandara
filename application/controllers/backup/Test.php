<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {	
		/** ############
		 **	Test.php create by: wisnu baldas
		 ** dir: /home/wisnu/Documents/web/tps4.0/application/controllers/Test.php
	     *  ############
	     * 
	     * 
	     * 
	     *        
	     **/	
	public function __construct()
	{
		parent::__construct();

		$this->load->model(['MyMenus','UsersMenus']);
		// $items = $this->menu->all();

		$this->load->library(['multi_menu','ion_auth']);
		// $xx = $this->multi_menu->set_items($items);
		
	}

	public function index()
	{
		$this->load->view("test_view");
	}

	public function basic()
	{
		$this->load->view("basic");
	}

	public function inject()
	{
		$this->load->view("inject");
	}

	public function bootstrap1()
	{
		$config["nav_tag_open"]          = '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';		
		$config["parent_tag_open"]       = '<li class="dropdown-submenu">';			
		$config["parent_anchor_tag"]     = '<a tabindex="-1" href="%s">%s</a>';	
		$config["children_tag_open"]     = '<ul class="dropdown-menu">';			
		$config["item_divider"]          = "<li class='divider'></li>";

		$this->multi_menu->initialize($config);
		$this->load->view("bootstrap1");
	}

	public function bootstrap2()
	{		
		$this->load->view("bootstrap2");
	}
	public function menu()
	{
		$identity = 'wisnubaldas@gmail.com';
		$password = 'wisnubaldas';
		$remember = TRUE; // remember the user
		$this->ion_auth->login($identity, $password, $remember);
		$user = $this->ion_auth->user()->row();
		$idMenu = $this->UsersMenus->where('id_user',$user->id)->get_all();
		$idM = [];
		foreach ($idMenu as $v) {
			array_push($idM, $v['id_menu']);
		}
		$items = $this->MyMenus->where('id',$idM)->get_all();
		$data['user'] = $items;
		$this->multi_menu->set_items($items);
		$data['menu'] = $this->multi_menu->render();
		$this->parser->parse("welcome_message.tpl",$data);
	}

}