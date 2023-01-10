<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Fare_directentry extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('mfare_directentry'));
    }	
    // contoh tanpa parameter
    // urlnya : http://localhost/{url di config}/index.php/mahasiswa/get_all
    function get_all(){
            // mengambil data mahasiswa dari database
            $directentry = $this->mfare_directentry->select();
            // menjadikan objek menjadi JSON
            $data = json_encode($directentry);
            // mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
    }
    
    // contoh dengan parameter
    // urlnya : http://localhost/{url di config}/index.php/mahasiswa/cari_formname/{formname}
    function cari_city_code($citycode){
        $select['formname'] = $formname;       
            $directentry = $this->mfare_directentry->select($select);
            // menjadikan objek menjadi JSON
            $data = json_encode($directentry);
            // mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
    }
    
    // contoh dengan parameter
    // urlnya : http://localhost/{url di config}/index.php/mahasiswa/cari_userName/{userName}
    function cari_userName($userName){
        $select['userName'] = $userName;
            $directentry = $this->mfare_directentry->select($select);
            // menjadikan objek menjadi JSON
            $data = json_encode($directentry);
            // mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
    }
    

}