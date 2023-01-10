<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Bc_respone_400 extends REST_Controller {
	
	
	private $db10;
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db10 = $this->load->database('dbrespon_xsys_pjt', TRUE);
		
	}
	
	function index_put() {
		$NO_BARANG = $this->put('NO_BARANG');
        $data = array(		
					'NO_BARANG'			=> $this->put('NO_BARANG'),
					'NO_SPPBMCP'		=> $this->put('NO_SPPBMCP'),
					'TGL_SPPBMCP'		=> $this->put('TGL_SPPBMCP'),
					'PDF'				=> $this->put('PDF'),
					'NewPDF'			=> $this->put('NewPDF')
					);
					
		$this->db10->where('NO_BARANG', $NO_BARANG);
        $update = $this->db10->update('bc_respone_400', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	
}