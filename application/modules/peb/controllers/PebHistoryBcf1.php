<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class PebHistoryBcf1 extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	JnEks	NpwpEks	NamaEks	KdVal	KdHrg	Nilinv	Fob	Bruto	Netto	JmBrg	JmBrgGab	TgEks	NegTuju	Carrier	Tg	Wk
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_PebHistoryBcf1')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_PebHistoryBcf1')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'			=> $this->put('CAR'),
					'JnEks'			=> $this->put('JnEks'),
					'NpwpEks'		=> $this->put('NpwpEks'),
					'NamaEks'		=> $this->put('NamaEks'),
					'KdVal'			=> $this->put('KdVal'),
					'KdHrg'			=> $this->put('KdHrg'),
					'Nilinv'		=> $this->put('Nilinv'),
					'Fob'			=> $this->put('Fob'),
					'Bruto'			=> $this->put('Bruto'),
					'Netto'			=> $this->put('Netto'),
					'JmBrg'			=> $this->put('JmBrg'),
					'JmBrgGab'		=> $this->put('JmBrgGab'),
					'TgEks'			=> $this->put('TgEks'),
					'NegTuju'		=> $this->put('NegTuju'),
					'Carrier'		=> $this->put('Carrier'),
					'Tg'			=> $this->put('Tg'),
					'Wk'			=> $this->put('Wk')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_PebHistoryBcf1', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'			=> $this->post('CAR'),
					'JnEks'			=> $this->post('JnEks'),
					'NpwpEks'		=> $this->post('NpwpEks'),
					'NamaEks'		=> $this->post('NamaEks'),
					'KdVal'			=> $this->post('KdVal'),
					'KdHrg'			=> $this->post('KdHrg'),
					'Nilinv'		=> $this->post('Nilinv'),
					'Fob'			=> $this->post('Fob'),
					'Bruto'			=> $this->post('Bruto'),
					'Netto'			=> $this->post('Netto'),
					'JmBrg'			=> $this->post('JmBrg'),
					'JmBrgGab'		=> $this->post('JmBrgGab'),
					'TgEks'			=> $this->post('TgEks'),
					'NegTuju'		=> $this->post('NegTuju'),
					'Carrier'		=> $this->post('Carrier'),
					'Tg'			=> $this->post('Tg'),
					'Wk'			=> $this->post('Wk')
					);
					
		 $insert = $this->db->insert('temp_PebHistoryBcf1', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}