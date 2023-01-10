<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ekspor extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('Mekspor'));
    }	
    // contoh tanpa parameter
    // urlnya : http://localhost/{url di config}/index.php/mahasiswa/get_all
    function get_all(){
            // mengambil data mahasiswa dari database
            $data = $this->mekspor->select();
			
			
            // menjadikan objek menjadi JSON
            $data = json_encode($data);
            // mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
    }
    
    // contoh dengan parameter
    // urlnya : http://localhost/{url di config}/index.php/mahasiswa/cari_mawb/{mawb}
    function cari_mawb($mawb,$status){
        $select['mawb'] = $mawb;	
		$select['status'] = $status;	
        // mengambil data mahasiswa dari database
            $data = $this->mekspor->select($select);
            // menjadikan objek menjadi JSON
            $data = json_encode($data);
            // mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
    }
    
    // contoh dengan parameter
    // urlnya : http://localhost/{url di config}/index.php/mahasiswa/cari_status/{status}
    function cari_status($status){
        $select['status'] = $status;
        // mengambil data mahasiswa dari database
            $data = $this->mekspor->select($select);
            // menjadikan objek menjadi JSON
            $data = json_encode($data);
            // mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
    }
    

}
/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */