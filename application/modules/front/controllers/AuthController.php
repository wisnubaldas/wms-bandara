<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends MX_Controller {

	public function __construct()
	{
		
		parent::__construct();		
		$this->load->model(['MyMenus','UsersMenus']);
		$this->load->library(['multi_menu']);
		
	}
	public function index()
	{
		if(!$this->ion_auth->logged_in())
		{
			$this->parser->parse('login.tpl');
		}else {
			$user = $this->ion_auth->user()->row();
			$idMenu = $this->UsersMenus->where('id_user',$user->id)->get_all();
			$idM = [];
			foreach ($idMenu as $v) {
				array_push($idM, $v['id_menu']);
			}
			$items = $this->MyMenus->where('id',$idM)->get_all();
			$data['user'] = $this->ion_auth->user()->row();
			$this->multi_menu->set_items($items);
			$data['menu'] = $this->multi_menu->render();
			$this->parser->parse("welcome_message.tpl",$data);
		}
	}

	public function login()
	{
		$this->_ajax();
				$identity = $this->input->post('identity');
				$password = $this->input->post('password');
				$remember = $this->input->post('remember');// remember the user
				if($remember == 'on')
				{
					$remember = true;	
				}else {
					$remember = false;
				}
				$login = $this->ion_auth->login($identity, $password, $remember);
				if($login)
				{
					$messages = $this->ion_auth->messages();
					$return = ['message'=>strip_tags($messages)];
					$statusCode = 200;
					$this->_retrun($statusCode,$return);
				}else{
					// error respon
					$errors = $this->ion_auth->errors();
					$return = ['message'=>strip_tags($errors)];
					$statusCode = 500;
					$this->_retrun($statusCode,$return);
				}
	
	}
    public function logout()
    {
        $this->_ajax();
        $logout = $this->ion_auth->logout();
        $messages = $this->ion_auth->messages();
        $return = ['message'=>strip_tags($messages)];
        $statusCode = 200;
        $this->_retrun($statusCode,$return);
    }
	public function createUser()
	{
		$username = 'user';
		$password = '12345';
		$email = 'user@user.com';
		$additional_data = array(
								'first_name' => 'user',
								'last_name' => 'biasa',
								);
		$group = array('2'); // Sets user to admin.

		$kk = $this->ion_auth->register($username, $password, $email, $additional_data, $group);
		print_r($kk);
	}
	private function _ajax()
	{
		if (!$this->input->is_ajax_request()) {
   				exit('No direct script access allowed');
		}

	}
	private function _retrun($statusCode,$return)
	{
		return $this->output
            ->set_content_type('application/json')
            ->set_status_header($statusCode)
            ->set_output(json_encode($return));
	}

}

/* End of file AuthController.php */
/* Location: ./application/modules/front/controllers/AuthController.php */