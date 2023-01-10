<?php
ini_set('max_input_time', 0);
ini_set('max_execution_time', 0);
ini_set("memory_limit","-1");
set_time_limit(-1); 
defined('BASEPATH') OR exit('No direct script access allowed');
class Truncate_CI_Session extends MX_Controller{

  public function __construct(){
  
    parent::__construct();

    date_default_timezone_set('Asia/Jakarta');

    $this->tpsonline_mau = $this->load->database('tpsonline_mau', TRUE);
    
  }

  public function lock_truncate_ci_session() {
    
    $fp = fopen("lock_delete_ci_session.txt","w+");
    if (flock($fp,LOCK_EX | LOCK_NB)){
      fwrite($fp,"Working");
      $this->Truncate();
      flock($fp,LOCK_UN);
    }else{ 
      echo "Couldn't get the lock!";
    }
    fclose($fp);

  }

  public function Truncate() {

    $this->tpsonline_mau->query("TRUNCATE TABLE `ci_sessions`"); 
    echo "success";
  }

}