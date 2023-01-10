<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grid extends MX_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['usersModel','groupModel']);
	}
	public function tes()
	{
	$firstNames = array("Andrew", "Nancy", "Shelley", "Regina", "Yoshi", "Antoni", "Mayumi", "Ian","Peter", "Lars", "Petra", "Martin", "Sven", "Elio", "Beate", "Cheryl", "Michael", "Guylene");
	$lastNames = array("Fuller", "Davolio", "Burke", "Murphy", "Nagase", "Saavedra", "Ohno", "Devling","Wilson", "Peterson", "Winkler", "Bein", "Petersen", "Rossi", "Vileid", "Saylor", "Bjorn", "Nodier");
	$productNames = array("Black Tea", "Green Tea", "Caffe Espresso", "Doubleshot Espresso", "Caffe Latte", "White Chocolate Mocha", "Cramel Latte", "Caffe Americano", "Cappuccino", "Espresso Truffle", "Espressocon Panna", "Peppermint Mocha Twist", "Black Tea", "Green Tea", "Caffe Espresso", "Doubleshot Espresso", "Caffe Latte", "White Chocolate Mocha");
	$priceValues = array("2.25", "1.5", "3.0", "3.3", "4.5", "3.6", "3.8", "2.5", "5.0","1.75","3.25","4.0", "2.25", "1.5", "3.0", "3.3", "4.5", "3.6");
	$data = array();
	$i=0;
	while($i < count($productNames))
	{    
	  $row = array();
	  $productindex = $i;
	  $price = $priceValues[$productindex];
	  $quantity = rand(1, 10);
	  $row["firstname"] = $firstNames[$i];
	  $row["lastname"] = $lastNames[$i];
	  $row["productname"] = $productNames[$productindex];
	  $row["price"] = $price;
	  $row["quantity"] = $quantity;
	  $row["total"] = $price * $quantity;
	  $data[$i] = $row;
	  $i++;
	}
	 
	header("Content-type: application/json"); 
	echo "{\"data\":" .json_encode($data). "}";
	}
	public function user_list()
	{
		$data = $this->usersModel->get_all();
		header("Content-type: application/json"); 
		echo "{\"data\":" .json_encode($data). "}";	
	}
	public function update_users()
	{
		$active = $this->input->post('active');
		$company = $this->input->post('company');
		$email = $this->input->post('email');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$phone = $this->input->post('phone');
		$username = $this->input->post('username');
		$id = $this->input->post('uid');

		$return = $this->usersModel->update(compact('active','company','email','first_name','last_name','phone','username'),$id);
		return $this->output
				        ->set_content_type('application/json')
				        ->set_status_header(200)
				        ->set_output(json_encode($this->input->post()));
	}
	public function insert_group()
	{
		$return = $this->groupModel->insert($this->input->post());
		return $this->output
				        ->set_content_type('application/json')
				        ->set_status_header(200)
				        ->set_output(json_encode($return));
	}
	public function update_group()
	{
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		$return = $this->groupModel->update(compact('name','description'),$this->input->post('id'));
		return $this->output
				        ->set_content_type('application/json')
				        ->set_status_header(200)
				        ->set_output(json_encode($return));
	}
	
}

/* End of file Grid.php */
/* Location: ./application/modules/front/controllers/Grid.php */