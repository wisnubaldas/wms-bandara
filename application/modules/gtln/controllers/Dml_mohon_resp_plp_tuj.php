<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dml_mohon_resp_plp_tuj extends REST_Controller {
	
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
			$data = $this->db3->get('mohon_resp_plp_tuj')->result();            
        } else {
            $this->db3->where('Noid', $Noid);
            $data = $this->db3->get('mohon_resp_plp_tuj')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$Noid = $this->put('Noid');
        $data = array(		
					'kd_kantor'			=> $this->put('kd_kantor'),
					'kd_tps_asal'		=> $this->put('kd_tps_asal'),
					'kd_tps_tujuan'		=> $this->put('kd_tps_tujuan'),
					'ref_number'		=> $this->put('ref_number'),
					'gudang_asal'		=> $this->put('gudang_asal'),
					'gudang_tujuan'		=> $this->put('gudang_tujuan'),
					'no_plp'			=> $this->put('no_plp'),
					'tgl_plp'			=> $this->put('tgl_plp'),
					'alasan_reject'		=> $this->put('alasan_reject'),
					'call_sign'			=> $this->put('call_sign'),
					'nm_angkut'			=> $this->put('nm_angkut'),
					'no_voy_flight'		=> $this->put('no_voy_flight'),
					'tgl_tiba'			=> $this->put('tgl_tiba'),
					'no_surat'			=> $this->put('no_surat'),
					'tgl_surat'			=> $this->put('tgl_surat'),
					'no_bc11'			=> $this->put('no_bc11'),
					'tgl_bc11'			=> $this->put('tgl_bc11'),
					'create_at'			=> $this->put('create_at'),
					'update_at'			=> $this->put('update_at'),
					'Noid'				=> $this->put('Noid')
					);
					
		$this->db3->where('Noid', $Noid);
        $update = $this->db3->update('mohon_resp_plp_tuj', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {
        $data = array(		
					'kd_kantor'			=> $this->post('kd_kantor'),
					'kd_tps_asal'		=> $this->post('kd_tps_asal'),
					'kd_tps_tujuan'		=> $this->post('kd_tps_tujuan'),
					'ref_number'		=> $this->post('ref_number'),
					'gudang_asal'		=> $this->post('gudang_asal'),
					'gudang_tujuan'		=> $this->post('gudang_tujuan'),
					'no_plp'			=> $this->post('no_plp'),
					'tgl_plp'			=> $this->post('tgl_plp'),
					'alasan_reject'		=> $this->post('alasan_reject'),
					'call_sign'			=> $this->post('call_sign'),
					'nm_angkut'			=> $this->post('nm_angkut'),
					'no_voy_flight'		=> $this->post('no_voy_flight'),
					'tgl_tiba'			=> $this->post('tgl_tiba'),
					'no_surat'			=> $this->post('no_surat'),
					'tgl_surat'			=> $this->post('tgl_surat'),
					'no_bc11'			=> $this->post('no_bc11'),
					'tgl_bc11'			=> $this->post('tgl_bc11'),
					'create_at'			=> $this->post('create_at'),
					'update_at'			=> $this->post('update_at')
					);
        $insert = $this->db3->insert('mohon_resp_plp_tuj', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}