<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class PebGab extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	SeriEks	JnPEBG	JnEksG	IdeksG	NpwpEksG	NamaEksG	AlmtEksG	NiperG	KdValG	FOBG	JmBrgG	NoLpseG	TgLpseG	InstFasG	KdktrFasG	FasBCG	KpkerG	FasilitasG	KwbcG	GabOK
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_PebGab')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_PebGab')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'				=> $this->put('CAR'),
					'SeriEks'			=> $this->put('SeriEks'),
					'JnPEBG'			=> $this->put('JnPEBG'),
					'JnEksG'			=> $this->put('JnEksG'),
					'IdeksG'			=> $this->put('IdeksG'),
					'NpwpEksG'			=> $this->put('NpwpEksG'),
					'NamaEksG'			=> $this->put('NamaEksG'),
					'AlmtEksG'			=> $this->put('AlmtEksG'),
					'NiperG'			=> $this->put('NiperG'),
					'KdValG'			=> $this->put('KdValG'),
					'FOBG'				=> $this->put('FOBG'),
					'JmBrgG'			=> $this->put('JmBrgG'),
					'NoLpseG'			=> $this->put('NoLpseG'),
					'TgLpseG'			=> $this->put('TgLpseG'),
					'InstFasG'			=> $this->put('InstFasG'),
					'KdktrFasG'			=> $this->put('KdktrFasG'),
					'FasBCG'			=> $this->put('FasBCG'),
					'KpkerG'			=> $this->put('KpkerG'),
					'FasilitasG'		=> $this->put('FasilitasG'),
					'KwbcG'				=> $this->put('KwbcG'),
					'GabOK'				=> $this->put('GabOK')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_PebGab', $data);
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
					'JnPEBG'			=> $this->post('JnPEBG'),
					'JnEksG'			=> $this->post('JnEksG'),
					'IdeksG'			=> $this->post('IdeksG'),
					'NpwpEksG'			=> $this->post('NpwpEksG'),
					'NamaEksG'			=> $this->post('NamaEksG'),
					'AlmtEksG'			=> $this->post('AlmtEksG'),
					'NiperG'			=> $this->post('NiperG'),
					'KdValG'			=> $this->post('KdValG'),
					'FOBG'				=> $this->post('FOBG'),
					'JmBrgG'			=> $this->post('JmBrgG'),
					'NoLpseG'			=> $this->post('NoLpseG'),
					'TgLpseG'			=> $this->post('TgLpseG'),
					'InstFasG'			=> $this->post('InstFasG'),
					'KdktrFasG'			=> $this->post('KdktrFasG'),
					'FasBCG'			=> $this->post('FasBCG'),
					'KpkerG'			=> $this->post('KpkerG'),
					'FasilitasG'		=> $this->post('FasilitasG'),
					'KwbcG'				=> $this->post('KwbcG'),
					'GabOK'				=> $this->post('GabOK')
					);
					
		 $insert = $this->db->insert('temp_PebGab', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}