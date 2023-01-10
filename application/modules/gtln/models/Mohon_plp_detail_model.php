<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Mohon_plp_detail_model extends MY_Model
{
    public $table = 'mohon_plp_det'; 
	public $primary_key = 'id';
    public function __construct()
    {
        $this->_database_connection  = 'tpsonline_gtln';
        $this->timestamps = ['created_at','updated_at'];
        $this->return_as = 'array';
        parent::__construct();
        
    }
        
}




/* End of file filename.php */
