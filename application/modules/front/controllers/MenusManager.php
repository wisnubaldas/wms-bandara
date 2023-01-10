<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenusManager extends MX_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['menuGridModel','menuGroupJoinModel']);
		if (!$this->ion_auth->logged_in())
		{
			redirect('dasbord', 'refresh');
		}
	}

	public function index()
	{
		$data['title'] = ['Menu Manager','Page','Menu Manager','Menu List','index'];
		return $this->parser->parse('userPage/menus_grid',$data);
	}
	public function regMenu()
	{
		$menu = $this->menuGroupJoinModel->dataMenu();	
		$data['mngrp'] = $menu;
		$data['title'] = ['Menu Manager','Page','Register Menu','Menu Form','index'];
		return $this->parser->parse('userPage/menus_reg',$data);
	}
	public function getMenu()
	{
		$getID = $this->input->get('id') ? $this->input->get('id') : $this->input->get('id');
		if ($getID) {
			$id = $this->input->get('id');
			$data = $this->menuGridModel->as_array()->get($id);
			return $this->output
		            ->set_content_type('application/json')
		            ->set_status_header(200)
		            ->set_output(json_encode(compact('data')));
		}else{
		$data = $this->menuGridModel->as_array()->get_all();
		return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(["data"=>$data]));
		}

	}
	public function editMenu()
	{
		$update_data = $this->input->post();
		foreach($update_data as $key=>$value)
			{
			    if(is_null($value) || $value == '')
			        // unset($update_data[$key]);
			        $update_data[$key] = NULL;
			}
		$data = $this->menuGridModel->update($update_data,$update_data['id']);
		return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(["data"=>$data]));
	}
	public function createMenu()
	{
		$postnya = $this->input->post();
		$data = $this->menuGridModel->insert($postnya);
		return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(["data"=>$data]));
	}
	public function deleteMenu()
	{
		$delet = $this->menuGridModel->delete($this->input->post('id'));
		return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($delet));
	}

}