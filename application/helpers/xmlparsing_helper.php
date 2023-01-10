<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('make_refnumber'))
{
	function make_refnumber()
    {
        $num = mt_rand(100000, 999999);
        $refnum = "BGD1".date('ymd').str_pad($num, 6,'0',STR_PAD_LEFT);
        return $refnum;
    }
}
if ( ! function_exists('xmlTps'))
{
	function xmlTps($v)
	{
		$xml_post_string = '<?xml version="1.0"?>'
                .'<DOCUMENT xmlns="cocokms.xsd">'
                .    '<COCOKMS>'
                .        '<HEADER>'
                .           '<KD_DOK>'.$v->kd_dok.'</KD_DOK>'
                .            '<KD_TPS>'.$v->kd_tps.'</KD_TPS>'
                .            '<NM_ANGKUT>'.$v->nm_angkut.'</NM_ANGKUT>'
                .            '<NO_VOY_FLIGHT>'.$v->no_voy_flight.'</NO_VOY_FLIGHT>'
                .            '<CALL_SIGN>'.$v->call_sign.'</CALL_SIGN>'
                .            '<TGL_TIBA>'.date('Ymd',strtotime($v->tg_tiba)).'</TGL_TIBA>'
                .            '<KD_GUDANG>'.$v->kd_gudang.'</KD_GUDANG>'
                .            '<REF_NUMBER>'.make_refnumber().'</REF_NUMBER>'
                .        '</HEADER>'
                .        '<DETIL>'
                .            '<KMS>'
                .                '<NO_BL_AWB>'.$v->no_bl_awb.'</NO_BL_AWB>'
                .                '<TGL_BL_AWB>'.date('Ymd',strtotime($v->tgl_bl_awb)).'</TGL_BL_AWB>'
                .                '<NO_MASTER_BL_AWB>'.$v->no_master_bl_awb.'</NO_MASTER_BL_AWB>'
                .                '<TGL_MASTER_BL_AWB>'.date('Ymd',strtotime($v->tgl_master_bl_awb)).'</TGL_MASTER_BL_AWB>'
                .                '<ID_CONSIGNEE>'.$v->id_consignee.'</ID_CONSIGNEE>'
                .                '<CONSIGNEE>'.htmlspecialchars($v->consignee).'</CONSIGNEE>'
                .                '<BRUTO>'.$v->bruto.'</BRUTO>'
                .                '<NO_BC11>'.$v->no_bc11.'</NO_BC11>'
                .                '<TGL_BC11>'.date('Ymd',strtotime($v->tgl_bc11)).'</TGL_BC11>'
                .                '<NO_POS_BC11>'.$v->no_pos_bc11.'</NO_POS_BC11>'
                .                '<CONT_ASAL>'.$v->cont_asal.'</CONT_ASAL>'
                .                '<SERI_KEMAS>'.$v->seri_kem.'</SERI_KEMAS>'
                .                '<KD_KEMAS>'.$v->kd_kem.'</KD_KEMAS>'
                .                '<JML_KEMAS>'.$v->jml_kem.'</JML_KEMAS>'
                .                '<KD_TIMBUN>'.$v->kd_timbun.'</KD_TIMBUN>'
                .                '<KD_DOK_INOUT>'.$v->kd_dok_inout.'</KD_DOK_INOUT>'
                .                '<NO_DOK_INOUT>'.$v->no_dok_inout.'</NO_DOK_INOUT>'
                .                '<TGL_DOK_INOUT>'.date('Ymd',strtotime($v->tgl_dok_inout)).'</TGL_DOK_INOUT>'
                .                '<WK_INOUT>'.$v->wk_inout.'</WK_INOUT>'
                .                '<KD_SAR_ANGKUT_INOUT>'.$v->kd_sar_angkut.'</KD_SAR_ANGKUT_INOUT>'
                .                '<NO_POL>'.$v->no_pol.'</NO_POL>'
                .                '<PEL_MUAT>'.$v->pel_muat.'</PEL_MUAT>'
                .                '<PEL_TRANSIT>'.$v->pel_transit.'</PEL_TRANSIT>'
                .                '<PEL_BONGKAR>'.$v->pel_bongkar.'</PEL_BONGKAR>'
                .                '<GUDANG_TUJUAN>'.$v->gudang_tujuan.'</GUDANG_TUJUAN>'
                .                '<KODE_KANTOR>'.'050100'.'</KODE_KANTOR>'
                .                '<NO_DAFTAR_PABEAN>'.$v->no_daftar_pabean.'</NO_DAFTAR_PABEAN>'
                .                '<TGL_DAFTAR_PABEAN>'.date('Ymd',strtotime($v->tgl_daftar_pabean)).'</TGL_DAFTAR_PABEAN>'
                .                '<NO_SEGEL_BC></NO_SEGEL_BC>'
                .                '<TGL_SEGEL_BC></TGL_SEGEL_BC>'
                .                '<NO_IJIN_TPS>KM-004/KPC.03/2016</NO_IJIN_TPS>'
                .                '<TGL_IJIN_TPS>20160209</TGL_IJIN_TPS>'
                .            '</KMS>'
                .        '</DETIL>'
                .    '</COCOKMS>'
                .'</DOCUMENT>';
        return $xml_post_string;
	}
}