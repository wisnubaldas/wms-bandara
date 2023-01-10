<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Out_weighinghandling extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('rdwarehouse_jkt', TRUE);
	}
	
	function index_get() {
        $noid = $this->get('_id');
        if ($_id == '') {
			$data = $this->db->get('out_weighinghandling')->result();            
        } else {
            $this->db->where('_id', $_id);
            $data = $this->db->get('out_weighinghandling')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$_id = $this->PUT('_id');
        $data = array(	
					'id_header'			=> $this->PUT('id_header'),
					'ProofNumber'		=> $this->PUT('ProofNumber'),
					'MasterAWB'			=> $this->PUT('MasterAWB'),
					'HostAWB'			=> $this->PUT('HostAWB'),
					'SpecialHandling1'	=> $this->PUT('SpecialHandling1'),
					'SpecialHandling2'	=> $this->PUT('SpecialHandling2'),
					'token'				=> $this->PUT('token'),
					'_id'				=> $this->PUT('_id')
					);
		$this->db->where('_id', $_id);
        $update = $this->db->update('out_weighinghandling', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'MasterAWB'			=> $this->post('MasterAWB'),
					'HostAWB'			=> $this->post('HostAWB'),
					'SpecialHandling1'	=> $this->post('SpecialHandling1'),
					'SpecialHandling2'	=> $this->post('SpecialHandling2'),
					'token'				=> $this->post('token')
					);
					
		 $insert = $this->db->insert('out_weighinghandling', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}