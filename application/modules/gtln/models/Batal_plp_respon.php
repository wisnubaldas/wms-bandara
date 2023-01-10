<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Batal_plp_respon extends MY_Model
{
    public $table = 'batal_resp_plp'; 
    public $primary_key = 'Noid';
    public $fillable = array('kd_kantor','kd_tps_asal','kd_tps_tujuan','ref_number','gudang_asal','gudang_tujuan','no_plp','tgl_plp','no_batal_plp','tgl_batal_plp','alasan_batal');
    public function __construct()
    {
        $this->_database_connection  = 'tpsonline_gtln';
        $this->timestamps = false;
        $this->return_as = 'array';
        // $this->has_one['batal_detail'] = array('foreign_model'=>'Batal_plp_detail',
        //                                     'foreign_table'=>'batal_plp_det','foreign_key'=>'id_batal',
        //                                     'local_key'=>'id_batal');
                                            
        parent::__construct();
        
    }
        
}




/* End of file filename.php */
