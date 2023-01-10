<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Mohon_plp_model extends MY_Model
{
    public $table = 'mohon_plp'; 
    public $primary_key = 'id_mohon';
    public $fillable = array('ref_number','KD_RES','flag_transfer');
    public function __construct()
    {
        $this->_database_connection  = 'tpsonline_gtln';
        $this->timestamps = ['created_at','updated_at'];
        $this->return_as = 'array';
        $this->has_many['plp_detail'] = array('foreign_model'=>'Mohon_plp_detail_model',
                                            'foreign_table'=>'mohon_plp_det','foreign_key'=>'id_mohon',
                                            'local_key'=>'id_mohon');
                                            
        parent::__construct();
        
    }
        
}




/* End of file filename.php */
