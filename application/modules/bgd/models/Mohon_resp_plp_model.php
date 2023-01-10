<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Mohon_resp_plp_model extends MY_Model
{
    public $table = 'mohon_resp_plp'; 
    public $primary_key = 'Noid';
    public $fillable = array('kd_kantor','kd_tps_asal','kd_tps_tujuan','ref_number','gudang_asal','gudang_tujuan',
                            'no_plp','tgl_plp','alasan_reject','call_sign','nm_angkut','no_voy_flight','tgl_tiba',
                            'no_bc11','tgl_bc11','no_surat','tgl_surat','detail_plp','status');
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
