<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class ResPMC extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	ResTg	ResWk	seri	NoCont	Size	Type	NoSegel	JnPartOf	Stuff
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_respmc')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_respmc')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'			=> $this->put('CAR'),
					'ResTg'			=> $this->put('ResTg'),
					'ResWk'			=> $this->put('ResWk'),
					'seri'			=> $this->put('seri'),
					'NoCont'		=> $this->put('NoCont'),
					'Size'			=> $this->put('Size'),
					'Type'			=> $this->put('Type'),
					'NoSegel'		=> $this->put('NoSegel'),
					'JnPartOf'		=> $this->put('JnPartOf'),
					'Stuff'			=> $this->put('Stuff')
					);
					
		 $insert = $this->db->insert('temp_respmc', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'			=> $this->POST('CAR'),
					'ResTg'			=> $this->POST('ResTg'),
					'ResWk'			=> $this->POST('ResWk'),
					'seri'			=> $this->POST('seri'),
					'NoCont'		=> $this->POST('NoCont'),
					'Size'			=> $this->POST('Size'),
					'Type'			=> $this->POST('Type'),
					'NoSegel'		=> $this->POST('NoSegel'),
					'JnPartOf'		=> $this->POST('JnPartOf'),
					'Stuff'			=> $this->POST('Stuff')
					);
		
		 $insert = $this->db->insert('temp_respmc', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}