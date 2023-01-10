<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mohon_resp_plp_tuj_det extends MY_Model {


	public $table = 'mohon_resp_plp_tuj_det'; 
    public $primary_key = 'noid';
    public $fillable = array('id_header','jns_kms','jml_kms','tgl_bl_awb','no_bl_awb','no_pos_bc11',
                            'consignee','fl_setuju');
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

/* End of file Mohon_resp_plp_tuj.php */
/* Location: ./application/models/Mohon_resp_plp_tuj.php */