<?php

namespace App\Http\Controllers\Ctos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ctos\MasterDepartement;
use App\Models\Ctos\LoginDepartement;
use App\Models\Ctos\LoginTps;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Resources\Ctos\ContLoginResource;
class ContLoginController extends Controller
{
    public function get_list_logindepartmen($EmployeeNumber)
	{
		$data = LoginDepartement::with('master_departement')
				->where('EmployeeNumber', '=', $EmployeeNumber)->get();
		return ContLoginResource::collection($data)->toArray('get_list_logindepartmen');
	}
	
	// ambil data untuk data user
	public function get_list_loginTPS($EmployeeNumber)
	{
		$data = LoginTps::with('master_tps')
				->where('EmployeeNumber', '=', $EmployeeNumber)
				->get();
		return ContLoginResource::collection($data)->toArray('get_list_loginTPS');
	}
	
	public function get_login_database($EmployeeNumber,$TPScode=null,$DepartmenCode=null)
	{
		echo "hellooo.....";
		
		// $listhasil = $this->login_model->login_database($EmployeeNumber,$TPScode,$DepartmenCode);
		// // menjadikan objek menjadi JSON
		// $hasil = json_encode($listhasil);
		
		// // mengeluarkan JSON ke browser
		// header('HTTP/1.1: 200');
		// header('Status: 200');
		// header('Content-Length: '.strlen($hasil));
        // exit($hasil);
	}
	
	public function get_login_password($userID)
	{
		$listhasil = $this->login_model->login_password($userID);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_login_user($fieldname,$EmployeeContent)
	{
		$listhasil = $this->login_model->login_user($fieldname,$EmployeeContent);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_login_username($EmployeeName=null)
	{
		$listhasil = $this->login_model->login_username($EmployeeName);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_login_permission($EmployeeName=null,$databaseName=null,$JenisGudang=null)
	{
		$listhasil = $this->login_model->login_permission($EmployeeName,$databaseName,$JenisGudang);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_datetime_Server()
	{
		$listhasil = $this->login_model->datetime_Server();
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
}
