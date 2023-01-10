<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Temp_Sales extends REST_Controller {
	
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
					'Tgl_faktur'	=> $this->post('Tgl_faktur'),					
					'No_faktur'		=> $this->post('No_faktur'),					
					'No_mawb'		=> $this->post('No_mawb'),					
					'No_hawb'		=> $this->post('No_hawb'),					
					'kd_Airlines'	=> $this->post('kd_Airlines'),					
					'TypeReceipt'	=> $this->post('TypeReceipt'),					
					'Dest'			=> $this->post('Dest'),					
					'Nama_Agent'	=> $this->post('Nama_Agent'),					
					'Nama_Shipper'	=> $this->post('Nama_Shipper'),					
					'Colly'			=> $this->post('Colly'),					
					'weight_Rate'	=> $this->post('weight_Rate'),					
					'Rate_gross'	=> $this->post('Rate_gross'),					
					'Sales'			=> $this->post('Sales'),					
					'Discount'		=> $this->post('Discount'),					
					'Refund'		=> $this->post('Refund'),					
					'NetSales'		=> $this->post('NetSales'),					
					'Dpp'			=> $this->post('Dpp'),					
					'PPN'			=> $this->post('PPN'),					
					'Materai_total'	=> $this->post('Materai_total'),					
					'User_avsec'	=> $this->post('User_avsec'),
					'_created_by'	=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('temp_Sales', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}