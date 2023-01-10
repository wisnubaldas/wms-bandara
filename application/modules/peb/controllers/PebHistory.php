<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class PebHistory extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	StatusLama	Tg	Wk	Kegiatan	StatusBaru	Snrf
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_PebHistory')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_PebHistory')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'			=> $this->put('CAR'),
					'StatusLama'	=> $this->put('StatusLama'),
					'Tg'			=> $this->put('Tg'),
					'Wk'			=> $this->put('Wk'),
					'Kegiatan'		=> $this->put('Kegiatan'),
					'StatusBaru'	=> $this->put('StatusBaru'),
					'Snrf'			=> $this->put('Snrf')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_PebHistory', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'			=> $this->post('CAR'),
					'StatusLama'	=> $this->post('StatusLama'),
					'Tg'			=> $this->post('Tg'),
					'Wk'			=> $this->post('Wk'),
					'Kegiatan'		=> $this->post('Kegiatan'),
					'StatusBaru'	=> $this->post('StatusBaru'),
					'Snrf'			=> $this->post('Snrf')
					);
					
		 $insert = $this->db->insert('temp_PebHistory', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}