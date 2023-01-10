<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Mohon_batal_plp_det_model extends MY_Model
{
    public $table = 'batal_plp_det'; 
	public $primary_key = 'id';
    public function __construct()
    {
        $this->_database_connection  = 'tpsonline_gtln';
        $this->timestamps = false;
        $this->return_as = 'array';
        // $this->has_one['batal_plp'] = array('foreign_model'=>'Mohon_batal_det_model',
        //                                     'foreign_table'=>'batal_plp','foreign_key'=>'id_batal',
        //                                     'local_key'=>'id_batal');
        parent::__construct();
        
    }
}



/* End of file filename.php */
