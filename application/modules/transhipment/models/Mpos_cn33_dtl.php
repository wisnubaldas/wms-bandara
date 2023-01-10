<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpos_cn33_dtl extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function insert($insert){
        if($this->db->insert('t_cn33_dtl',$insert)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function update($cn33_dtlCode,$update){
        if($this->db->update('t_cn33_dtl',$update,'cn33_dtlCode = \''.$cn33_dtlCode.'\'')){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function delete($cn33_dtlCode){
        $delete['cn33_dtlCode_file'] = $cn33_dtlCode;
        if($this->db->delete('t_cn33_dtl',$delete)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
	function select($select=NULL,$awal=0,$akhir=10){
        if(! is_null($select))$this->db->like($select);
        $query = $this->db->get('t_cn33_dtl',$akhir,$awal);
        return $query->result();
    }
	
    function view($select=NULL){
        if(! is_null($select))$this->db->like($select);
        $query = $this->db->get('t_cn33_dtl');
        $arr = $query->result_array();
        if($query->num_rows > 0){
            return $arr[0];
        }else{
            return FALSE;
        }
    }
    function penerima($cn33_dtlCodeu){
        $this->db->where('cn33_dtlCode <>',$cn33_dtlCodeu);
        $query = $this->db->get('t_cn33_dtl');
        return $query->result();
    }

}