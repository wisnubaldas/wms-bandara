<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Bongkar_muat_model extends MY_Model
{
    public $table = 'bongkarmuat'; 
	public $primary_key = 'noid';
    public function __construct()
    {
        $this->_database_connection  = 'tpsonline_gtln';
        $this->timestamps = ['created_at','updated_at'];
        $this->return_as = 'array';
        parent::__construct();
        
    }
}


/* End of file filename.php */
