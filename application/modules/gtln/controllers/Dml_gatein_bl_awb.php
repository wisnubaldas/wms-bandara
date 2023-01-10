<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dml_gatein_bl_awb extends REST_Controller {
	
	
	private $db3;
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db3 = $this->load->database('tpsonline_gtln', TRUE);
		
	}
	
	function index_get() {
        $noid = $this->get('noid');
        if ($noid == '') {
			$data = $this->db3->get('gatein_master_bl_awb')->result();            
        } else {
            $this->db3->where('noid', $noid);
            $data = $this->db3->get('gatein_master_bl_awb')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$noid = $this->put('noid');
        $data = array(							
					'mawb'				=> $this->put('mawb'),
					'berat'				=> $this->put('berat'),
					'koli'				=> $this->put('koli'),
					'tps_asal'			=> $this->put('tps_asal'),
					'gud_asal'			=> $this->put('gud_asal'),
					'tps_tujuan'		=> $this->put('tps_tujuan'),
					'gud_tujuan'		=> $this->put('gud_tujuan'),
					'kd_airlines'		=> $this->put('kd_airlines'),
					'flightno'			=> $this->put('flightno'),
					'flight_date'		=> $this->put('flight_date'),
					'nobc11'			=> $this->put('nobc11'),
					'tglbc11'			=> $this->put('tglbc11'),
					'nopos'				=> $this->put('nopos'),
					'jns_dok'			=> $this->put('jns_dok'),
					'nomor_dok'			=> $this->put('nomor_dok'),
					'tgldok'			=> $this->put('tgldok'),
					'noid'				=> $this->put('noid')
					);
		$this->db3->where('noid', $noid);
        $update = $this->db3->update('gatein_master_bl_awb', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'mawb'				=> $this->post('mawb'),
					'berat'				=> $this->post('berat'),
					'koli'				=> $this->post('koli'),
					'tps_asal'			=> $this->post('tps_asal'),
					'gud_asal'			=> $this->post('gud_asal'),
					'tps_tujuan'		=> $this->post('tps_tujuan'),
					'gud_tujuan'		=> $this->post('gud_tujuan'),
					'kd_airlines'		=> $this->post('kd_airlines'),
					'flightno'			=> $this->post('flightno'),
					'flight_date'		=> $this->post('flight_date'),
					'nobc11'			=> $this->post('nobc11'),
					'tglbc11'			=> $this->post('tglbc11'),
					'nopos'				=> $this->post('nopos'),
					'jns_dok'			=> $this->post('jns_dok'),
					'nomor_dok'			=> $this->post('nomor_dok'),
					'tgldok'			=> $this->post('tgldok')
					);
					
		 $insert = $this->db3->insert('gatein_master_bl_awb', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
}