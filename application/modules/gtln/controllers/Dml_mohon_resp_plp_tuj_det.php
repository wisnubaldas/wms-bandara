<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dml_mohon_resp_plp_tuj_det extends REST_Controller {
	
	private $db3;
	function __construct()
    {
        // Construct the parent class
        parent::__construct();
		$this->db3 = $this->load->database('tpsonline_gtln', TRUE);
    }
	
	function index_get() {
        $Noid = $this->get('Noid');
        if ($Noid == '') {
			$data = $this->db3->get('mohon_resp_plp_tuj_det')->result();            
        } else {
            $this->db3->where('Noid', $Noid);
            $data = $this->db3->get('mohon_resp_plp_tuj_det')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$Noid = $this->put('Noid');
        $data = array(		
					'id_header'			=> $this->put('id_header'),
					'jns_kms'			=> $this->put('jns_kms'),
					'jml_kms'			=> $this->put('jml_kms'),
					'no_bl_awb'			=> $this->put('no_bl_awb'),
					'tgl_bl_awb'		=> $this->put('tgl_bl_awb'),
					'no_pos_bc11'		=> $this->put('no_pos_bc11'),
					'consignee'			=> $this->put('consignee'),
					'fl_setuju'			=> $this->put('fl_setuju'),
					'berat_manual'		=> $this->put('berat_manual'),
					'Noid'				=> $this->put('Noid')
					);
					
		$this->db3->where('Noid', $Noid);
        $update = $this->db3->update('mohon_resp_plp_tuj_det', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {
        $data = array(		
					'id_header'			=> $this->post('id_header'),
					'jns_kms'			=> $this->post('jns_kms'),
					'jml_kms'			=> $this->post('jml_kms'),
					'no_bl_awb'			=> $this->post('no_bl_awb'),
					'tgl_bl_awb'		=> $this->post('tgl_bl_awb'),
					'no_pos_bc11'		=> $this->post('no_pos_bc11'),
					'consignee'			=> $this->post('consignee'),
					'fl_setuju'			=> $this->post('fl_setuju'),
					'berat_manual'		=> $this->post('berat_manual')
					);
        $insert = $this->db3->insert('mohon_resp_plp_tuj_det', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}