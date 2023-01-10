<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Batal_plp_respon_detail extends MY_Model
{
    public $table = 'batal_resp_plp_det'; 
    public $primary_key = 'noid';
    public $fillable = array('id_header','jns_kms','jml_kms','no_bl_awb','tgl_bl_awb','fl_setuju');
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
