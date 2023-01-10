<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class ResSppbk extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	Car	ResTg	ResWk	NoSppbk	TgSppbk	BkAwal	BkTetap	BkSelisih	SanksiTetap	SanksiSelisih
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_ressppbk')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_ressppbk')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'				=> $this->put('CAR'),
					'ResTg'				=> $this->put('ResTg'),
					'ResWk'				=> $this->put('ResWk'),
					'NoSppbk'			=> $this->put('NoSppbk'),
					'TgSppbk'			=> $this->put('TgSppbk'),
					'BkAwal'			=> $this->put('BkAwal'),
					'BkTetap'			=> $this->put('BkTetap'),
					'BkSelisih'			=> $this->put('BkSelisih'),
					'SanksiTetap'		=> $this->put('SanksiTetap'),
					'SanksiSelisih'		=> $this->put('SanksiSelisih')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_ressppbk', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'				=> $this->post('CAR'),
					'ResTg'				=> $this->post('ResTg'),
					'ResWk'				=> $this->post('ResWk'),
					'NoSppbk'			=> $this->post('NoSppbk'),
					'TgSppbk'			=> $this->post('TgSppbk'),
					'BkAwal'			=> $this->post('BkAwal'),
					'BkTetap'			=> $this->post('BkTetap'),
					'BkSelisih'			=> $this->post('BkSelisih'),
					'SanksiTetap'		=> $this->post('SanksiTetap'),
					'SanksiSelisih'		=> $this->post('SanksiSelisih')
					);
					
		 $insert = $this->db->insert('temp_ressppbk', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}