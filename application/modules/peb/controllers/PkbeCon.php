<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class PkbeCon extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	Car	SeriCont	NoCont	Size	TglStuffing	AlmtStuffing	DtlOk
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('PkbeCon')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('PkbeCon')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'				=> $this->put('CAR'),
					'SeriCont'			=> $this->put('SeriCont'),
					'NoCont'			=> $this->put('NoCont'),
					'Size'				=> $this->put('Size'),
					'TglStuffing'		=> $this->put('TglStuffing'),
					'AlmtStuffing'		=> $this->put('AlmtStuffing'),
					'DtlOk'				=> $this->put('DtlOk')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('PkbeCon', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'				=> $this->post('CAR'),
					'SeriCont'			=> $this->post('SeriCont'),
					'NoCont'			=> $this->post('NoCont'),
					'Size'				=> $this->post('Size'),
					'TglStuffing'		=> $this->post('TglStuffing'),
					'AlmtStuffing'		=> $this->post('AlmtStuffing'),
					'DtlOk'				=> $this->post('DtlOk')
					);
					
		 $insert = $this->db->insert('PkbeCon', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}