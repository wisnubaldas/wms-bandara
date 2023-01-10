<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpos_cn31_closed extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function insert($insert){
        if($this->db->insert('t_cn31_closed',$insert)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function update($cn31Code,$update){
        if($this->db->update('t_cn31_closed',$update,'cn31Code = \''.$cn31Code.'\'')){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function delete($cn31Code){
        $delete['cn31Code_file'] = $cn31Code;
        if($this->db->delete('t_cn31_closed',$delete)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
	function select($select=NULL,$awal=0,$akhir=10){
        if(! is_null($select))$this->db->like($select);
        $query = $this->db->get('t_cn31_closed',$akhir,$awal);
        return $query->result();
    }
	
    function view($select=NULL){
        if(! is_null($select))$this->db->like($select);
        $query = $this->db->get('t_cn31_closed');
        $arr = $query->result_array();
        if($query->num_rows > 0){
            return $arr[0];
        }else{
            return FALSE;
        }
    }
    function penerima($cn31Codeu){
        $this->db->where('cn31Code <>',$cn31Codeu);
        $query = $this->db->get('t_cn31_closed');
        return $query->result();
    }

}