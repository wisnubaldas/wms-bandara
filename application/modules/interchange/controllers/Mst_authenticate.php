<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Mst_authenticate extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $DefaultHost = $this->get('DefaultHost');
        if ($DefaultHost == '') {
			$data = $this->db->get('mst_authenticate')->result();            
        } else {
            $this->db->where('DefaultHost', $DefaultHost);
            $data = $this->db->get('mst_authenticate')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$DefaultHost = $this->put('DefaultHost');
        $data = array(	
					'DefaultHost'		=> $this->put('DefaultHost'),
					'AirlineCode'		=> $this->put('AirlineCode'),
					'Priority'			=> $this->put('Priority'),
					'DoubleSig'			=> $this->put('DoubleSig'),
					'EmailSender'		=> $this->put('EmailSender'),
					'EmailSending'		=> $this->put('EmailSending'),
					'SITASender'		=> $this->put('SITASender'),
					'SitaSending'		=> $this->put('SitaSending'),
					'Activation'		=> $this->put('Activation'),
					'DirectoryEkspor'	=> $this->put('DirectoryEkspor'),
					'DirectoryImport'	=> $this->put('DirectoryImport'),
					'EmployeeNumber'	=> $this->put('EmployeeNumber'),
					'DateEntry'			=> $this->put('DateEntry'),
					'TimeEntry'			=> $this->put('TimeEntry')
					);
					
		$this->db->where('DefaultHost', $DefaultHost);
        $update = $this->db->update('mst_authenticate', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'DefaultHost'		=> $this->post('DefaultHost'),
					'AirlineCode'		=> $this->post('AirlineCode'),
					'Priority'			=> $this->post('Priority'),
					'DoubleSig'			=> $this->post('DoubleSig'),
					'EmailSender'		=> $this->post('EmailSender'),
					'EmailSending'		=> $this->post('EmailSending'),
					'SITASender'		=> $this->post('SITASender'),
					'SitaSending'		=> $this->post('SitaSending'),
					'Activation'		=> $this->post('Activation'),
					'DirectoryEkspor'	=> $this->post('DirectoryEkspor'),
					'DirectoryImport'	=> $this->post('DirectoryImport'),
					'EmployeeNumber'	=> $this->post('EmployeeNumber'),
					'DateEntry'			=> $this->post('DateEntry'),
					'TimeEntry'			=> $this->post('TimeEntry')
					);
					
		 $insert = $this->db->insert('mst_authenticate', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}