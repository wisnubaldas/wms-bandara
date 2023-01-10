<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mimport extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function insert($insert){
        if($this->db->insert('mahasiswa',$insert)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function update($id,$update){
        if($this->db->update('mahasiswa',$update,'id = \''.$id.'\'')){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function delete($id){
        $delete['id_file'] = $id;
        if($this->db->delete('mahasiswa',$delete)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function select($select=NULL,$awal=0,$akhir=10){
        if(! is_null($select))$this->db->like($select);
        $query = $this->db->get('mahasiswa',$akhir,$awal);
        return $query->result();
    }
    function view($select=NULL){
        if(! is_null($select))$this->db->like($select);
        $query = $this->db->get('mahasiswa');
        $arr = $query->result_array();
        if($query->num_rows > 0){
            return $arr[0];
        }else{
            return FALSE;
        }
    }
    function penerima($idu){
        $this->db->where('id <>',$idu);
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }
}
/* End of file mmahasiswa.php */
/* Location: ./application/controllers/welcome.php */