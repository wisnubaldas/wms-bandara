<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mekspor extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function insert($insert){
        if($this->db->insert('t_shipment_ekspor',$insert)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function update($Noid,$update){
        if($this->db->update('t_shipment_ekspor',$update,'Noid = \''.$Noid.'\'')){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function delete($Noid){
        $delete['Noid_file'] = $Noid;
        if($this->db->delete('t_shipment_ekspor',$delete)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function select($select=NULL,$awal=0,$akhir=10){
        if(! is_null($select))$this->db->like($select);
        $query = $this->db->get('t_shipment_ekspor',$akhir,$awal);
        return $query->result();
    }
    function view($select=NULL){
        if(! is_null($select))$this->db->like($select);
        $query = $this->db->get('t_shipment_ekspor');
        $arr = $query->result_array();
        if($query->num_rows > 0){
            return $arr[0];
        }else{
            return FALSE;
        }
    }
    function penerima($Noidu){
        $this->db->where('Noid <>',$Noidu);
        $query = $this->db->get('t_shipment_ekspor');
        return $query->result();
    }
}
/* End of file mt_shipment_ekspor.php */
/* Location: ./application/controllers/welcome.php */