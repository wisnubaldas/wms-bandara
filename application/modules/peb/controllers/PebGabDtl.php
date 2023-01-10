<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class PebGabDtl extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	SeriEks	SeriBrgG	HsG	UrBrgG	DMerkG	SizeG	TypeG	KdBrgG	JnSatuanG	JmSatuanG	NetDetG	FOBPerSatG	FOBPerBrgG	ExSeriBrgG	JmKoliG	JnKoliG	DtlGOk
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_PebGabDtl')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_PebGabDtl')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'				=> $this->put('CAR'),
					'SeriEks'			=> $this->put('SeriEks'),
					'SeriBrgG'			=> $this->put('SeriBrgG'),
					'HsG'				=> $this->put('HsG'),
					'UrBrgG'			=> $this->put('UrBrgG'),
					'DMerkG'			=> $this->put('DMerkG'),
					'SizeG'				=> $this->put('SizeG'),
					'TypeG'				=> $this->put('TypeG'),
					'KdBrgG'			=> $this->put('KdBrgG'),
					'JnSatuanG'			=> $this->put('JnSatuanG'),
					'JmSatuanG'			=> $this->put('JmSatuanG'),
					'NetDetG'			=> $this->put('NetDetG'),
					'FOBPerSatG'		=> $this->put('FOBPerSatG'),
					'FOBPerBrgG'		=> $this->put('FOBPerBrgG'),
					'ExSeriBrgG'		=> $this->put('ExSeriBrgG'),
					'JmKoliG'			=> $this->put('JmKoliG'),
					'JnKoliG'			=> $this->put('JnKoliG')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_PebGabDtl', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'				=> $this->post('CAR'),
					'SeriEks'			=> $this->post('SeriEks'),
					'SeriBrgG'			=> $this->post('SeriBrgG'),
					'HsG'				=> $this->post('HsG'),
					'UrBrgG'			=> $this->post('UrBrgG'),
					'DMerkG'			=> $this->post('DMerkG'),
					'SizeG'				=> $this->post('SizeG'),
					'TypeG'				=> $this->post('TypeG'),
					'KdBrgG'			=> $this->post('KdBrgG'),
					'JnSatuanG'			=> $this->post('JnSatuanG'),
					'JmSatuanG'			=> $this->post('JmSatuanG'),
					'NetDetG'			=> $this->post('NetDetG'),
					'FOBPerSatG'		=> $this->post('FOBPerSatG'),
					'FOBPerBrgG'		=> $this->post('FOBPerBrgG'),
					'ExSeriBrgG'		=> $this->post('ExSeriBrgG'),
					'JmKoliG'			=> $this->post('JmKoliG'),
					'JnKoliG'			=> $this->post('JnKoliG')
					);
					
		 $insert = $this->db->insert('temp_PebGabDtl', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}