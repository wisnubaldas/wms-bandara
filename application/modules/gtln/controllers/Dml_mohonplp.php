<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dml_mohonplp extends REST_Controller {
	
	private $db3;
	function __construct()
    {
        // Construct the parent class
        parent::__construct();
		$this->db3 = $this->load->database('tpsonline_gtln', TRUE);
    }
	
	function index_get() {
        $id_mohon = $this->get('id_mohon');
        if ($id_mohon == '') {
			$data = $this->db3->get('mohon_plp')->result();            
        } else {
            $this->db3->where('id_mohon', $id_mohon);
            $data = $this->db3->get('mohon_plp')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id_mohon = $this->put('id_mohon');
        $data = array(		
					'kd_kantor'			=> $this->put('kd_kantor'),
					'tipe_data'			=> $this->put('tipe_data'),
					'kd_tps_asal'		=> $this->put('kd_tps_asal'),
					'no_surat'			=> $this->put('no_surat'),
					'tgl_surat'			=> $this->put('tgl_surat'),
					'gudang_asal'		=> $this->put('gudang_asal'),
					'kd_tps_tujuan'		=> $this->put('kd_tps_tujuan'),
					'gudang_tujuan'		=> $this->put('gudang_tujuan'),
					'kd_alasan_plp'		=> $this->put('kd_alasan_plp'),
					'yor_asal'			=> $this->put('yor_asal'),
					'yor_tujuan'		=> $this->put('yor_tujuan'),
					'call_sign'			=> $this->put('call_sign'),
					'nm_angkut'			=> $this->put('nm_angkut'),
					'no_voy_flight'		=> $this->put('no_voy_flight'),
					'tgl_tiba'			=> $this->put('tgl_tiba'),
					'no_bc11'			=> $this->put('no_bc11'),
					'tgl_bc11'			=> $this->put('tgl_bc11'),
					'nm_pemohon'		=> $this->put('nm_pemohon'),
					'id_mohon'			=> $this->put('id_mohon')
					);
					
		$this->db3->where('id_mohon', $id_mohon);
        $update = $this->db3->update('mohon_plp', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {
        $data = array(		
					'kd_kantor'			=> $this->post('kd_kantor'),
					'tipe_data'			=> $this->post('tipe_data'),
					'kd_tps_asal'		=> $this->post('kd_tps_asal'),
					'no_surat'			=> $this->post('no_surat'),
					'tgl_surat'			=> $this->post('tgl_surat'),
					'gudang_asal'		=> $this->post('gudang_asal'),
					'kd_tps_tujuan'		=> $this->post('kd_tps_tujuan'),
					'gudang_tujuan'		=> $this->post('gudang_tujuan'),
					'kd_alasan_plp'		=> $this->post('kd_alasan_plp'),
					'yor_asal'			=> $this->post('yor_asal'),
					'yor_tujuan'		=> $this->post('yor_tujuan'),
					'call_sign'			=> $this->post('call_sign'),
					'nm_angkut'			=> $this->post('nm_angkut'),
					'no_voy_flight'		=> $this->post('no_voy_flight'),
					'tgl_tiba'			=> $this->post('tgl_tiba'),
					'no_bc11'			=> $this->post('no_bc11'),
					'tgl_bc11'			=> $this->post('tgl_bc11'),
					'nm_pemohon'		=> $this->post('nm_pemohon')
					);
        $insert = $this->db3->insert('mohon_plp', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}