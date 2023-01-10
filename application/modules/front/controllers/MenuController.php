<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuController extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('menuGridModel','menuModel');
		
	}
	
	public function track_import()
	{
	    $this->_ajax();
		$this->parser->parse("track/import.tpl");
	}
	
	public function track_export()
	{
	    $this->_ajax();
		$this->parser->parse("track/export.tpl");
	}
	
	public function plp_mohon()
	{
	    $this->_ajax();
		$this->parser->parse("plp/mohon.tpl");
	}
	public function plp_batal()
	{
	    $this->_ajax();
		$this->parser->parse("plp/batal.tpl");
	}
	
	public function tps_gatein()
	{
	    $this->_ajax();
		// $this->parser->parse("tps/gatein.php");
		$this->load->view("tps/gatein.php");
	}
	public function user()
	{
		$this->_ajax();
		$data['breadcrumb'] = json_encode(['title'=>'User Pages',
											'desc'=>'User management add, edit, etc...',
											'link'=>[
													['name'=>'Home','uri'=>base_url()],
													['name'=>'Admin','uri'=>'#'],
													['name'=>'User Manager','uri'=>'#']
											]
											]);
		$this->load->view("adminPage/user.php",$data);
	}
	public function tps_gateout()
	{
	    $this->_ajax();
		$this->parser->parse("tps/gateout.tpl");
	}
	
	public function edit_menu()
    {
        $this->_ajax();
        $data['menuGrid'] = json_encode($this->menuModel->get_all());
        $this->parser->parse("adminPage/edit_menu.tpl",$data);
    }
    private function _ajax()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }

    }

}

/* End of file MenuController.php */
/* Location: ./application/modules/front/controllers/MenuController.php */