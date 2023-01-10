<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitatext_model extends CI_Model
{
	private $db7;	
	private $db8;	
    function __construct()
    {
        parent::__construct();			
		$this->db7 = $this->load->database('rdinterchangemessage_read', TRUE);	
		$this->db8 = $this->load->database('rdinterchangemessage', TRUE);	
    }
	
	public function flag_sending_fsu($tablename,$MessageSent,$KeyCode)
	{
		$query=$this->db7->query("CALL update_sending_fsu('".$tablename."','".$MessageSent."','".$KeyCode."');"); 
		return $query->result();
	}
}