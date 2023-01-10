<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class PkbeHdr extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	Car	KDKTR	IDEKS	NPWPEKS	NamaEks	AlmtEks	NoSiup	TgSiup	Niper	NoTdp	TgTdp	StatusH	JnKons	KdNegTuju	CARRIER	VOYFlight	TgStuffing	AlmtStuffing	JamStuffing	Lengkap	Tanggal	NamaTtd	NoDaft	TgDaft	Status	Kota	NomorEdi	Snrf	KdktrMuat	KdktrPeriksa	NIPStuffing	NamaStuffing	KdHanggar	Petugas	NoPhone	NoSurat	TgSurat
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('PkbeHdr')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('PkbeHdr')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'				=> $this->put('CAR'),
					'KDKTR'				=> $this->put('KDKTR'),
					'IDEKS'				=> $this->put('IDEKS'),
					'NPWPEKS'			=> $this->put('NPWPEKS'),
					'NamaEks'			=> $this->put('NamaEks'),
					'AlmtEks'			=> $this->put('AlmtEks'),
					'NoSiup'			=> $this->put('oSiup'),
					'TgSiup'			=> $this->put('TgSiup'),
					'Niper'				=> $this->put('Niper'),
					'NoTdp'				=> $this->put('NoTdp'),
					'TgTdp'				=> $this->put('TgTdp'),
					'StatusH'			=> $this->put('StatusH'),
					'JnKons'			=> $this->put('JnKons'),
					'KdNegTuju'			=> $this->put('KdNegTuju'),
					'CARRIER'			=> $this->put('CARRIER'),
					'VOYFlight'			=> $this->put('VOYFlight'),
					'TgStuffing'		=> $this->put('TgStuffing'),
					'AlmtStuffing'		=> $this->put('AlmtStuffing'),
					'JamStuffing'		=> $this->put('JamStuffing'),
					'Lengkap'			=> $this->put('Lengkap'),
					'Tanggal'			=> $this->put('Tanggal'),
					'NamaTtd'			=> $this->put('NamaTtd'),
					'NoDaft'			=> $this->put('NoDaft'),
					'TgDaft'			=> $this->put('TgDaft'),
					'Status'			=> $this->put('Status'),
					'Kota'				=> $this->put('Kota'),
					'NomorEdi'			=> $this->put('NomorEdi'),
					'Snrf'				=> $this->put('Snrf'),
					'KdktrMuat'			=> $this->put('KdktrMuat'),
					'KdktrPeriksa'		=> $this->put('KdktrPeriksa'),
					'NIPStuffing'		=> $this->put('NIPStuffing'),
					'NamaStuffing'		=> $this->put('NamaStuffing'),
					'KdHanggar'			=> $this->put('KdHanggar'),
					'Petugas'			=> $this->put('Petugas'),
					'NoPhone'			=> $this->put('NoPhone'),
					'NoSurat'			=> $this->put('NoSurat'),
					'TgSurat'			=> $this->put('TgSurat')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('PkbeHdr', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'				=> $this->post('CAR'),
					'KDKTR'				=> $this->post('KDKTR'),
					'IDEKS'				=> $this->post('IDEKS'),
					'NPWPEKS'			=> $this->post('NPWPEKS'),
					'NamaEks'			=> $this->post('NamaEks'),
					'AlmtEks'			=> $this->post('AlmtEks'),
					'NoSiup'			=> $this->post('oSiup'),
					'TgSiup'			=> $this->post('TgSiup'),
					'Niper'				=> $this->post('Niper'),
					'NoTdp'				=> $this->post('NoTdp'),
					'TgTdp'				=> $this->post('TgTdp'),
					'StatusH'			=> $this->post('StatusH'),
					'JnKons'			=> $this->post('JnKons'),
					'KdNegTuju'			=> $this->post('KdNegTuju'),
					'CARRIER'			=> $this->post('CARRIER'),
					'VOYFlight'			=> $this->post('VOYFlight'),
					'TgStuffing'		=> $this->post('TgStuffing'),
					'AlmtStuffing'		=> $this->post('AlmtStuffing'),
					'JamStuffing'		=> $this->post('JamStuffing'),
					'Lengkap'			=> $this->post('Lengkap'),
					'Tanggal'			=> $this->post('Tanggal'),
					'NamaTtd'			=> $this->post('NamaTtd'),
					'NoDaft'			=> $this->post('NoDaft'),
					'TgDaft'			=> $this->post('TgDaft'),
					'Status'			=> $this->post('Status'),
					'Kota'				=> $this->post('Kota'),
					'NomorEdi'			=> $this->post('NomorEdi'),
					'Snrf'				=> $this->post('Snrf'),
					'KdktrMuat'			=> $this->post('KdktrMuat'),
					'KdktrPeriksa'		=> $this->post('KdktrPeriksa'),
					'NIPStuffing'		=> $this->post('NIPStuffing'),
					'NamaStuffing'		=> $this->post('NamaStuffing'),
					'KdHanggar'			=> $this->post('KdHanggar'),
					'Petugas'			=> $this->post('Petugas'),
					'NoPhone'			=> $this->post('NoPhone'),
					'NoSurat'			=> $this->post('NoSurat'),
					'TgSurat'			=> $this->post('TgSurat')
					);
					
		 $insert = $this->db->insert('PkbeHdr', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}