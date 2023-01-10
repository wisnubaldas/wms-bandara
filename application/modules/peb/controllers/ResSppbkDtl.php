<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class ResSppbkDtl extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	Car	ResTg	ResWk	seri	UrBrgAwal	UrBrgTetap	SatBrgAwal	SatBrgtetap	JmSatAwal	JmSatTetap	JmSatSelisih	HSAwal	HSTetap	BKAwal	BKTetap	BKSelisih	HEAwal	HETetap	HESelisih	KursAwal	KursTetap	DendaTetap	Alasan	KdValTetap	DendaSelisih	KdValAwal	TarifBKAwal	TarifBKTetap
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_ressppbkdtl')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_ressppbkdtl')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'				=> $this->put('CAR'),
					'ResTg'				=> $this->put('ResTg'),
					'ResWk'				=> $this->put('ResWk'),
					'seri'				=> $this->put('seri'),
					'UrBrgAwal'			=> $this->put('UrBrgAwal'),
					'UrBrgTetap'		=> $this->put('UrBrgTetap'),
					'SatBrgAwal'		=> $this->put('SatBrgAwal'),
					'SatBrgtetap'		=> $this->put('SatBrgtetap'),
					'JmSatAwal'			=> $this->put('JmSatAwal'),
					'JmSatTetap'		=> $this->put('JmSatTetap'),
					'JmSatSelisih'		=> $this->put('JmSatSelisih'),
					'HSAwal'			=> $this->put('HSAwal'),
					'HSTetap'			=> $this->put('HSTetap'),
					'BKAwal'			=> $this->put('BKAwal'),
					'BKTetap'			=> $this->put('BKTetap'),
					'BKSelisih'			=> $this->put('BKSelisih'),
					'HEAwal'			=> $this->put('HEAwal'),
					'HETetap'			=> $this->put('HETetap'),
					'HESelisih'			=> $this->put('HESelisih'),
					'KursAwal'			=> $this->put('KursAwal'),
					'KursTetap'			=> $this->put('KursTetap'),
					'DendaTetap'		=> $this->put('DendaTetap'),
					'Alasan'			=> $this->put('Alasan'),
					'KdValTetap'		=> $this->put('KdValTetap'),
					'DendaSelisih'		=> $this->put('DendaSelisih'),
					'KdValAwal'			=> $this->put('KdValAwal'),
					'TarifBKAwal'		=> $this->put('TarifBKAwal'),
					'TarifBKTetap'		=> $this->put('TarifBKTetap')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_ressppbkdtl', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'				=> $this->post('CAR'),
					'ResTg'				=> $this->post('ResTg'),
					'ResWk'				=> $this->post('ResWk'),
					'seri'				=> $this->post('seri'),
					'UrBrgAwal'			=> $this->post('UrBrgAwal'),
					'UrBrgTetap'		=> $this->post('UrBrgTetap'),
					'SatBrgAwal'		=> $this->post('SatBrgAwal'),
					'SatBrgtetap'		=> $this->post('SatBrgtetap'),
					'JmSatAwal'			=> $this->post('JmSatAwal'),
					'JmSatTetap'		=> $this->post('JmSatTetap'),
					'JmSatSelisih'		=> $this->post('JmSatSelisih'),
					'HSAwal'			=> $this->post('HSAwal'),
					'HSTetap'			=> $this->post('HSTetap'),
					'BKAwal'			=> $this->post('BKAwal'),
					'BKTetap'			=> $this->post('BKTetap'),
					'BKSelisih'			=> $this->post('BKSelisih'),
					'HEAwal'			=> $this->post('HEAwal'),
					'HETetap'			=> $this->post('HETetap'),
					'HESelisih'			=> $this->post('HESelisih'),
					'KursAwal'			=> $this->post('KursAwal'),
					'KursTetap'			=> $this->post('KursTetap'),
					'DendaTetap'		=> $this->post('DendaTetap'),
					'Alasan'			=> $this->post('Alasan'),
					'KdValTetap'		=> $this->post('KdValTetap'),
					'DendaSelisih'		=> $this->post('DendaSelisih'),
					'KdValAwal'			=> $this->post('KdValAwal'),
					'TarifBKAwal'		=> $this->post('TarifBKAwal'),
					'TarifBKTetap'		=> $this->post('TarifBKTetap')
					);
					
		 $insert = $this->db->insert('temp_ressppbkdtl', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}