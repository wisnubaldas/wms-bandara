<?php
/**
 * trait con login 
 */
namespace App\Http\Resources\Ctos;

trait ContLoginTrait
{
    public function cek_request($method)
    {
        
        switch ($method) {
            case 'get_list_logindepartmen':
                return $this->get_list_logindepartmen();
                break;
            case 'get_list_loginTPS':
                return $this->get_list_loginTPS();
                break;
            case 'get_login_database':
                return $this->get_login_database();
                break;
            default:
                return $this->resource;
                break;
        }
    }
    public function get_login_database()
    {
        return [
            "Noid" => $this->Noid,
            "userID" => $this->userID,
            "DatabaseName" => $this->DatabaseName,
            "EmployeeNumber" => $this->EmployeeNumber,
            "DatabaseCode" => $this->DatabaseCode,
            "TPScode" => $this->TPScode,
            "DepartmenCode" => $this->DepartmenCode,
            "void" => $this->void
        ];
    }
    public function get_list_loginTPS()
    {
        return [
            'TPScode' => $this->master_tps->TPScode,
            'TPSName' => $this->master_tps->TPSName,
            'TPSNPWP' => $this->master_tps->TPSNPWP,
            'plppassword' => $this->master_tps->plppassword,
            'gatepassword' => $this->master_tps->gatepassword,
            'TPSportname' => $this->master_tps->TPSportname,
            'active' => $this->master_tps->active,
        ];
    }
    public function get_list_logindepartmen()
    {
        return [
                'noid' => $this->noid,
                'EmployeeNumber' => $this->EmployeeNumber,
                'DepartmenCode' => $this->DepartmenCode,
                'DepartmenName' => $this->master_departement->DepartmenName,
                'CaptionForm' => $this->master_departement->CaptionForm,
            ];
    }
}
