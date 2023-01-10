<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Pebdtl extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	SERIBRG	HS	URBRG1	URBRG2	URBRG3	URBRG4	DMERK	SIZE	TYPE	KDBRG	KDIZIN	NOIZIN	TGIZIN	JMKOLI	JNKOLI	DNilInv	FOBPERBRG	FOBPERSAT	KDPE	TARIPPE	HPATOK	JMSATUAN	JNSATUAN	NETDET	JMSATPE	JNSATPE	KDVALPE	NILVALPE	PEPERBRG	DTLOK	NCV	DVolume	NegAsal	DRHASALBRG
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_pebdtl')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_pebdtl')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'				=> $this->put('CAR'),
					'SERIBRG'			=> $this->put('SERIBRG'),
					'HS'				=> $this->put('HS'),
					'URBRG1'			=> $this->put('URBRG1'),
					'URBRG2'			=> $this->put('URBRG2'),
					'URBRG3'			=> $this->put('URBRG3'),
					'URBRG4'			=> $this->put('URBRG4'),
					'DMERK'				=> $this->put('DMERK'),
					'SIZE'				=> $this->put('SIZE'),
					'TYPE'				=> $this->put('TYPE'),
					'KDBRG'				=> $this->put('KDBRG'),
					'KDIZIN'			=> $this->put('KDIZIN'),
					'NOIZIN'			=> $this->put('NOIZIN'),
					'TGIZIN'			=> $this->put('TGIZIN'),
					'JMKOLI'			=> $this->put('JMKOLI'),
					'JNKOLI'			=> $this->put('JNKOLI'),
					'DNilInv'			=> $this->put('DNilInv'),
					'FOBPERBRG'			=> $this->put('FOBPERBRG'),
					'FOBPERSAT'			=> $this->put('FOBPERSAT'),
					'KDPE'				=> $this->put('KDPE'),
					'TARIPPE'			=> $this->put('TARIPPE'),
					'HPATOK'			=> $this->put('HPATOK'),
					'JMSATUAN'			=> $this->put('JMSATUAN'),
					'JNSATUAN'			=> $this->put('JNSATUAN'),
					'NETDET'			=> $this->put('NETDET'),
					'JMSATPE'			=> $this->put('JMSATPE'),
					'JNSATPE'			=> $this->put('JNSATPE'),
					'KDVALPE'			=> $this->put('KDVALPE'),
					'NILVALPE'			=> $this->put('NILVALPE'),
					'PEPERBRG'			=> $this->put('PEPERBRG'),
					'DTLOK'				=> $this->put('DTLOK'),
					'NCV'				=> $this->put('NCV'),
					'DVolume'			=> $this->put('DVolume'),
					'NegAsal'			=> $this->put('NegAsal'),
					'DRHASALBRG'		=> $this->put('DRHASALBRG')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_pebdtl', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'				=> $this->post('CAR'),
					'SERIBRG'			=> $this->post('SERIBRG'),
					'HS'				=> $this->post('HS'),
					'URBRG1'			=> $this->post('URBRG1'),
					'URBRG2'			=> $this->post('URBRG2'),
					'URBRG3'			=> $this->post('URBRG3'),
					'URBRG4'			=> $this->post('URBRG4'),
					'DMERK'				=> $this->post('DMERK'),
					'SIZE'				=> $this->post('SIZE'),
					'TYPE'				=> $this->post('TYPE'),
					'KDBRG'				=> $this->post('KDBRG'),
					'KDIZIN'			=> $this->post('KDIZIN'),
					'NOIZIN'			=> $this->post('NOIZIN'),
					'TGIZIN'			=> $this->post('TGIZIN'),
					'JMKOLI'			=> $this->post('JMKOLI'),
					'JNKOLI'			=> $this->post('JNKOLI'),
					'DNilInv'			=> $this->post('DNilInv'),
					'FOBPERBRG'			=> $this->post('FOBPERBRG'),
					'FOBPERSAT'			=> $this->post('FOBPERSAT'),
					'KDPE'				=> $this->post('KDPE'),
					'TARIPPE'			=> $this->post('TARIPPE'),
					'HPATOK'			=> $this->post('HPATOK'),
					'JMSATUAN'			=> $this->post('JMSATUAN'),
					'JNSATUAN'			=> $this->post('JNSATUAN'),
					'NETDET'			=> $this->post('NETDET'),
					'JMSATPE'			=> $this->post('JMSATPE'),
					'JNSATPE'			=> $this->post('JNSATPE'),
					'KDVALPE'			=> $this->post('KDVALPE'),
					'NILVALPE'			=> $this->post('NILVALPE'),
					'PEPERBRG'			=> $this->post('PEPERBRG'),
					'DTLOK'				=> $this->post('DTLOK'),
					'NCV'				=> $this->post('NCV'),
					'DVolume'			=> $this->post('DVolume'),
					'NegAsal'			=> $this->post('NegAsal'),
					'DRHASALBRG'		=> $this->post('DRHASALBRG')
					);
					
		 $insert = $this->db->insert('temp_pebdtl', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}