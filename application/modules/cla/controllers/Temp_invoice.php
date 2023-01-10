<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Temp_invoice extends REST_Controller {
	
	private $db6;
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db6 = $this->load->database('dbmscargo', TRUE);
	}
	
	function index_post() {		
        $data = array(		
					'Tgl_Invoice'	=> $this->post('Tgl_Invoice'),					
					'No_Invoice'	=> $this->post('No_Invoice'),					
					'tgl_faktur'	=> $this->post('tgl_faktur'),					
					'no_faktur'		=> $this->post('no_faktur'),					
					'nama_pkp'		=> $this->post('nama_pkp'),					
					'no_csd'		=> $this->post('no_csd'),					
					'no_mawb'		=> $this->post('no_mawb'),					
					'no_hawb'		=> $this->post('no_hawb'),					
					'kd_airlines'	=> $this->post('kd_airlines'),					
					'type_receipt'	=> $this->post('type_receipt'),					
					'dest'			=> $this->post('dest'),					
					'nama_Agent'	=> $this->post('nama_Agent'),					
					'nama_shipper'	=> $this->post('nama_shipper'),					
					'colly'			=> $this->post('colly'),					
					'weight_rate'	=> $this->post('weight_rate'),					
					'rate_grossup'	=> $this->post('rate_grossup'),					
					'dpp'			=> $this->post('dpp'),					
					'ppn'			=> $this->post('ppn'),					
					'total'			=> $this->post('total'),					
					'user_kasir'	=> $this->post('user_kasir'),
					'_created_by'	=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('temp_invoice', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}