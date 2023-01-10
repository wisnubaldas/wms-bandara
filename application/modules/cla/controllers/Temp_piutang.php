<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Temp_piutang extends REST_Controller {
	
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
					'No_Invoice'		=> $this->post('No_Invoice'),	
					'No_MAWB'			=> $this->post('No_MAWB'),	
					'no_hawb'			=> $this->post('no_hawb'),	
					'dest'				=> $this->post('dest'),	
					'kd_airlines'		=> $this->post('kd_airlines'),	
					'nama_airlines'		=> $this->post('nama_airlines'),	
					'Type_Receipt'		=> $this->post('Type_Receipt'),	
					'nama_agent'		=> $this->post('nama_agent'),	
					'nama_shipper'		=> $this->post('nama_shipper'),	
					'colly'				=> $this->post('colly'),	
					'Weight_rate'		=> $this->post('Weight_rate'),	
					'rate_grossup'		=> $this->post('rate_grossup'),	
					'sales'				=> $this->post('sales'),	
					'discount'			=> $this->post('discount'),	
					'refund'			=> $this->post('refund'),	
					'dpp'				=> $this->post('dpp'),	
					'ppn'				=> $this->post('ppn'),	
					'meterai_total'		=> $this->post('meterai_total'),	
					'user_avsec'		=> $this->post('user_avsec'),	
					'tgl_faktur'		=> $this->post('tgl_faktur'),	
					'no_faktur'			=> $this->post('no_faktur'),	
					'tgl_bayar'			=> $this->post('tgl_bayar'),	
					'no_ar'				=> $this->post('no_ar'),	
					'payment'			=> $this->post('payment'),	
					'balance'			=> $this->post('balance'),	
					'1_14'				=> $this->post('1_14'),	
					'15_30'				=> $this->post('15_30'),	
					'31_45'				=> $this->post('31_45'),	
					'46_60'				=> $this->post('46_60'),	
					'61_75'				=> $this->post('61_75'),	
					'76_90'				=> $this->post('76_90'),	
					'besar_90'			=> $this->post('besar_90'),
					'_created_by'		=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('temp_piutang', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}