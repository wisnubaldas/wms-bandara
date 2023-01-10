<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlpController extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('plp/mohon','mohon');
		$this->load->model('plp/batal','batal');
	}
	public function mohon()
	{
		$postData = $this->input->post('ref_number');
		if($postData['ref_number'] == "")
		{
				//insert data
				$this->model->nama =$_POST('kd_kantor');
				$this->model->nama =$_POST('tipe_data');
				$this->model->nama =$_POST('kd_tps');
				$this->model->nama =$_POST('ref_number');
				$this->model->nama =$_POST('no_surat');
				$this->model->nama =$_POST('tgl_surat');
				$this->model->nama =$_POST('no_plp');
				$this->model->nama =$_POST('tgl_plp');
				$this->model->nama =$_POST('alasan');
				$this->model->nama =$_POST('no_bc11');
				$this->model->nama =$_POST('tgl_bc11');
				$this->model->nama =$_POST('nm_pemohon');
			

		}else
		{
			// Tampilkan Data dan keterangan
		}
	}

	public function mohon_detail()
	{
		$postData = $this->input->post('id_mohon','no_bl_awb');
		if($postData['ref_number'] == "")
		{
				//insert data
		}else
		{
			// Tampilkan Data dan keterangan
		}
	}
	
	public function batal()
	{
		$postData = $this->input->post('ref_number');
		if($postData['ref_number'] == "")
		{
				//insert data
		}else
		{
			// Tampilkan Data dan keterangan
		}
	}

	public function batal_detail()
	{
		$postData = $this->input->post('ref_number');
		if($postData['ref_number'] == "")
		{
				//insert data
		}else
		{
			// Tampilkan Data dan keterangan
		}
	}

}

/* End of file PlpController.php */
/* Location: ./application/modules/front/controllers/PlpController.php */