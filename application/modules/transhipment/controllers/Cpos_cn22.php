<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cpos_cn22 extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->model(array('mpos_cn22'));
    }	
	
	 function total_CN22_grouping($flightno,$airlinesCode,$dateflight,$partnercode){
        $select['flightno'] = $flightno;
		$select['airlinesCode'] = $airlinesCode;
		$select['dateflight'] = $dateflight;
		$select['flightno'] = $partnercode
        // mengambil data mahasiswa dari database
            $grouping = $this->mpos_cn22->cn22_grouping($select);
            // menjadikan objek menjadi JSON
            $data = json_encode($grouping);
            // mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
    }
	
	
	
	
	
	
	
	
}