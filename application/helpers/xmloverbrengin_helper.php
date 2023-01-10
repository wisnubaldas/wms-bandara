<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('xmlplpmohon'))
{
	function xmlplpmohon($v)
	{
		$xml_post_string = '<?xml version="1.0"?>'
                .'<DOCUMENT xmlns="loadmohonplp.xsd">'
				.    '<LOADPLP>'
                .        '<HEADER>'
				.           '<KD_KANTOR>'.$v->kd_kantor.'</KD_KANTOR>'
				.           '<TIPE_DATA>'.$v->tipe_data.'</TIPE_DATA>'
				.           '<KD_TPS_ASAL>'.$v->kd_tps_asal.'</KD_TPS_ASAL>'
				.           '<REF_NUMBER>'.$v->ref_number.'</REF_NUMBER>'
				.           '<NO_SURAT>'.$v->no_surat.'</NO_SURAT>'
				.           '<TGL_SURAT>'.$v->tgl_surat.'</TGL_SURAT>'
				.           '<GUDANG_ASAL>'.$v->gudang_asal.'</GUDANG_ASAL>'
				.           '<KD_TPS_TUJUAN>'.$v->kd_tps_tujuan.'</KD_TPS_TUJUAN>'
				.           '<GUDANG_TUJUAN>'.$v->gudang_tujuan.'</GUDANG_TUJUAN>'
				.           '<KD_ALASAN_PLP>'.$v->kd_alasan_plp.'</KD_ALASAN_PLP>'
				.           '<YOR_ASAL>'.$v->yor_asal.'</YOR_ASAL>'
				.           '<YOR_TUJUAN>'.$v->yor_tujuan.'</YOR_TUJUAN>'
				.           '<CALL_SIGN>'.$v->call_sign.'</CALL_SIGN>'
				.           '<NM_ANGKUT>'.$v->nm_angkut.'</NM_ANGKUT>'
				.           '<NO_VOY_FLIGHT>'.$v->no_voy_flight.'</NO_VOY_FLIGHT>'
				.           '<TGL_TIBA>'.$v->tgl_tiba.'</TGL_TIBA>'
				.           '<NO_BC_11>'.$v->no_bc11.'</NO_BC_11>'
				.           '<TGL_BC11>'.$v->tgl_bc11.'</TGL_BC11>'
				.           '<NM_PEMOHON>'.$v->nm_pemohon.'</NM_PEMOHON>'
				.        '</HEADER>'
				.		 '<DETIL>'
				.            '<KMS>'
				.                '<JNS_KMS>'.$v->jns_kms.'</JNS_KMS>'
				.                '<JML_KMS>'.$v->jml_kms.'</JML_KMS>'
				.                '<NO_BL_AWB>'.$v->no_bl_awb.'</NO_BL_AWB>'
				.                '<TGL_BL_AWB>'.$v->tgl_bl_Awb.'</TGL_BL_AWB>'
				.            '</KMS>'
				.        '</DETIL>'
				.	'</LOADPLP>'
				.'</DOCUMENT>';
        return $xml_post_string;	
	}
}
	
if ( ! function_exists('xmlplpbatal'))
{
	function xmlplpbatal($v)
	{
		$xml_post_string = '<?xml version="1.0"?>'
                .'<DOCUMENT xmlns="loadbatalplp.xsd">'
				.    '<BATALPLP>'
                .        '<HEADER>'
				.           '<KD_KANTOR>'.$v->kd_kantor.'</KD_KANTOR>'
				.           '<TIPE_DATA>'.$v->tipe_data.'</TIPE_DATA>'
				.           '<KD_TPS>'.$v->kd_tps.'</KD_TPS>'
				.           '<REF_NUMBER>'.$v->ref_number.'</REF_NUMBER>'
				.           '<NO_SURAT>'.$v->no_surat.'</NO_SURAT>'
				.           '<TGL_SURAT>'.$v->tgl_surat.'</TGL_SURAT>'
				.           '<NO_PLP>'.$v->no_plp.'</NO_PLP>'				
				.           '<TGL_PLP>'.$v->kd_tps_tujuan.'</TGL_PLP>'
				.           '<ALASAN>'.$v->kd_alasan_plp.'</ALASAN>'
				.           '<NO_BC_11>'.$v->no_bc11.'</NO_BC_11>'
				.           '<TGL_BC11>'.$v->tgl_bc11.'</TGL_BC11>'
				.           '<NM_PEMOHON>'.$v->nm_pemohon.'</NM_PEMOHON>'
				.        '</HEADER>';
				.		 '<DETIL>'
				.            '<KMS>'
				.                '<JNS_KMS>'.$v->jns_kms.'</JNS_KMS>'
				.                '<JML_KMS>'.$v->jml_kms.'</JML_KMS>'
				.                '<NO_BL_AWB>'.$v->no_bl_awb.'</NO_BL_AWB>'
				.                '<TGL_BL_AWB>'.$v->tgl_bl_Awb.'</TGL_BL_AWB>'
				.            '</KMS>'
				.        '</DETIL>'
				.	'</BATALPLP>'
				.'</DOCUMENT>';
        return $xml_post_string;	
	}
}

