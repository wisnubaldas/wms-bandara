<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
class ResponModel extends CI_Model {
	public $TPSONLINE;
	public function __construct()
		{
			parent::__construct();
			//Do your magic here
			$this->TPSONLINE = $this->load->database('db_tpsonline', TRUE);
		}
		
	public function insert_updatebc11($table,$awb)
	{
		$this->TPSONLINE->insert('master_bc11',compact('no_bc11','tgl_bc11','nm_angkut','tgl_tiba','no_voy_flight'));
	}
		
	public function insert_respon_asal_header($table,$awb)
	{
		$this->TPSONLINE->insert('mohon_resp_plp',compact('kd_kantor','kd_tps_asal','kd_tps_tujuan','ref_number','gudang_asal',
						'gudang_tujuan','no_plp','tgl_plp','alasan_reject','call_sign','nm_angkut','no_voy_flight','tgl_tiba',
						'no_bc11','tgl_bc11','no_surat','tgl_surat'));				
	}
	
	public function insert_respon_asal_detail($table,$awb)
	{
		$this->TPSONLINE->insert('mohon_resp_plp_det',compact('detail_plp','jns_kms','jml_kms','no_bl_awb','tgl_bl_awb','fl_setuju'));				
	}

	public function insert_respon_tujuan_header($table,$awb)
	{
		$this->TPSONLINE->insert('mohon_resp_plp_tuj',compact('kd_kantor','kd_tps_asal','kd_tps_tujuan','ref_number','gudang_asal',
							'gudang_tujuan','no_plp','tgl_plp','alasan_reject','call_sign','nm_angkut','no_voy_flight','tgl_tiba',
							'no_bc11','tgl_bc11','no_surat','tgl_surat'));
	}
	
	public function insert_respon_tujuan_detail($table,$awb)
	{
		$this->TPSONLINE->insert('mohon_resp_plp_tuj_det',compact('detail_plp','jns_kms','jml_kms','no_bl_awb','tgl_bl_awb',
							'consignee','fl_setuju'));		
	}
	
	public function insert_responbatal_asal_header($table,$awb)
	{
		$this->TPSONLINE->insert('batal_resp_plp',compact('kd_kantor','kd_tps_asal','kd_tps_tujuan','ref_number','gudang_asal',
							'gudang_tujuan','no_plp','tgl_plp','no_batal_plp','tgl_batal_plp','alasan_batal'));
	}
	
	public function insert_responbatal_asal_detail($table,$awb)
	{
		$this->TPSONLINE->insert('batal_resp_plp_det',compact('detail_plp','jns_kms','jml_kms','no_bl_awb','tgl_bl_awb','fl_setuju')
	}
	
	public function insert_responbatal_tujuan_header($table,$awb)
	{
		$this->TPSONLINE->insert('batal_resp_plp_tuj',compact('kd_kantor','kd_tps_asal','kd_tps_tujuan','ref_number','gudang_asal',
							'gudang_tujuan','no_plp','tgl_plp','no_batal_plp','tgl_batal_plp','alasan_batal'));
	}

	public function insert_responbatal_tujuan_detail($table,$awb)
	{
		$this->TPSONLINE->insert('batal_resp_plp_tuj_det',compact('detail_plp','jns_kms','jml_kms','no_bl_awb','tgl_bl_awb',
							'consignee','fl_setuju'));
	}
	
}

/* End of file BcTpsModel.php */
/* Location: ./application/models/BcTpsModel.php */