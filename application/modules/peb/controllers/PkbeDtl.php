<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class pkbedtl extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	Car	SeriCont	SeriPe	KdktrPeb	NoPeb	TgPeb	JnEks	NoPE	TgPE	dtlok	Keterangan	JnDokEkspor	JnDok	ExMerah	KatEks
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('pkbedtl')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('PkbeDtl')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'				=> $this->put('CAR'),
					'SeriCont'			=> $this->put('SeriCont'),
					'SeriPe'			=> $this->put('SeriPe'),
					'KdktrPeb'			=> $this->put('KdktrPeb'),
					'NoPeb'				=> $this->put('NoPeb'),
					'TgPeb'				=> $this->put('TgPeb'),	
					'JnEks'				=> $this->put('JnEks'),
					'NoPE'				=> $this->put('NoPE'),
					'TgPE'				=> $this->put('TgPE'),
					'dtlok'				=> $this->put('dtlok'),					
					'Keterangan'		=> $this->put('Keterangan'),
					'JnDokEkspor'		=> $this->put('JnDokEkspor'),
					'JnDok'				=> $this->put('JnDok'),
					'ExMerah'			=> $this->put('ExMerah'),
					'KatEks'			=> $this->put('KatEks')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('PkbeDtl', $data);
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
					'SeriPe'			=> $this->post('SeriPe'),
					'KdktrPeb'			=> $this->post('KdktrPeb'),
					'NoPeb'				=> $this->post('NoPeb'),
					'TgPeb'				=> $this->post('TgPeb'),	
					'JnEks'				=> $this->post('JnEks'),
					'NoPE'				=> $this->post('NoPE'),
					'TgPE'				=> $this->post('TgPE'),
					'dtlok'				=> $this->post('dtlok'),					
					'Keterangan'		=> $this->post('Keterangan'),
					'JnDokEkspor'		=> $this->post('JnDokEkspor'),
					'JnDok'				=> $this->post('JnDok'),
					'ExMerah'			=> $this->post('ExMerah'),
					'KatEks'			=> $this->post('KatEks')
					);
					
		 $insert = $this->db->insert('PkbeDtl', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}