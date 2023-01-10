<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dbnumber extends REST_Controller {
	
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
			$data = $this->db6->get('dbnumber')->result();            
        } else {
            $this->db6->where('_id', $_id);
            $data = $this->db6->get('dbnumber')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$_id = $this->put('_id');
        $data = array(	
					'numbering'		=> $this->put('numbering'),
					'description'	=> $this->put('description'),
					'code'			=> $this->put('code'),
					'Digit'			=> $this->put('Digit'),
					'_id'			=> $this->put('_id')
					);
					
		$this->db6->where('_id', $_id);
        $update = $this->db6->update('dbnumber', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'numbering'		=> $this->post('numbering'),
					'description'	=> $this->post('description'),
					'code'			=> $this->post('code'),
					'Digit'			=> $this->post('Digit')
					);
					
		 $insert = $this->db6->insert('dbnumber', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}