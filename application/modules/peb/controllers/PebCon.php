<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class PebCon extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	NoCont	Size	Type	NoSegel	Stuff	JnPartOf
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_PebCon')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_PebCon')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'			=> $this->put('CAR'),
					'NoCont'		=> $this->put('NoCont'),
					'Size'			=> $this->put('Size'),
					'Type'			=> $this->put('Type'),
					'NoSegel'		=> $this->put('NoSegel'),
					'Stuff'			=> $this->put('Stuff'),
					'JnPartOf'		=> $this->put('JnPartOf')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_PebCon', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'			=> $this->post('CAR'),
					'NoCont'		=> $this->post('NoCont'),
					'Size'			=> $this->post('Size'),
					'Type'			=> $this->post('Type'),
					'NoSegel'		=> $this->post('NoSegel'),
					'Stuff'			=> $this->post('Stuff'),
					'JnPartOf'		=> $this->post('JnPartOf')
					);
					
		 $insert = $this->db->insert('temp_PebCon', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}