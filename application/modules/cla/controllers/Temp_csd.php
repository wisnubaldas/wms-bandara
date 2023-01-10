<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Temp_csd extends REST_Controller {
	
	private $db6;
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db6 = $this->load->database('dbmscargo', TRUE);
	}
	
	function index_post() {		
        $data = array(		
					'tgl_invoice'		=> $this->post('tgl_invoice'),
					'waktu_time'		=> $this->post('waktu_time'),
					'no_invoice'		=> $this->post('no_invoice'),
					'no_csd'			=> $this->post('no_csd'),
					'no_mawb'			=> $this->post('no_mawb'),
					'no_host'			=> $this->post('no_host'),
					'dest'				=> $this->post('dest'),
					'kd_airline'		=> $this->post('kd_airline'),
					'nama_airline'		=> $this->post('nama_airline'),
					'type_receipt'		=> $this->post('type_receipt'),
					'pieces'			=> $this->post('pieces'),
					'gross'				=> $this->post('gross'),
					'weight_invoice'	=> $this->post('weight_invoice'),
					'weight_csd'		=> $this->post('weight_csd'),
					'selisih'			=> $this->post('selisih'),
					'natureofgood'		=> $this->post('natureofgood'),
					'nama_shipper'		=> $this->post('nama_shipper'),
					'nama_agent'		=> $this->post('nama_agent'),
					'user_aceptance'	=> $this->post('user_aceptance'),
					'user_kasir'		=> $this->post('user_kasir'),
					'_created_by'		=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('temp_csd', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}