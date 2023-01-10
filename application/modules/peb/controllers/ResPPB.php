<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class ResPPB extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	ResTg	ResWk	NoPPB	TgPPB	AlmtSiap	TgSiap	KdktrPriks	JmKemas	JnKemas	JmCont	Gudang	NoPhone	NoFax	Petugas	TgStuff	AlmtStuff	NipPPB	NmPPB	Kota	JabPPB	LokBrg
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_resppb')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_resppb')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'			=> $this->put('CAR'),
					'ResTg'			=> $this->put('ResTg'),
					'ResWk'			=> $this->put('ResWk'),
					'NoPPB'			=> $this->put('NoPPB'),
					'TgPPB'			=> $this->put('TgPPB'),
					'AlmtSiap'		=> $this->put('AlmtSiap'),
					'TgSiap'		=> $this->put('TgSiap'),
					'KdktrPriks'	=> $this->put('KdktrPriks'),
					'JmKemas'		=> $this->put('JmKemas'),
					'JnKemas'		=> $this->put('JnKemas'),
					'JmCont'		=> $this->put('JmCont'),
					'Gudang'		=> $this->put('Gudang'),
					'NoPhone'		=> $this->put('NoPhone'),
					'NoFax'			=> $this->put('NoFax'),
					'Petugas'		=> $this->put('Petugas'),
					'TgStuff'		=> $this->put('TgStuff'),
					'AlmtStuff'		=> $this->put('AlmtStuff'),
					'NipPPB'		=> $this->put('NipPPB'),
					'NmPPB'			=> $this->put('NmPPB'),
					'Kota'			=> $this->put('Kota'),
					'JabPPB'		=> $this->put('JabPPB'),
					'LokBrg'		=> $this->put('LokBrg')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_resppb', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'			=> $this->post('CAR'),
					'ResTg'			=> $this->post('ResTg'),
					'ResWk'			=> $this->post('ResWk'),
					'NoPPB'			=> $this->post('NoPPB'),
					'TgPPB'			=> $this->post('TgPPB'),
					'AlmtSiap'		=> $this->post('AlmtSiap'),
					'TgSiap'		=> $this->post('TgSiap'),
					'KdktrPriks'	=> $this->post('KdktrPriks'),
					'JmKemas'		=> $this->post('JmKemas'),
					'JnKemas'		=> $this->post('JnKemas'),
					'JmCont'		=> $this->post('JmCont'),
					'Gudang'		=> $this->post('Gudang'),
					'NoPhone'		=> $this->post('NoPhone'),
					'NoFax'			=> $this->post('NoFax'),
					'Petugas'		=> $this->post('Petugas'),
					'TgStuff'		=> $this->post('TgStuff'),
					'AlmtStuff'		=> $this->post('AlmtStuff'),
					'NipPPB'		=> $this->post('NipPPB'),
					'NmPPB'			=> $this->post('NmPPB'),
					'Kota'			=> $this->post('Kota'),
					'JabPPB'		=> $this->post('JabPPB'),
					'LokBrg'		=> $this->post('LokBrg')
					);
					
		 $insert = $this->db->insert('temp_resppb', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}