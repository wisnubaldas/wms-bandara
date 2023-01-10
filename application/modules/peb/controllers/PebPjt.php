<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class PebPjt extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	SeriBrg	IdeksT	NpwpEksT	NamaEksT	AlmtEksT	NamaBeliT	AlmtBeliT	NegBeliT
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('PebPjt')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('PebPjt')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'				=> $this->put('CAR'),
					'SeriBrg'			=> $this->put('SeriBrg'),
					'IdeksT'			=> $this->put('IdeksT'),
					'NpwpEksT'			=> $this->put('NpwpEksT'),
					'NamaEksT'			=> $this->put('NamaEksT'),
					'AlmtEksT'			=> $this->put('AlmtEksT'),
					'NamaBeliT'			=> $this->put('NamaBeliT'),
					'AlmtBeliT'			=> $this->put('AlmtBeliT'),
					'NegBeliT'			=> $this->put('NegBeliT')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('PebPjt', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'				=> $this->post('CAR'),
					'SeriBrg'			=> $this->post('SeriBrg'),
					'IdeksT'			=> $this->post('IdeksT'),
					'NpwpEksT'			=> $this->post('NpwpEksT'),
					'NamaEksT'			=> $this->post('NamaEksT'),
					'AlmtEksT'			=> $this->post('AlmtEksT'),
					'NamaBeliT'			=> $this->post('NamaBeliT'),
					'AlmtBeliT'			=> $this->post('AlmtBeliT'),
					'NegBeliT'			=> $this->post('NegBeliT')
					);
					
		 $insert = $this->db->insert('PebPjt', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}