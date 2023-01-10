<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Impor_gate_in_model extends MY_Model
{
    public $table = 'get_imp_in'; 
    public $primary_key = 'id_kms';
    public $fillable = array('flag_transfer','id_kms','respon','ref_num');
    public function __construct()
    {
        $this->_database_connection  = 'TPS';
        $this->timestamps = ['date_create','date_update'];
        $this->return_as = 'array';
        parent::__construct();
        
    }
        
}




/* End of file filename.php */
