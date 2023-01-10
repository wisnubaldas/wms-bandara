<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpos_cn35 extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function insert($insert){
        if($this->db->insert('t_cn35',$insert)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function update($cn35Code,$update){
        if($this->db->update('t_cn35',$update,'cn35Code = \''.$cn35Code.'\'')){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function delete($cn35Code){
        $delete['cn35Code_file'] = $cn35Code;
        if($this->db->delete('t_cn35',$delete)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
	function select($select=NULL,$awal=0,$akhir=10){
        if(! is_null($select))$this->db->like($select);
        $query = $this->db->get('t_cn35',$akhir,$awal);
        return $query->result();
    }
	
    function view($select=NULL){
        if(! is_null($select))$this->db->like($select);
        $query = $this->db->get('t_cn35');
        $arr = $query->result_array();
        if($query->num_rows > 0){
            return $arr[0];
        }else{
            return FALSE;
        }
    }
    function penerima($cn35Codeu){
        $this->db->where('cn35Code <>',$cn35Codeu);
        $query = $this->db->get('t_cn35');
        return $query->result();
    }

}