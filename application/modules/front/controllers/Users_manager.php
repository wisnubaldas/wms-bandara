<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_manager extends MX_Controller {
	private $menus;
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['menusModel','groupModel','usersModel']);
		$this->load->library(array('ion_auth', 'form_validation'));
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			redirect('dasbord', 'refresh');
		}
	}
	
	public function users_data()
	{
		$data['user'] =  $this->ion_auth->users()->result();
		$data['title'] = ['User Manager','Page','User Manager','List user','index'];
		return $this->parser->parse('userPage/users_grid',$data);
	}
	public function delete_user()
	{
		$id = $this->input->get('id');
		return $this->ion_auth->delete_user($id);
	}
	public function edit_user()
	{
		$getID = $this->input->get('id_edit') ? $this->input->get('id_edit') : $this->input->get('id_edit');
		if($getID)
		{
		return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($this->usersModel->fields('id,ip_address,username,email,first_name,last_name,company,phone')->get($getID)));
		}else {
			$username = $this->input->post('username');			
			$first_name = $this->input->post('first');			
			$last_name = $this->input->post('last');			
			$company = $this->input->post('comp');			
			$email = $this->input->post('mail');			
			$phone = $this->input->post('phone');			
			$update = $this->ion_auth->update($this->input->post('id-user'),compact('username','first_name','last_name','company','email','phone'));
			if($update)
			{
			return $this->output
	            ->set_content_type('application/json')
	            ->set_status_header(200)
	            ->set_output(json_encode(['return'=>'sukses update']));
			}
			
		}
	}
	public function group_data()
	{
		$data['data'] = $this->menus;
		$data['user'] = $this->ion_auth->user()->row();
		$data['groups'] = $this->ion_auth->groups()->result();
		$data['title'] = ['Group Manager','Page','Group Manager','List Group','index'];
		return $this->parser->parse('userPage/group_grid',$data);
	}
	public function register()
	{
		$data['group_list'] = $this->groupModel->get_all();
		$data['title'] = ['Register','Page','User Manager','Register','index'];
		return $this->parser->parse('userPage/register',$data);
	}
	public function post_reg()
	{
		$config = array(
			        [
		                'field' => 'username',
		                'label' => 'Username',
		                'rules' => 'required',
			        ],
			        [
		                'field' => 'passwd',
		                'label' => 'Password',
		                'rules' => 'required',
			        ],
			        [
		                'field' => 'mail',
		                'label' => 'Email',
		                'rules' => 'required',
			        ],

				  );
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<i class="fa fa-times-circle-o text-red"> ', '</i>');
		if ($this->form_validation->run() == FALSE)
            {
            	
            	$error =[
            			'.username'=>form_error('username'),
            			'.passwd'=>form_error('passwd'),
            			'.mail'=>form_error('mail'),
            			];
               return $this->output
				        ->set_content_type('application/json')
				        ->set_status_header(500)
				        ->set_output(json_encode($error));
            }
            else
            {
                $username = $this->input->post('username');
				$password = $this->input->post('passwd');
				$email = $this->input->post('mail');
				$additional_data = array(
										'first_name' => $this->input->post('first'),
										'last_name' => $this->input->post('last'),
										'company' => $this->input->post('comp'),
										'ip_address' => $this->input->ip_address(),
										'phone' => $this->input->post('phone'),
										);
				$group = array((int)$this->input->post('group')); // Sets user to admin.
				$kk = $this->ion_auth->register($username, $password, $email, $additional_data, $group);
				return $this->output
					        ->set_content_type('application/json')
					        ->set_status_header(201)
					        ->set_output(json_encode($kk));
		    }

		
	}

}

/* End of file Users_manager.php */
/* Location: ./application/modules/front/controllers/Users_manager.php */