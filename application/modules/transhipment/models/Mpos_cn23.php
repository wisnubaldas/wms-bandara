<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpos_cn23 extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function insert($insert){
        if($this->db->insert('t_cn23',$insert)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function update($ServiceNumber,$update){
        if($this->db->update('t_cn23',$update,'ServiceNumber = \''.$ServiceNumber.'\'')){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function delete($ServiceNumber){
        $delete['ServiceNumber_file'] = $ServiceNumber;
        if($this->db->delete('t_cn23',$delete)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
	function select($select=NULL,$awal=0,$akhir=10){
        if(! is_null($select))$this->db->like($select);
        $query = $this->db->get('t_cn23',$akhir,$awal);
        return $query->result();
    }
	
    function view($select=NULL){
        if(! is_null($select))$this->db->like($select);
        $query = $this->db->get('t_cn23');
        $arr = $query->result_array();
        if($query->num_rows > 0){
            return $arr[0];
        }else{
            return FALSE;
        }
    }
    function penerima($ServiceNumberu){
        $this->db->where('ServiceNumber <>',$ServiceNumberu);
        $query = $this->db->get('t_cn23');
        return $query->result();
    }

}