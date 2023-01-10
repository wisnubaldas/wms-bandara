<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Updflag_sitatext_model extends CI_Model
{
	private $db17;	
    function __construct()
    {
        parent::__construct();			
		$this->db17 = $this->load->database('rdinterchangemessage', TRUE);	
    }
	
	public function update_flag($namatable,$keycode,$namafield,$nilaiField)
	{
		$data = array(
					'MessageSent' => $nilaiField
				);
		$this->db17->where($namafield,$keycode);
		$query = $this->db17->update($namatable, $data);
		return $query->result();
	}
		
		
	
		
		
}
		
		
		
		
		
		
		
		