<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cpos_preorder extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->model(array('mpos_preorder'));
    }
	
	function get_all(){
            // mengambil data mahasiswa dari database
            $mpreorder = $this->mpos_preorder->select();
            // menjadikan objek menjadi JSON
            $data = json_encode($mpreorder);
            // mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
    }
	
	function total_preshipment_no_verifibarcode($partnercode){
        $select['partnercode'] = $partnercode;
        // mengambil data mahasiswa dari database
            $ttlOrder = $this->mpos_preorder->view_ttl_noproses_preshipment($select);
            // menjadikan objek menjadi JSON
            $data = json_encode($mhs);
            // mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
    }
	
}