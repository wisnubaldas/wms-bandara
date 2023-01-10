<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Caccess_form extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('maccess_form'));
    }	
    // contoh tanpa parameter
    function get_all(){
            // mengambil data mahasiswa dari database
            $acsfrm = $this->maccess_form->select();
            // menjadikan objek menjadi JSON
            $data = json_encode($acsfrm);
            // mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
    }
    
    // contoh dengan parameter
    function search_permission($userName,$void){
        $select['userName'] = $userName;  
            $acsfrm = $this->maccess_form->select($select);
            // menjadikan objek menjadi JSON
            $data = json_encode($acsfrm);
            // mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
    }
    
    // contoh dengan parameter
    function search_spesific_permission($userName,$formname){
        $select['userName'] = $userName;
		$select['formname'] = $formname;
            $acsfrm = $this->maccess_form->select($select);
            // menjadikan objek menjadi JSON
            $data = json_encode($acsfrm);
            // mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
    }
    

}