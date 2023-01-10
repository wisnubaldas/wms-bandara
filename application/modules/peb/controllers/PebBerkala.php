<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class PebBerkala extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	SeriBrg	NoDaftInvK	TgDaftInvK	NoInvK	TgInvK	NamaBeliK	AlmtBeliK	NegBeliK	TgEksK	ModaK	CarrierK	VoyK	BenderaK	NegTujuK	BerkalaOk
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_PebBerkala')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_PebBerkala')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'			=> $this->put('CAR'),
					'SeriBrg'		=> $this->put('SeriBrg'),
					'NoDaftInvK'	=> $this->put('NoDaftInvK'),
					'TgDaftInvK'	=> $this->put('TgDaftInvK'),
					'NoInvK'		=> $this->put('NoInvK'),
					'TgInvK'		=> $this->put('TgInvK'),
					'NamaBeliK'		=> $this->put('NamaBeliK'),
					'AlmtBeliK'		=> $this->put('AlmtBeliK'),
					'NegBeliK'		=> $this->put('NegBeliK'),
					'TgEksK'		=> $this->put('TgEksK'),
					'ModaK'			=> $this->put('ModaK'),
					'CarrierK'		=> $this->put('CarrierK'),
					'VoyK'			=> $this->put('VoyK'),
					'BenderaK'		=> $this->put('BenderaK'),
					'NegTujuK'		=> $this->put('NegTujuK'),
					'BerkalaOk'		=> $this->put('BerkalaOk')
					);
		$this->db->where('id', $id);
        $update = $this->db->update('temp_PebBerkala', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'CAR'			=> $this->post('CAR'),
					'SeriBrg'		=> $this->post('SeriBrg'),
					'NoDaftInvK'	=> $this->post('NoDaftInvK'),
					'TgDaftInvK'	=> $this->post('TgDaftInvK'),
					'NoInvK'		=> $this->post('NoInvK'),
					'TgInvK'		=> $this->post('TgInvK'),
					'NamaBeliK'		=> $this->post('NamaBeliK'),
					'AlmtBeliK'		=> $this->post('AlmtBeliK'),
					'NegBeliK'		=> $this->post('NegBeliK'),
					'TgEksK'		=> $this->post('TgEksK'),
					'ModaK'			=> $this->post('ModaK'),
					'CarrierK'		=> $this->post('CarrierK'),
					'VoyK'			=> $this->post('VoyK'),
					'BenderaK'		=> $this->post('BenderaK'),
					'NegTujuK'		=> $this->post('NegTujuK'),
					'BerkalaOk'		=> $this->post('BerkalaOk')
					);
					
		 $insert = $this->db->insert('temp_PebBerkala', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}