if ( ! function_exists('xmlbongkarmuat'))
{
	function xmlbongkarmuat($v)
	{
		$xml_post_string = '<?xml version="1.0"?>'
		.'<DOCUMENT xmlns="bongkarmuat.xsd">'
		.	'<REALISASI>'
		.		'<REF_NUMBER>'.$v->ref_number.'</REF_NUMBER>'
		.		'<KD_TPS>'.$v->kd_tps.'</KD_TPS>'
		.		'<KD_GUDANG>'.$v->kd_gudang.'</KD_GUDANG>'
		.		'<TGL_TIBA>'.$v->tgl_tiba.'</TGL_TIBA>'
		.		'<NM_ANGKUT>'.$v->nm_angkut.'</NM_ANGKUT>'
		.		'<NO_VOY_FLIGHT>'.$v->no_voy_flight.'</NO_VOY_FLIGHT>'
		.		'<CALL_SIGN>'.$v->call_sign.'</CALL_SIGN>'
		.		'<NO_BC11>'.$v->no_bc11.'</NO_BC11>'
		.		'<TGL_BC11>'.$v->tgl_bc11.'</TGL_BC11>'
		.		'<JML_BONGKAR_CONTAINER>'.$v->jml_bongkar_container.'</JML_BONGKAR_CONTAINER>'
		.		'<JML_BONGKAR_KEMASAN>'.$v->jml_bongkar_kemasan.'</JML_BONGKAR_KEMASAN>'
		.		'<JML_MUAT_CONTAINER>'.$v->jml_muat_container.'</JML_MUAT_CONTAINER>'
		.		'<JML_MUAT_KEMASAN>'.$v->jml_muat_kemasan.'</JML_MUAT_KEMASAN>'
		.		'<WK_AKTUAL_KEDATANGAN>'.$v->wk_aktual_kedatangan.'</WK_AKTUAL_KEDATANGAN>'
		.		'<WK_AKTUAL_KEBERANGKATAN>'.$v->wk_aktual_keberangkatan.'</WK_AKTUAL_KEBERANGKATAN>'
		.		'<FL_BATAL>'.$v->fl_batal.'</FL_BATAL>'
		.		'</REALISASI>'
		.'</DOCUMENT>';
		return $xml_post_string;	
	}
}

if ( ! function_exists('xmlserviceYOR'))
{
	function xmlserviceYOR($v)
	{
		$xml_post_string = '<?xml version="1.0"?>'
		.'<DOCUMENT>'
		.	'<LAPORAN>'
		.		'<REF_NUMBER>'.$v->.ref_number.'</REF_NUMBER>'
		.		'<KD_TPS>'.$v->.kd_tps.'</KD_TPS>'
		.		'<KD_GUDANG>'.$v->.kd_gudang.'</KD_GUDANG>'
		.		'<TGL_LAPORAN>'.$v->.tgl_laporan.'</TGL_LAPORAN>'
		.		'<IMPOR>'
		.			'<YOR>'.$v->yor.'</YOR>'
		.			'<KAPASITAS_LAPANGAN>'.$v->.kapasitas_lapangan'</KAPASITAS_LAPANGAN>'
		.			'<KAPASITAS_GUDANG>'.$v->kapasitas_gudang.'</KAPASITAS_GUDANG>'
		.			'<TOTAL_CONT>'.$v->total_cont.'</TOTAL_CONT>'
		.			'<TOTAL_KMS>'.$v->total_kms.'</TOTAL_KMS>'
		.			'<JML_CONT20F>'.$v->jml_cont20f.'</JML_CONT20F>'
		.			'<JML_CONT40F>'.$v->jml_cont40f.'</JML_CONT40F>'
		.			'<JML_CONT45F>'.$v->jml_cont45f.'</JML_CONT45F>'
		.		'</IMPOR>'
		.		'<EKSPOR>'
		.			'<YOR>'.$v->yor.'</YOR>'
		.			'<KAPASITAS_LAPANGAN>'.$v->kapasitas_lapangan.'</KAPASITAS_LAPANGAN>'
		.			'<KAPASITAS_GUDANG>'.$v->kapasitas_gudang.'</KAPASITAS_GUDANG>'
		.			'<TOTAL_CONT>'.$v->total_cont.'</TOTAL_CONT>'
		.			'<TOTAL_KMS>'.$v->total_kms.'</TOTAL_KMS>'
		.			'<JML_CONT20F>'.$v->.jml_cont20f.'</JML_CONT20F>'
		.			'<JML_CONT40F>'.$v->.jml_cont40f'</JML_CONT40F>'
		.			'<JML_CONT45F>'.$v->jml_cont45f.</JML_CONT45F>'
		.		'</EKSPOR>'
		.	'</LAPORAN>'
		.'</DOCUMENT>'
		return $xml_post_string;	
	}
}