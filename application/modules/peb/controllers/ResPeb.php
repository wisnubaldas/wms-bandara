<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
class ResPeb extends REST_Controller {
	
	public function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	RESKD	RESTG	RESWK	NoLpse	Kdktr	NoDaft	TgDaft	NoBcf305	TgBcf305	SeriBcf305	IdEks	NpwpEks	NamaEks	AlmtEks	NipPtg	NmPtg	NmKomp	KomTg	KomWk	EdiSender	SnrfRespon	Dibaca	Kdrahasia
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_respeb')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_respeb')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'			=> $this->put('CAR'),
					'RESKD'			=> $this->put('RESKD'),
					'RESTG'			=> $this->put('RESTG'),
					'RESWK'			=> $this->put('RESWK'),
					'NoLpse'		=> $this->put('NoLpse'),
					'Kdktr'			=> $this->put('Kdktr'),
					'NoDaft'		=> $this->put('NoDaft'),
					'TgDaft'		=> $this->put('TgDaft'),
					'NoBcf305'		=> $this->put('NoBcf305'),
					'TgBcf305'		=> $this->put('TgBcf305'),
					'SeriBcf305'	=> $this->put('SeriBcf305'),
					'IdEks'			=> $this->put('IdEks'),
					'NpwpEks'		=> $this->put('NpwpEks'),
					'NamaEks'		=> $this->put('NamaEks'),
					'AlmtEks'		=> $this->put('AlmtEks'),
					'NipPtg'		=> $this->put('NipPtg'),
					'NmPtg'			=> $this->put('NmPtg'),
					'NmKomp'		=> $this->put('NmKomp'),
					'KomTg'			=> $this->put('KomTg'),
					'KomWk'			=> $this->put('KomWk'),
					'EdiSender'		=> $this->put('EdiSender'),
					'SnrfRespon'	=> $this->put('SnrfRespon'),
					'Dibaca'		=> $this->put('Dibaca'),
					'Kdrahasia'		=> $this->put('Kdrahasia')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_respeb', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'			=> $this->post('CAR'),
					'RESKD'			=> $this->post('RESKD'),
					'RESTG'			=> $this->post('RESTG'),
					'RESWK'			=> $this->post('RESWK'),
					'NoLpse'		=> $this->post('NoLpse'),
					'Kdktr'			=> $this->post('Kdktr'),
					'NoDaft'		=> $this->post('NoDaft'),
					'TgDaft'		=> $this->post('TgDaft'),
					'NoBcf305'		=> $this->post('NoBcf305'),
					'TgBcf305'		=> $this->post('TgBcf305'),
					'SeriBcf305'	=> $this->post('SeriBcf305'),
					'IdEks'			=> $this->post('IdEks'),
					'NpwpEks'		=> $this->post('NpwpEks'),
					'NamaEks'		=> $this->post('NamaEks'),
					'AlmtEks'		=> $this->post('AlmtEks'),
					'NipPtg'		=> $this->post('NipPtg'),
					'NmPtg'			=> $this->post('NmPtg'),
					'NmKomp'		=> $this->post('NmKomp'),
					'KomTg'			=> $this->post('KomTg'),
					'KomWk'			=> $this->post('KomWk'),
					'EdiSender'		=> $this->post('EdiSender'),
					'SnrfRespon'	=> $this->post('SnrfRespon'),
					'Dibaca'		=> $this->post('Dibaca'),
					'Kdrahasia'		=> $this->post('Kdrahasia')
					);
					
		 $insert = $this->db->insert('temp_respeb', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}