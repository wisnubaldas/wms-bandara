<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Import extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('mimport'));
    }	
    // contoh tanpa parameter
    // urlnya : http://localhost/{url di config}/index.php/mahasiswa/get_all
    function get_all(){
            // mengambil data mahasiswa dari database
            $mhs = $this->mpelajar->select();
			
			
            // menjadikan objek menjadi JSON
            $data = json_encode($mhs);
            // mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
    }
    
    // contoh dengan parameter
    // urlnya : http://localhost/{url di config}/index.php/mahasiswa/cari_nama/{nama}
    function cari_nama($nama){
        $select['nama'] = $nama;
        // mengambil data mahasiswa dari database
            $mhs = $this->mpelajar->select($select);
            // menjadikan objek menjadi JSON
            $data = json_encode($mhs);
            // mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
    }
    
    // contoh dengan parameter
    // urlnya : http://localhost/{url di config}/index.php/mahasiswa/cari_nim/{nim}
    function cari_nim($nim){
        $select['nim'] = $nim;
        // mengambil data mahasiswa dari database
            $mhs = $this->mpelajar->select($select);
            // menjadikan objek menjadi JSON
            $data = json_encode($mhs);
            // mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($data));
        exit($data);
    }
    

}
/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */