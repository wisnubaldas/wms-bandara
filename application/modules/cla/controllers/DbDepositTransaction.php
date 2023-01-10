<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dbdeposittransaction extends REST_Controller {
	
	private $db6;
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db6 = $this->load->database('dbmscargo', TRUE);
	}
	
	function index_get() {
        $_id = $this->get('_id');
        if ($_id == '') {
			$data = $this->db6->get('dbdeposittransaction')->result();            
        } else {
            $this->db6->where('_id', $_id);
            $data = $this->db6->get('dbdeposittransaction')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$_id = $this->put('_id');
        $data = array(	
					'id_header'				=> $this->put('id_header'),
					'ClientRegistration'	=> $this->put('ClientRegistration'),		
					'TypeOfFlight'			=> $this->put('TypeOfFlight'),		
					'RemarksTransaction'	=> $this->put('RemarksTransaction'),
					'receipt'				=> $this->put('receipt'),
					'DateOfTransaction'		=> $this->put('DateOfTransaction'),
					'TimeOfTransaction'		=> $this->put('TimeOfTransaction'),
					'GrandTotal'			=> $this->put('GrandTotal'),
					'Jurnal'				=> $this->put('Jurnal'),
					'_updated_by'			=> $this->put('_updated_by'),	
					'_id'					=> $this->put('_id')
					);
					
		$this->db6->where('_id', $_id);
        $update = $this->db6->update('dbdeposittransaction', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'id_header'				=> $this->post('id_header'),
					'ClientRegistration'	=> $this->post('ClientRegistration'),		
					'TypeOfFlight'			=> $this->post('TypeOfFlight'),		
					'RemarksTransaction'	=> $this->post('RemarksTransaction'),
					'receipt'				=> $this->post('receipt'),
					'DateOfTransaction'		=> $this->post('DateOfTransaction'),
					'TimeOfTransaction'		=> $this->post('TimeOfTransaction'),
					'GrandTotal'			=> $this->post('GrandTotal'),
					'Jurnal'				=> $this->post('Jurnal'),
					'_created_by'			=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dbdeposittransaction', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}