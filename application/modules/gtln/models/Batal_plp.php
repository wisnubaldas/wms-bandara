<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Batal_plp extends MY_Model
{
    public $table = 'batal_plp'; 
    public $primary_key = 'id_batal';
    public $fillable = array('ref_number','flag_transfer','respon_batal');
    public function __construct()
    {
        $this->_database_connection  = 'tpsonline_gtln';
        $this->timestamps = false;
        $this->return_as = 'array';
        $this->has_one['batal_detail'] = array('foreign_model'=>'Batal_plp_detail',
                                            'foreign_table'=>'batal_plp_det','foreign_key'=>'id_batal',
                                            'local_key'=>'id_batal');
                                            
        parent::__construct();
        
    }
        
}




/* End of file filename.php */
