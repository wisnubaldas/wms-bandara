<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dml_batalplp extends REST_Controller {
	
	function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }
	
	function index_get() {
        $id_batal = $this->get('id_batal');
        if ($id_batal == '') {
			$data = $this->db->get('batal_plp')->result();            
        } else {
            $this->db->where('id_batal', $id_batal);
            $data = $this->db->get('batal_plp')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id_batal = $this->put('id_batal');
        $data = array(		
					'kd_kantor'			=> $this->put('kd_kantor'),
					'tipe_data'			=> $this->put('tipe_data'),					
					'kd_tps'			=> $this->put('kd_tps'),					
					'no_surat'			=> $this->put('no_surat'),
					'tgl_surat'			=> $this->put('tgl_surat'),
					'no_plp'			=> $this->put('no_plp'),
					'tgl_plp'			=> $this->put('tgl_plp'),
					'alasan'			=> $this->put('alasan'),
					'no_bc11'			=> $this->put('no_bc11'),
					'tgl_bc11'			=> $this->put('tgl_bc11'),
					'nm_pemohon'		=> $this->put('nm_pemohon'),
					'id_batal'			=> $this->put('id_batal')
					);
					
		$this->db->where('id_batal', $id_batal);
        $update = $this->db->update('batal_plp', $data);
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
					'kd_tps'			=> $this->post('kd_tps'),					
					'no_surat'			=> $this->post('no_surat'),
					'tgl_surat'			=> $this->post('tgl_surat'),
					'no_plp'			=> $this->post('no_plp'),
					'tgl_plp'			=> $this->post('tgl_plp'),
					'alasan'			=> $this->post('alasan'),
					'no_bc11'			=> $this->post('no_bc11'),
					'tgl_bc11'			=> $this->post('tgl_bc11'),
					'nm_pemohon'		=> $this->post('nm_pemohon')
					);
        $insert = $this->db->insert('batal_plp', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}