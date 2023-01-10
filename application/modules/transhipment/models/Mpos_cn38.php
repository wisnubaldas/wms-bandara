<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpos_cn38 extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function insert($insert){
        if($this->db->insert('t_cn38',$insert)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function update($cn38Code,$update){
        if($this->db->update('t_cn38',$update,'cn38Code = \''.$cn38Code.'\'')){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function delete($cn38Code){
        $delete['cn38Code_file'] = $cn38Code;
        if($this->db->delete('t_cn38',$delete)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
	function select($select=NULL,$awal=0,$akhir=10){
        if(! is_null($select))$this->db->like($select);
        $query = $this->db->get('t_cn38',$akhir,$awal);
        return $query->result();
    }
	
    function view($select=NULL){
        if(! is_null($select))$this->db->like($select);
        $query = $this->db->get('t_cn38');
        $arr = $query->result_array();
        if($query->num_rows > 0){
            return $arr[0];
        }else{
            return FALSE;
        }
    }
    function penerima($cn38Codeu){
        $this->db->where('cn38Code <>',$cn38Codeu);
        $query = $this->db->get('t_cn38');
        return $query->result();
    }

}