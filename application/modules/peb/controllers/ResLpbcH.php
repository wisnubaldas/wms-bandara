<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class ResLpbcH extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	ResTg	ResWk	NOLPSE	TGLPSE	IdQq	NpwpQq	NamaQq	AlmtQq	NamaBeli	AlmtBeli	NegBeli	PELMUAT	PELBONGKAR	NOINV	TGINV	KdVal	Merk	JmBrg	JabLpse	TtdLpse	NipTtdLpse	NoProEks	TgProEks	Fasilitas	AlmtSiap	TgSiap	NoPL	TgPL	KdktrPriks	FobR	JmKemasR	JnKemasR	JmContR	JmCont20R	JmCont40R	BrutoR	NettoR	WkRekPM	InstFas	FasBc	KdktrFas	DiAmmend
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_reslpbch')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_reslpbch')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'				=> $this->put('CAR'),
					'ResTg'				=> $this->put('ResTg'),
					'ResWk'				=> $this->put('ResWk'),
					'NOLPSE'			=> $this->put('NOLPSE'),
					'TGLPSE'			=> $this->put('TGLPSE'),
					'IdQq'				=> $this->put('IdQq'),
					'NpwpQq'			=> $this->put('NpwpQq'),
					'NamaQq'			=> $this->put('NamaQq'),
					'AlmtQq'			=> $this->put('AlmtQq'),
					'NamaBeli'			=> $this->put('NamaBeli'),
					'AlmtBeli'			=> $this->put('AlmtBeli'),
					'NegBeli'			=> $this->put('NegBeli'),
					'PELMUAT'			=> $this->put('PELMUAT'),
					'PELBONGKAR'		=> $this->put('PELBONGKAR'),
					'NOINV'				=> $this->put('NOINV'),
					'TGINV'				=> $this->put('TGINV'),
					'KdVal'				=> $this->put('KdVal'),
					'Merk'				=> $this->put('Merk'),
					'JmBrg'				=> $this->put('JmBrg'),
					'JabLpse'			=> $this->put('JabLpse'),
					'TtdLpse'			=> $this->put('TtdLpse'),
					'NipTtdLpse'		=> $this->put('NipTtdLpse'),
					'NoProEks'			=> $this->put('NoProEks'),
					'TgProEks'			=> $this->put('TgProEks'),
					'Fasilitas'			=> $this->put('Fasilitas'),
					'AlmtSiap'			=> $this->put('AlmtSiap'),
					'TgSiap'			=> $this->put('TgSiap'),
					'NoPL'				=> $this->put('NoPL'),
					'TgPL'				=> $this->put('TgPL'),
					'KdktrPriks'		=> $this->put('FobR'),
					'FobR'				=> $this->put('FobR'),
					'JmKemasR'			=> $this->put('JmKemasR'),
					'JnKemasR'			=> $this->put('JnKemasR'),
					'JmContR'			=> $this->put('JmContR'),
					'JmCont20R'			=> $this->put('JmCont20R'),
					'JmCont40R'			=> $this->put('JmCont40R'),
					'BrutoR'			=> $this->put('BrutoR'),
					'NettoR'			=> $this->put('NettoR'),
					'WkRekPM'			=> $this->put('WkRekPM'),
					'InstFas'			=> $this->put('InstFas'),
					'FasBc'				=> $this->put('FasBc'),
					'KdktrFas'			=> $this->put('KdktrFas'),
					'DiAmmend'			=> $this->put('DiAmmend')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_reslpbch', $data);
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
					'NOLPSE'			=> $this->post('NOLPSE'),
					'TGLPSE'			=> $this->post('TGLPSE'),
					'IdQq'				=> $this->post('IdQq'),
					'NpwpQq'			=> $this->post('NpwpQq'),
					'NamaQq'			=> $this->post('NamaQq'),
					'AlmtQq'			=> $this->post('AlmtQq'),
					'NamaBeli'			=> $this->post('NamaBeli'),
					'AlmtBeli'			=> $this->post('AlmtBeli'),
					'NegBeli'			=> $this->post('NegBeli'),
					'PELMUAT'			=> $this->post('PELMUAT'),
					'PELBONGKAR'		=> $this->post('PELBONGKAR'),
					'NOINV'				=> $this->post('NOINV'),
					'TGINV'				=> $this->post('TGINV'),
					'KdVal'				=> $this->post('KdVal'),
					'Merk'				=> $this->post('Merk'),
					'JmBrg'				=> $this->post('JmBrg'),
					'JabLpse'			=> $this->post('JabLpse'),
					'TtdLpse'			=> $this->post('TtdLpse'),
					'NipTtdLpse'		=> $this->post('NipTtdLpse'),
					'NoProEks'			=> $this->post('NoProEks'),
					'TgProEks'			=> $this->post('TgProEks'),
					'Fasilitas'			=> $this->post('Fasilitas'),
					'AlmtSiap'			=> $this->post('AlmtSiap'),
					'TgSiap'			=> $this->post('TgSiap'),
					'NoPL'				=> $this->post('NoPL'),
					'TgPL'				=> $this->post('TgPL'),
					'KdktrPriks'		=> $this->post('FobR'),
					'FobR'				=> $this->post('FobR'),
					'JmKemasR'			=> $this->post('JmKemasR'),
					'JnKemasR'			=> $this->post('JnKemasR'),
					'JmContR'			=> $this->post('JmContR'),
					'JmCont20R'			=> $this->post('JmCont20R'),
					'JmCont40R'			=> $this->post('JmCont40R'),
					'BrutoR'			=> $this->post('BrutoR'),
					'NettoR'			=> $this->post('NettoR'),
					'WkRekPM'			=> $this->post('WkRekPM'),
					'InstFas'			=> $this->post('InstFas'),
					'FasBc'				=> $this->post('FasBc'),
					'KdktrFas'			=> $this->post('KdktrFas'),
					'DiAmmend'			=> $this->post('DiAmmend')
					);
					
		 $insert = $this->db->insert('temp_reslpbch', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}