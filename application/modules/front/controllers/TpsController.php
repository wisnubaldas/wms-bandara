<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;
class TpsController extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tps/get_imp_in');
		
	}
	public function gatein()
	{
		$data['title'] = ['Menu Manager','Page','Menu Manager','Menu List','index'];
		return $this->parser->parse('tps/gatein',$data);
	}
	public function gateout()
	{
		$data['title'] = ['Menu Manager','Page','Menu Manager','Menu List','index'];
		return $this->parser->parse('tps/gateout',$data);
	}
	public function gateinGrid()
	{
		$search = $this->input->get('search');
		if(isset($search['value']) && strlen($search['value']) >= 12)
		{
			$data = get_imp_in::select(['tg_tiba','ref_num','no_bl_awb','no_master_bl_awb','respon'])
							->where('no_bl_awb','like',$search['value'].'%')
							->get()->toArray();
			return $this->output
						->set_content_type('application/json')
						->set_status_header(200)
						->set_output(json_encode(['data'=> $data]));
		}else{
			$data = get_imp_in::select(['date_update','ref_num','no_bl_awb','no_master_bl_awb','respon'])
			->where('date_update','like',date('Y-m-d',strtotime('now')).'%')
			->orderBy('date_update','DESC')
			->limit(1000)
			->get()->toArray();
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(['data'=> $data]));
		}
		
	}
	public function uploadGateIn()
	{	
				$config['encrypt_name'] 		= TRUE;
				$config['upload_path']          = './files/';
				$config['allowed_types']		= '*';
                $config['max_size']             = 100000;
                // $config['max_width']            = 1024;
				// $config['max_height']           = 768;
				$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('input-b2'))
		{
				return $this->output
							->set_content_type('application/json')
							->set_status_header(500)
							->set_output(json_encode(['error'=> $this->upload->display_errors()]));
		}
		else
		{
				$result['data'] = [];
				$data = $this->upload->data();
				$sheetnames = ['Header', 'Detil'];
				$reader = IOFactory::createReader('Xls');
				$reader->setLoadSheetsOnly($sheetnames);
				try {
					$spreadsheet = $reader->load($data['full_path']);
					$loadedSheetNames = $spreadsheet->getSheetNames();
				foreach ($loadedSheetNames as $sheetIndex => $loadedSheetName) {
					$spreadsheet->setActiveSheetIndexByName($loadedSheetName);
					$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
					array_push($result['data'],$sheetData);
				}
				return $this->output
							->set_content_type('application/json')
							->set_status_header(200)
							->set_output(json_encode($result));
				} catch (Exception $e) {
					return $this->output
							->set_content_type('application/json')
							->set_status_header(500)
							->set_output(json_encode(['error'=> $e->getMessage()]));
				}
				
		}
	}
	public function postGateIn()
	{
		$data = $this->input->post();
		$insert = get_imp_in::insert($data['data']);
		if($insert)
		{
			return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(['status'=>'sukses']));
		}else{
			return $this->output
            ->set_content_type('application/json')
            ->set_status_header(500)
            ->set_output(json_encode(['status'=>'gagal insert']));
		}
	}
	public function gateKodeDok()
	{
		$id = $this->input->get('id');
		$data = $this->kodeDokModel->where('nilai',$id)->get_all();
		return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
	}
}

/* End of file TpsController.php */
/* Location: ./application/modules/front/controllers/TpsController.php */