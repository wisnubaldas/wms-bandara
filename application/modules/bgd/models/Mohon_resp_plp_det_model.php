<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Mohon_resp_plp_det_model extends MY_Model
{
    public $table = 'mohon_resp_plp_det'; 
    public $primary_key = 'Noid';
    public $fillable = array('detail_plp','jns_kms','jml_kms','no_bl_awb','tgl_bl_awb','fl_setuju','id_header');
    public function __construct()
    {
        $this->_database_connection  = 'TPS';
        $this->timestamps = false;
        $this->return_as = 'array';
        // $this->has_many['plp_detail'] = array('foreign_model'=>'Mohon_plp_detail_model',
        //                                     'foreign_table'=>'mohon_plp_det','foreign_key'=>'id_mohon',
        //                                     'local_key'=>'id_mohon');
        parent::__construct();
        
    }
        
}




/* End of file filename.php */
