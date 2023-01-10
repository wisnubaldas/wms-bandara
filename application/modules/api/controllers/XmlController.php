<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class XmlController extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('xmlparsing');
        
    }
    private function no_ijin($kd_kantor)
    {
    	switch ($kd_kantor) {
    		case '050100':
    			return [
    						'NO_IJIN_TPS'=>'KM-004/KPC.03/2016',
    						'TGL_IJIN_TPS'=>'20160209'
    					];
    			break;
    		
    		case '080100':
				 return [
    						'NO_IJIN_TPS'=>'KEP-11/WBC.13/2018',
    						'TGL_IJIN_TPS'=>'20180124'
    					];   		
    			break;
    	}
    }
	public function xml_batal_plp($data)
	{
		$xml = '<DOCUMENT xmlns="loadbatalplp.xsd">';
			$xml .= '<BATALPLP>';
			$xml .= '<HEADER>';
				$xml .= '<KD_KANTOR>'.$data['kd_kantor'].'</KD_KANTOR>';
				$xml .= '<TIPE_DATA>'.$data['tipe_data'].'</TIPE_DATA>';
				$xml .= '<KD_TPS>'.$data['kd_tps'].'</KD_TPS>';
				$xml .= '<REF_NUMBER>'.$data['ref_number'].'</REF_NUMBER>';
				$xml .= '<NO_SURAT>'.$data['no_surat'].'</NO_SURAT>';
				$xml .= '<TGL_SURAT>'.$data['tgl_surat'].'</TGL_SURAT>';
				$xml .= '<NO_PLP>'.$data['no_plp'].'</NO_PLP>';
				$xml .= '<TGL_PLP>'.$data['tgl_plp'].'</TGL_PLP>';
				$xml .= '<ALASAN>'.htmlspecialchars($data['alasan']).'</ALASAN>';
				$xml .= '<NO_BC11>'.$data['no_bc11'].'</NO_BC11>';
				$xml .= '<TGL_BC11>'.$data['tgl_bc11'].'</TGL_BC11>';
				$xml .= '<NM_PEMOHON>'.$data['nm_pemohon'].'</NM_PEMOHON>';
				$xml .= '</HEADER>';
				$xml .= '<DETIL>';
						$xml .= '<KMS>';
							$xml .= '<JNS_KMS>'.$data['batal_detail']['jns_kms'].'</JNS_KMS>';
							$xml .= '<JML_KMS>'.$data['batal_detail']['jml_kms'].'</JML_KMS>';
							$xml .= '<NO_BL_AWB>'.$data['batal_detail']['no_bl_awb'].'</NO_BL_AWB>';
							$xml .= '<TGL_BL_AWB>'.$data['batal_detail']['tgl_bl_awb'].'</TGL_BL_AWB>';
						$xml .= '</KMS>';
				$xml .= '</DETIL>';
			$xml .= '</BATALPLP>';
		$xml .= '</DOCUMENT>';
		echo $xml;
		return $xml;
	}
    public function xml_total_bongkar_muat($data)
	{
		$xml = '<DOCUMENT>';
		foreach ($data as $v) {
			$xml .= '<REALISASI>';
			$xml .= '<REF_NUMBER>'.$v['ref_number'].'</REF_NUMBER>';
			$xml .= '<KD_TPS>'.$v['kd_tps'].'</KD_TPS>';
			$xml .= '<KD_GUDANG>'.$v['kd_gudang'].'</KD_GUDANG>';
			$xml .= '<TGL_TIBA>'.$v['tgl_tiba'].'</TGL_TIBA>';
			$xml .= '<NM_ANGKUT>'.$v['nm_angkut'].'</NM_ANGKUT>';
			$xml .= '<NO_VOY_FLIGHT>'.$v['no_voy_flight'].'</NO_VOY_FLIGHT>';
			$xml .= '<CALL_SIGN>'.$v['call_sign'].'</CALL_SIGN>';
			$xml .= '<NO_BC11>'.$v['no_bc11'].'</NO_BC11>';
			$xml .= '<TGL_BC11>'.$v['tgl_bc11'].'</TGL_BC11>';
			$xml .= '<JML_BONGKAR_CONTAINER>'.$v['jml_bongkar_container'].'</JML_BONGKAR_CONTAINER>';
			$xml .= '<JML_BONGKAR_KEMASAN>'.$v['jml_bongkar_kemasan'].'</JML_BONGKAR_KEMASAN>';
			$xml .= '<JML_MUAT_CONTAINER>'.$v['jml_muat_container'].'</JML_MUAT_CONTAINER>';
			$xml .= '<JML_MUAT_KEMASAN>'.$v['jml_muat_kemasan'].'</JML_MUAT_KEMASAN>';
			$xml .= '<WK_AKTUAL_KEDATANGAN>'.$v['wk_aktual_kedatangan'].'</WK_AKTUAL_KEDATANGAN>';
			$xml .= '<WK_AKTUAL_KEBERANGKATAN>'.$v['wk_aktual_keberangkatan'].'</WK_AKTUAL_KEBERANGKATAN>';
			$xml .= '<FL_BATAL>'.$v['fl_batal'].'</FL_BATAL>';
			$xml .= '</REALISASI>';
		}
		$xml .= '</DOCUMENT>';
		return $xml;
	}
    public function xml_plp_kemasan($data)
	{
        $xml ='<DOCUMENT xmlns="loadplp.xsd">';
		$xml .='<LOADPLP>';
				foreach ($data as $v) {
		$xml .=        '<HEADER>';
		$xml .=          '<KD_KANTOR>'.$v['kd_kantor'].'</KD_KANTOR>';
		$xml .=          '<TIPE_DATA>'.$v['tipe_data'].'</TIPE_DATA>';
		$xml .=          '<KD_TPS_ASAL>'.$v['kd_tps_asal'].'</KD_TPS_ASAL>';
		$xml .=          '<REF_NUMBER>'.$v['ref_number'].'</REF_NUMBER>';
		$xml .=          '<NO_SURAT>'.$v['no_surat'].'</NO_SURAT>';
		$xml .=          '<TGL_SURAT>'.$v['tgl_surat'].'</TGL_SURAT>';
		$xml .=          '<GUDANG_ASAL>'.$v['gudang_asal'].'</GUDANG_ASAL>';
		$xml .=          '<KD_TPS_TUJUAN>'.$v['kd_tps_tujuan'].'</KD_TPS_TUJUAN>';
		$xml .=           '<GUDANG_TUJUAN>'.$v['gudang_tujuan'].'</GUDANG_TUJUAN>';
		$xml .=           '<KD_ALASAN_PLP>'.$v['kd_alasan_plp'].'</KD_ALASAN_PLP>';
		$xml .=           '<YOR_ASAL>'.$v['yor_asal'].'</YOR_ASAL>';
		$xml .=           '<YOR_TUJUAN>'.$v['yor_tujuan'].'</YOR_TUJUAN>';
		$xml .=           '<CALL_SIGN>'.$v['call_sign'].'</CALL_SIGN>';
		$xml .=           '<NM_ANGKUT>'.$v['nm_angkut'].'</NM_ANGKUT>';
		$xml .=           '<NO_VOY_FLIGHT>'.$v['no_voy_flight'].'</NO_VOY_FLIGHT>';
		$xml .=           '<TGL_TIBA>'.$v['tgl_tiba'].'</TGL_TIBA>';
		$xml .=           '<NO_BC11>'.$v['no_bc11'].'</NO_BC11>';
		$xml .=           '<TGL_BC11>'.$v['tgl_bc11'].'</TGL_BC11>';
		$xml .=           '<NM_PEMOHON>'.$v['nm_pemohon'].'</NM_PEMOHON>';
		$xml .=        '</HEADER>';
		$xml .= 		'<DETIL>';
							foreach($v['plp_detail'] as $d)
							{
								$xml .= '<KMS>';
								$xml .=   '<JNS_KMS>'.$d['kd_kms'].'</JNS_KMS>';
								$xml .=   '<JML_KMS>'.$d['jml_kms'].'</JML_KMS>';
								$xml .=   '<NO_BL_AWB>'.$d['no_bl_awb'].'</NO_BL_AWB>';
								$xml .=   '<TGL_BL_AWB>'.$d['tgl_bl_Awb'].'</TGL_BL_AWB>';
								$xml .=  '</KMS>';
							}
		$xml .=         '</DETIL>';
				}
		$xml .=	'</LOADPLP>';
		$xml .='</DOCUMENT>';
		return $xml;	
		
	}
    
    public function xml_laporan_yor($data)
	{
		$xml = '<DOCUMENT>';
		foreach ($data as $v) {
			$xml .= '<LAPORAN>';
			$xml .= '<REF_NUMBER >'.$v['ref_number'].'</REF_NUMBER>';
			$xml .= '<KD_TPS>'.$v['kd_tps'].'</KD_TPS>';
			$xml .= '<KD_GUDANG>'.$v['kd_gudang'].'</KD_GUDANG>';
			$xml .= '<TGL_LAPORAN>'.$v['tgl_laporan'].'</TGL_LAPORAN>';
			$xml .= '<IMPOR>';
			$xml .= '<YOR>'.$v['imp_yor'].'</YOR>';
			$xml .= '<KAPASITAS_LAPANGAN>'.$v['imp_kap_lapangan'].'</KAPASITAS_LAPANGAN>';
			$xml .= '<KAPASITAS_GUDANG>'.$v['imp_kap_gudang'].'</KAPASITAS_GUDANG>';
			$xml .= '<TOTAL_CONT>'.$v['imp_total_conf'].'</TOTAL_CONT>';
			$xml .= '<TOTAL_KMS>'.$v['imp_total_kms'].'</TOTAL_KMS>';
			$xml .= '<JML_CONT20F>'.$v['imp_jml_cont20f'].'</JML_CONT20F>';
			$xml .= '<JML_CONT40F>'.$v['imp_jml_cont40f'].'</JML_CONT40F>';
			$xml .= '<JML_CONT45F>'.$v['imp_jml_cont45f'].'</JML_CONT45F>';
			$xml .= '</IMPOR>';
			$xml .= '<EKSPOR>';
			$xml .= '<YOR>'.$v['eks_yor'].'</YOR>';
			$xml .= '<KAPASITAS_LAPANGAN>'.$v['eks_kap_lapangan'].'</KAPASITAS_LAPANGAN>';
			$xml .= '<KAPASITAS_GUDANG>'.$v['eks_kap_gudang'].'</KAPASITAS_GUDANG>';
			$xml .= '<TOTAL_CONT>'.$v['eks_total_conf'].'</TOTAL_CONT>';
			$xml .= '<TOTAL_KMS>'.$v['eks_total_kms'].'</TOTAL_KMS>';
			$xml .= '<JML_CONT20F>'.$v['eks_jml_cont20f'].'</JML_CONT20F>';
			$xml .= '<JML_CONT40F>'.$v['eks_jml_cont40f'].'</JML_CONT40F>';
			$xml .= '<JML_CONT45F>'.$v['eks_jml_cont45f'].'</JML_CONT45F>';
			$xml .= '</EKSPOR>';
			$xml .= '</LAPORAN>';
		}
        $xml .= '</DOCUMENT>';
        return $xml;
	}
	private function ref_num($gtr)
    {
        $num = round(mt_rand(000000, 999999));
        // $milliseconds = round(microtime(true) * 1000);
        $refnum = $gtr.date('ymd').str_pad($num, 6,'0',STR_PAD_LEFT);
        // $refnum = $gtr.date('ymdHis');
        // $refnum = $gtr.date('ymd').substr($milliseconds, 7);
        return $refnum;
    }
    public function xml_timbun(array $data = [])
    {
        $xml = '<?xml version="1.0"?>';
        $xml .='<DOCUMENT xmlns="cocokms.xsd">';
                foreach ($data as $v) {
                	$mawb = newMawb($v['no_master_bl_awb']);
        $xml    .=    '<COCOKMS>';
        $xml    .=       '<HEADER>';
        $xml    .=          '<KD_DOK>'.$v['kd_dok'].'</KD_DOK>';
        $xml    .=           '<KD_TPS>'.$v['kd_tps'].'</KD_TPS>';
        $xml    .=           '<NM_ANGKUT>'.$v['nm_angkut'].'</NM_ANGKUT>';
        $xml    .=           '<NO_VOY_FLIGHT>'.$v['no_voy_flight'].'</NO_VOY_FLIGHT>';
        $xml    .=           '<CALL_SIGN>'.$v['call_sign'].'</CALL_SIGN>';
        $xml    .=           '<TGL_TIBA>'.date('Ymd',strtotime($v['tg_tiba'])).'</TGL_TIBA>';
        $xml    .=           '<KD_GUDANG>'.$v['kd_gudang'].'</KD_GUDANG>';
        $xml    .=           '<REF_NUMBER>'.$this->ref_num($v['kd_tps']).'</REF_NUMBER>';
        $xml    .=       '</HEADER>';
        $xml    .=       '<DETIL>';
        $xml    .=           '<KMS>';
        $xml    .=               '<NO_BL_AWB>'.$v['no_bl_awb'].'</NO_BL_AWB>';
        $xml    .=               '<TGL_BL_AWB>'.date('Ymd',strtotime($v['tgl_bl_awb'])).'</TGL_BL_AWB>';
        $xml    .=               '<NO_MASTER_BL_AWB>'.$mawb.'</NO_MASTER_BL_AWB>';
        $xml    .=               '<TGL_MASTER_BL_AWB>'.date('Ymd',strtotime($v['tgl_master_bl_awb'])).'</TGL_MASTER_BL_AWB>';
        $xml    .=               '<ID_CONSIGNEE>'.$v['id_consignee'].'</ID_CONSIGNEE>';
        $xml    .=               '<CONSIGNEE>'.htmlspecialchars($v['consignee']).'</CONSIGNEE>';
        $xml    .=               '<BRUTO>'.$v['bruto'].'</BRUTO>';
        $xml    .=               '<NO_BC11>'.$v['no_bc11'].'</NO_BC11>';
        $xml    .=               '<TGL_BC11>'.date('Ymd',strtotime($v['tgl_bc11'])).'</TGL_BC11>';
        $xml    .=               '<NO_POS_BC11>'.$v['no_pos_bc11'].'</NO_POS_BC11>';
        $xml    .=               '<CONT_ASAL>'.$v['cont_asal'].'</CONT_ASAL>';
        $xml    .=               '<SERI_KEMAS>'.$v['seri_kem'].'</SERI_KEMAS>';
        $xml    .=               '<KD_KEMAS>'.$v['kd_kem'].'</KD_KEMAS>';
        $xml    .=               '<JML_KEMAS>'.$v['jml_kem'].'</JML_KEMAS>';
        $xml    .=               '<KD_TIMBUN>'.$v['kd_timbun'].'</KD_TIMBUN>';
        $xml    .=               '<KD_DOK_INOUT>'.$v['kd_dok_inout'].'</KD_DOK_INOUT>';
        $xml    .=               '<NO_DOK_INOUT>'.$v['no_dok_inout'].'</NO_DOK_INOUT>';
        $xml    .=               '<TGL_DOK_INOUT>'.date('Ymd',strtotime($v['tgl_dok_inout'])).'</TGL_DOK_INOUT>';
        $xml    .=               '<WK_INOUT>'.$v['wk_inout'].'</WK_INOUT>';
        $xml    .=               '<KD_SAR_ANGKUT_INOUT>'.$v['kd_sar_angkut'].'</KD_SAR_ANGKUT_INOUT>';
        $xml    .=               '<NO_POL>'.$v['no_pol'].'</NO_POL>';
        $xml    .=               '<PEL_MUAT>'.$v['pel_muat'].'</PEL_MUAT>';
        $xml    .=               '<PEL_TRANSIT>'.$v['pel_transit'].'</PEL_TRANSIT>';
        $xml    .=               '<PEL_BONGKAR>'.$v['pel_bongkar'].'</PEL_BONGKAR>';
        $xml    .=               '<GUDANG_TUJUAN>'.$v['gudang_tujuan'].'</GUDANG_TUJUAN>';
        $xml    .=               '<KODE_KANTOR>'.$v['kode_kantor'].'</KODE_KANTOR>';
        $xml    .=               '<NO_DAFTAR_PABEAN>'.$v['no_daftar_pabean'].'</NO_DAFTAR_PABEAN>';
        $xml    .=               '<TGL_DAFTAR_PABEAN>'.date('Ymd',strtotime($v['tgl_daftar_pabean'])).'</TGL_DAFTAR_PABEAN>';
        $xml    .=               '<NO_SEGEL_BC>'.$v['no_segel_bc'].'</NO_SEGEL_BC>'; 
        $xml    .=               '<TGL_SEGEL_BC>'.$v['tg_segel_bc'].'</TGL_SEGEL_BC>';
        $xml    .=               '<NO_IJIN_TPS>'.$this->no_ijin($v['kode_kantor'])['NO_IJIN_TPS'].'</NO_IJIN_TPS>';
        $xml    .=               '<TGL_IJIN_TPS>'.$this->no_ijin($v['kode_kantor'])['TGL_IJIN_TPS'].'</TGL_IJIN_TPS>';
        $xml    .=           '</KMS>';
        $xml    .=       '</DETIL>';
        $xml    .=   '</COCOKMS>';
                }
        $xml    .='</DOCUMENT>';
        return $xml;
    }

    public function xml_plp_gtln($v)
	{
		
		/* $xml = '<?xml version="1.0" encoding="UTF-8" ?>';*/
        $xml ='<DOCUMENT xmlns="loadplp.xsd">';
		$xml .='<LOADPLP>';
		$xml .=        '<HEADER>';
		$xml .=          '<KD_KANTOR>'.$v['kd_kantor'].'</KD_KANTOR>';
		$xml .=          '<TIPE_DATA>'.$v['tipe_data'].'</TIPE_DATA>';
		$xml .=          '<KD_TPS_ASAL>'.$v['kd_tps_asal'].'</KD_TPS_ASAL>';
		$xml .=          '<REF_NUMBER>'.$v['ref_number'].'</REF_NUMBER>';
		$xml .=          '<NO_SURAT>'.$v['no_surat'].'</NO_SURAT>';
		$xml .=          '<TGL_SURAT>'.$v['tgl_surat'].'</TGL_SURAT>';
		$xml .=          '<GUDANG_ASAL>'.$v['gudang_asal'].'</GUDANG_ASAL>';
		$xml .=          '<KD_TPS_TUJUAN>'.$v['kd_tps_tujuan'].'</KD_TPS_TUJUAN>';
		$xml .=           '<GUDANG_TUJUAN>'.$v['gudang_tujuan'].'</GUDANG_TUJUAN>';
		$xml .=           '<KD_ALASAN_PLP>'.$v['kd_alasan_plp'].'</KD_ALASAN_PLP>';
		$xml .=           '<YOR_ASAL>'.$v['yor_asal'].'</YOR_ASAL>';
		$xml .=           '<YOR_TUJUAN>'.$v['yor_tujuan'].'</YOR_TUJUAN>';
		$xml .=           '<CALL_SIGN>'.$v['call_sign'].'</CALL_SIGN>';
		$xml .=           '<NM_ANGKUT>'.$v['nm_angkut'].'</NM_ANGKUT>';
		$xml .=           '<NO_VOY_FLIGHT>'.$v['no_voy_flight'].'</NO_VOY_FLIGHT>';
		$xml .=           '<TGL_TIBA>'.$v['tgl_tiba'].'</TGL_TIBA>';
		$xml .=           '<NO_BC11>'.$v['no_bc11'].'</NO_BC11>';
		$xml .=           '<TGL_BC11>'.$v['tgl_bc11'].'</TGL_BC11>';
		$xml .=           '<NM_PEMOHON>'.$v['nm_pemohon'].'</NM_PEMOHON>';
		$xml .=        '</HEADER>';
		$xml .= 		'<DETIL>';
								$xml .= '<KMS>';
								$xml .=   '<JNS_KMS>'.$v['plp_detail'][0]['kd_kms'].'</JNS_KMS>';
								$xml .=   '<JML_KMS>'.$v['plp_detail'][0]['jml_kms'].'</JML_KMS>';
								$xml .=   '<NO_BL_AWB>'.$v['plp_detail'][0]['no_bl_awb'].'</NO_BL_AWB>';
								$xml .=   '<TGL_BL_AWB>'.$v['plp_detail'][0]['tgl_bl_Awb'].'</TGL_BL_AWB>';
								$xml .=  '</KMS>';
		$xml .=         '</DETIL>';
		$xml .=	'</LOADPLP>';
		$xml .='</DOCUMENT>';
		return $xml;	
		
	}
}



/* End of file xmlController.php */
