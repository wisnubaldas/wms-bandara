<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpos_cn33 extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function insert($insert){
        if($this->db->insert('t_cn33',$insert)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function update($cn33Code,$update){
        if($this->db->update('t_cn33',$update,'cn33Code = \''.$cn33Code.'\'')){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function delete($cn33Code){
        $delete['cn33Code_file'] = $cn33Code;
        if($this->db->delete('t_cn33',$delete)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
	function select($select=NULL,$awal=0,$akhir=10){
        if(! is_null($select))$this->db->like($select);
        $query = $this->db->get('t_cn33',$akhir,$awal);
        return $query->result();
    }
	
    function view($select=NULL){
        if(! is_null($select))$this->db->like($select);
        $query = $this->db->get('t_cn33');
        $arr = $query->result_array();
        if($query->num_rows > 0){
            return $arr[0];
        }else{
            return FALSE;
        }
    }
    function penerima($cn33Codeu){
        $this->db->where('cn33Code <>',$cn33Codeu);
        $query = $this->db->get('t_cn33');
        return $query->result();
    }

}