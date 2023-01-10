<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class PKB extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	Fasilitas	Gudang	NoPhone	NoFax	AlmtSiap	JmCont20	JmCont40	Petugas	TgStuff	AlmtStuff	Stuff	JnPartOf	Kwbc	Kpker	InstFas	KdktrFas	FasBC	Lengkap	JnBrgGab
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('PKB')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('PKB')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'				=> $this->put('CAR'),
					'Fasilitas'			=> $this->put('Fasilitas'),
					'Gudang'			=> $this->put('Gudang'),
					'NoPhone'			=> $this->put('NoPhone'),
					'NoFax'				=> $this->put('NoFax'),
					'AlmtSiap'			=> $this->put('AlmtSiap'),
					'JmCont20'			=> $this->put('JmCont20'),
					'JmCont40'			=> $this->put('JmCont40'),
					'Petugas'			=> $this->put('Petugas'),
					'TgStuff'			=> $this->put('TgStuff'),
					'AlmtStuff'			=> $this->put('AlmtStuff'),
					'Stuff'				=> $this->put('Stuff'),
					'JnPartOf'			=> $this->put('JnPartOf'),
					'Kwbc'				=> $this->put('Kwbc'),
					'Kpker'				=> $this->put('Kpker'),
					'InstFas'			=> $this->put('InstFas'),
					'KdktrFas'			=> $this->put('KdktrFas'),
					'FasBC'				=> $this->put('FasBC'),
					'Lengkap'			=> $this->put('Lengkap'),
					'JnBrgGab'			=> $this->put('JnBrgGab')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('PKB', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'				=> $this->post('CAR'),
					'Fasilitas'			=> $this->post('Fasilitas'),
					'Gudang'			=> $this->post('Gudang'),
					'NoPhone'			=> $this->post('NoPhone'),
					'NoFax'				=> $this->post('NoFax'),
					'AlmtSiap'			=> $this->post('AlmtSiap'),
					'JmCont20'			=> $this->post('JmCont20'),
					'JmCont40'			=> $this->post('JmCont40'),
					'Petugas'			=> $this->post('Petugas'),
					'TgStuff'			=> $this->post('TgStuff'),
					'AlmtStuff'			=> $this->post('AlmtStuff'),
					'Stuff'				=> $this->post('Stuff'),
					'JnPartOf'			=> $this->post('JnPartOf'),
					'Kwbc'				=> $this->post('Kwbc'),
					'Kpker'				=> $this->post('Kpker'),
					'InstFas'			=> $this->post('InstFas'),
					'KdktrFas'			=> $this->post('KdktrFas'),
					'FasBC'				=> $this->post('FasBC'),
					'Lengkap'			=> $this->post('Lengkap'),
					'JnBrgGab'			=> $this->post('JnBrgGab')
					);
					
		 $insert = $this->db->insert('PKB', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}