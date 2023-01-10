<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dbpoint extends REST_Controller {
	
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
			$data = $this->db6->get('dbpoint')->result();            
        } else {
            $this->db6->where('_id', $_id);
            $data = $this->db6->get('dbpoint')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$_id = $this->put('_id');
        $data = array(	
					'ClientRegistration'	=> $this->put('ClientRegistration'),
					'CodeOfPoint'			=> $this->put('CodeOfPoint'),
					'ValidFrom'				=> $this->put('ValidFrom'),
					'ValidUntil'			=> $this->put('ValidUntil'),
					'PointDivider'			=> $this->put('PointDivider'),
					'PointMultiplication'	=> $this->put('PointMultiplication'),
					'PointKonstanta'		=> $this->put('PointKonstanta'),
					'_updated_by'			=> $this->put('_updated_by'),	
					'_id'					=> $this->put('_id')
					);
					
		$this->db6->where('_id', $_id);
        $update = $this->db6->update('dbpoint', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'ClientRegistration'	=> $this->post('ClientRegistration'),
					'CodeOfPoint'			=> $this->post('CodeOfPoint'),
					'ValidFrom'				=> $this->post('ValidFrom'),
					'ValidUntil'			=> $this->post('ValidUntil'),
					'PointDivider'			=> $this->post('PointDivider'),
					'PointMultiplication'	=> $this->post('PointMultiplication'),
					'PointKonstanta'		=> $this->post('PointKonstanta'),
					'_created_by'			=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dbpoint', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}