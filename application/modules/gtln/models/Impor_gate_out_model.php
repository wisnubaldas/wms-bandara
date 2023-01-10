<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Impor_gate_out_model extends MY_Model
{
    public $table = 'get_imp_out'; 
	public $primary_key = 'id_kms';
	public $fillable = array('respon','ref_num','flag_transfer','no_bl_awb');
    public function __construct()
    {
        $this->_database_connection  = 'tpsonline_gtln';
        $this->timestamps = ['date_create','date_update'];
        $this->return_as = 'array';
        parent::__construct();
        
    }
        
}




/* End of file filename.php */
