<?php

namespace App\Http\Controllers\Ctos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ctos\MasterDepartement;
use App\Models\Ctos\LoginDepartement;
use App\Models\Ctos\LoginTps;
use App\Models\Ctos\LoginDatabase;
use App\Models\Ctos\LoginPassword;
use App\Models\Ctos\LoginUser;
use App\Models\Ctos\LoginPermission;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Resources\Ctos\ContLoginResource;
class ContLoginController extends Controller
{
    public function get_list_logindepartmen($EmployeeNumber)
	{
		$data = LoginDepartement::with('master_departement')
				->where('EmployeeNumber', '=', $EmployeeNumber)->get();
		return ContLoginResource::collection($data)->toArray(__FUNCTION__);
	}
	
	// ambil data untuk data user
	public function get_list_loginTPS($EmployeeNumber)
	{
		$data = LoginTps::with('master_tps')
				->where('EmployeeNumber', '=', $EmployeeNumber)
				->get();
		return ContLoginResource::collection($data)->toArray(__FUNCTION__);
	}
	
	public function get_login_database($EmployeeNumber,$TPScode=null,$DepartmenCode=null)
	{
		$x = LoginDatabase::where('EmployeeNumber', $EmployeeNumber);
		
		if($TPScode){
			$x->where('TPScode',$TPScode);
		}
		
		if($DepartmenCode){
			$x->where('DepartmenCode',$DepartmenCode);
		}
		return ContLoginResource::collection($x->get())->toArray(__FUNCTION__);
	}
	
	public function get_login_password($userID)
	{
		return LoginPassword::where('userID',$userID)->get();
	}
	
	public function get_login_user($fieldname,$EmployeeContent)
	{
		return LoginUser::where('EmployeeNumber',$EmployeeContent)
					->orWhere('EmployeeName',$EmployeeContent)->get();
	}
	
	public function get_login_username($EmployeeName=null)
	{
		return LoginUser::where('EmployeeName',$EmployeeName)->get();
	}
	
	public function get_login_permission($EmployeeName=null,$databaseName=null,$JenisGudang=null)
	{
		return LoginPermission::where();
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
