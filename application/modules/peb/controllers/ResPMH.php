<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class ResPMH extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	ResTg	resWk	LokKtr	NoPM	TgPM	JnEks	Moda	Carrier	Voy	KdktrPriks	Merk	JmCont	NipTtdPM	NmTtdPM	Gudang	KtrGate	TgEks	PelTransit	PelMuat	PelBongkar	Bruto	LokBrg	KatEkspor
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_respmh')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_respmh')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'			=> $this->put('CAR'),
					'ResTg'			=> $this->put('ResTg'),
					'resWk'			=> $this->put('resWk'),
					'LokKtr'		=> $this->put('LokKtr'),
					'NoPM'			=> $this->put('NoPM'),
					'TgPM'			=> $this->put('TgPM'),
					'JnEks'			=> $this->put('JnEks'),
					'Moda'			=> $this->put('Moda'),
					'Carrier'		=> $this->put('Carrier'),
					'Voy'			=> $this->put('Voy'),
					'KdktrPriks'	=> $this->put('KdktrPriks'),
					'Merk'			=> $this->put('Merk'),
					'JmCont'		=> $this->put('JmCont'),
					'NipTtdPM'		=> $this->put('NipTtdPM'),
					'NmTtdPM'		=> $this->put('NmTtdPM'),
					'Gudang'		=> $this->put('Gudang'),
					'KtrGate'		=> $this->put('KtrGate'),
					'TgEks'			=> $this->put('TgEks'),
					'PelTransit'	=> $this->put('PelTransit'),
					'PelMuat'		=> $this->put('PelMuat'),
					'PelBongkar'	=> $this->put('PelBongkar'),
					'Bruto'			=> $this->put('Bruto'),
					'LokBrg'		=> $this->put('LokBrg'),
					'KatEkspor'		=> $this->put('KatEkspor')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_respmh', $data);
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
					'resWk'			=> $this->post('resWk'),
					'LokKtr'		=> $this->post('LokKtr'),
					'NoPM'			=> $this->post('NoPM'),
					'TgPM'			=> $this->post('TgPM'),
					'JnEks'			=> $this->post('JnEks'),
					'Moda'			=> $this->post('Moda'),
					'Carrier'		=> $this->post('Carrier'),
					'Voy'			=> $this->post('Voy'),
					'KdktrPriks'	=> $this->post('KdktrPriks'),
					'Merk'			=> $this->post('Merk'),
					'JmCont'		=> $this->post('JmCont'),
					'NipTtdPM'		=> $this->post('NipTtdPM'),
					'NmTtdPM'		=> $this->post('NmTtdPM'),
					'Gudang'		=> $this->post('Gudang'),
					'KtrGate'		=> $this->post('KtrGate'),
					'TgEks'			=> $this->post('TgEks'),
					'PelTransit'	=> $this->post('PelTransit'),
					'PelMuat'		=> $this->post('PelMuat'),
					'PelBongkar'	=> $this->post('PelBongkar'),
					'Bruto'			=> $this->post('Bruto'),
					'LokBrg'		=> $this->post('LokBrg'),
					'KatEkspor'		=> $this->post('KatEkspor')
					);
					
		 $insert = $this->db->insert('temp_respmh', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}