<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cpos_user extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->model(array('mpos_user'));
    }	

	function get_all(){
            // mengambil data mahasiswa dari database
            $muser = $this->mpos_user->select();
            // menjadikan objek menjadi JSON
            $data = json_encode($muser);
            // mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
    }
	
	// contoh dengan parameter
    // urlnya : http://localhost/{url di config}/index.php/mahasiswa/cari_nama/{nama}
    function search_name($userNama){
        $select['userNama'] = $userNama;
        // mengambil data mahasiswa dari database
            $mhs = $this->mpos_user->select($select);
            // menjadikan objek menjadi JSON
            $data = json_encode($mhs);
            // mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
    }
	
	
}