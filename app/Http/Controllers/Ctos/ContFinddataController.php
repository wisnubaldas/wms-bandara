<?php

namespace App\Http\Controllers\Ctos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Warehouse\ImpBreakdownDetail;
use App\Models\Warehouse\ImpObdetail;
use App\Models\Warehouse\ImpHostAwb;
use App\Models\Warehouse\ImpObHeader;
use App\Models\Warehouse\ImpBreakdownheader;
use App\Models\Warehouse\ImpIrReg;
use App\Models\Warehouse\EksBooking;
use App\Models\Warehouse\EksWeighingheader;
use App\Models\Warehouse\EksBuildupheader;
use App\Models\Warehouse\ImpDeliorderheader;
use App\Models\Warehouse\ImpDeliorderdetail;
use App\Models\Warehouse\EksInvoiceheader;
use App\Models\Warehouse\IncBreakdowndetail;
use App\Models\Warehouse\IncWeighingheader;
use App\Models\Warehouse\IncDeliorderheader;
class ContFinddataController extends Controller
{
	protected $imp_breakdown_d;
	protected $imp_ob_d;
	protected $imp_ob_h;
	protected $imp_host_awb;
	protected $imp_breakdown_h;
	protected $imp_ir_reg;
	protected $eks_booking;
	protected $eks_weighing_h;
	protected $eks_buildup_h;
	protected $imp_deliorder_h;
    public function __construct(ImpBreakdownDetail $imp_breakdown_d,ImpObdetail $imp_ob_d,ImpObHeader $imp_ob_h,
				ImpHostAwb $imp_host_awb,ImpBreakdownheader $imp_breakdown_h,ImpIrReg $imp_ir_reg,
				EksBooking $eks_booking,EksWeighingheader $eks_weighing_h, EksBuildupheader $eks_buildup_h,
				ImpDeliorderheader $imp_deliorder_h){
        
					$this->imp_breakdown_d = $imp_breakdown_d;
					$this->imp_ob_d = $imp_ob_d;
					$this->imp_ob_h = $imp_ob_h;
					$this->imp_host_awb = $imp_host_awb;
					$this->imp_breakdown_h = $imp_breakdown_h;
					$this->imp_ir_reg = $imp_ir_reg;
					$this->eks_booking = $eks_booking;
					$this->eks_weighing_h = $eks_weighing_h;
					$this->eks_buildup_h = $eks_buildup_h;
					$this->imp_deliorder_h = $imp_deliorder_h;

    }
    public function get_list_master_breakdowndetail($token,$MasterAWB=null)
	{
		if(!is_null($MasterAWB))$this->imp_breakdown_d->where('MasterAWB',$MasterAWB);	
		$this->imp_breakdown_d->where('token',$token);	
		$this->imp_breakdown_d->orderBy('DateOfBreakdown','DESC');	
		$this->imp_breakdown_d->limit(50);
		return $this->imp_breakdown_d->get();
	}
	
	public function get_list_master_obdetail($token,$MasterAWB=null)
	{
		$this->imp_ob_d->distinct();			
		if(!is_null($MasterAWB))$this->imp_ob_d->whereLike('MasterAWB',$MasterAWB);
		$this->imp_ob_d->where('token',$token);			
		$this->imp_ob_d->order_by('DateOfBreakdown','DESC');	
		$this->imp_ob_d->limit(50);
		return $this->imp_ob_d->get();
	}
	
	public function get_list_hawb_detail($token,$AgenCode,$HostAWB=null)
	{
		$this->imp_host_awb->distinct();			
		if(!is_null($HostAWB))$this->imp_host_awb->where('HostAWB',$HostAWB);	
		//$this->db7->where('AgenCode=',$AgenCode);	
		$this->imp_host_awb->where('token',$token);
		$this->imp_host_awb->where('void',0);
		$this->imp_host_awb->where('flagDO',0);			
		return $this->imp_host_awb->get();
	}

	public function get_list_imp_breakdownheader($token,$gabung=null)
	{
		$q = $this->imp_breakdown_h->distinct();
		$q->selectRaw('*,CONCAT(AirlinesCode,FlightNumber,DateOfFlight) as gabung');	
		$q->where('token',$token);
		//if(!is_null($gabung))$this->db7->where('CONCAT(AirlinesCode,FlightNumber,DateOfFlight)',$gabung);	
		if(!is_null($gabung))$q->like('BreakdownNumber',$gabung);	
		$q->orderBy('DateOfFlight','ASC');	
		$q->limit(50);
		return $q->get();
	}
	
	public function get_list_imp_obheader($token,$gabung=null)
	{
		$q = $this->$this->imp_ob_h->distinct()
								->selectRaw('*,CONCAT(WhOperatorCode,DateOfOveride) as gabung')
								->where('token',$token)
								->order_by('DateOfOveride','ASC')
								->limit(50);
		if(!is_null($gabung))$q->like('BreakdownNumber',$gabung);	
		return $q->get();
	}
	
	public function get_list_imp_irreg($token,$gabung=null)
	{
		$q = $this->imp_ir_reg->distinct()->selectRaw('*,CONCAT(AirlinesCode,DateOfFlight) as gabung')
		->where('token',$token);
		if(!is_null($gabung))$q->where('CONCAT(AirlinesCode,DateOfFlight)',$gabung);
		return $q->get();
	}
	
	public function get_list_imp_NOA_masterAWB($token,$MasterAWB=null)
	{
		// nested query
		// $this->db7->select('BreakdownNumber,MasterAWB,AirlinesCode, FlightNumber, OriginCode, Pieces, Netto');
		// $this->db7->from('imp_breakdowndetail');		
		// if(!is_null($MasterAWB))$this->db7->where('MasterAWB',$MasterAWB);
		// $this->db7->where('NOA=0');
		// $this->db7->where('token',$token);
		// $query1 = $this->db7->get_compiled_select();
		
		// $this->db7->select('BreakdownNumber,MasterAWB,AirlinesCode, FlightNumber, OriginCode, Pieces, Netto');
		// $this->db7->from('imp_obdetail');		
		// if(!is_null($MasterAWB))$this->db7->where('MasterAWB',$MasterAWB);
		// $this->db7->where('NOA=0');
		// $this->db7->where('token',$token);
		// $query2 = $this->db7->get_compiled_select();
		// $query = $this->db7->query($query1 . ' UNION ' . $query2);
		// return $query->result();
	}
	
	public function get_list_eks_booking($token,$gabung=null)
	{
		$q = $this->eks_booking->distinct()
		->selectRaw('*,CONCAT(AirlinesCode,DateOfFlight) as gabung')
		->where('token',$token);
		if(!is_null($gabung))$q->where('CONCAT(AirlinesCode,DateOfFlight)',$gabung);	
		return $q->get();
	}
	
	public function get_list_eks_weighing_master($token,$MasterAWB=null)
	{
		$q = $this->eks_weighing_h->distinct()->where('token',$token);
		if(!is_null($MasterAWB))$q->where('MasterAWB',$MasterAWB);	
		return $q->get();
	}
	
	public function get_list_eks_buildupheader($token,$gabung=null)
	{
		$q = $this->eks_buildup_h->distinct()
					->selectRaw('*,CONCAT(AirlinesCode,FlightNumber,DateOfFlight) as gabung')
					->where('token',$token);
		if(!is_null($gabung))$q->where('CONCAT(AirlinesCode,FlightNumber,DateOfFlight)',$gabung);	
		return $q->get();
	}
	
	public function get_list_imp_deliorderheader($token,$DONumber=null)
	{
		$q = $this->imp_deliorder_h->with('detail')->where('token',$token);
		if(!is_null($DONumber))$q->like('DONumber',$DONumber);		
		return $q->get();
	}
	
	public function get_list_invoiceheader($token,$WhCode,$MasterAWB=null)
	{
		if (in_array($WhCode,['WHEKP','WHIMP'])) {
			$q = EksInvoiceheader::with('detail')->where('token',$token);
			if(!is_null($MasterAWB))$q->where('MasterAWB',$MasterAWB);
		}else{
			return response()->json([
						'message' => $WhCode.' tidak sesuai dengan code warehouse',
					],500);
		}
		
		return $q->get();
	}
	
	public function get_list_doc_delivery_hawb($token,$Consigneename=null)
	{
		$q = ImpHostAwb::distinct('imp_deliorderheader.*')
			->selectRaw('JOIN imp_deliorderdetail ON imp_hostawb.HostAWB = imp_deliorderdetail.HostMAWB
							JOIN imp_deliorderheader ON imp_deliorderdetail.DONumber = imp_deliorderheader.DONumber')
			->where('imp_deliorderheader.token', $token)
			->where('imp_hostawb.void', 0)
			->where('imp_deliorderdetail.void', 0)
			->where('imp_deliorderheader.void', 0)
			->where('flagDO', 1);
		if(!is_null($Consigneename))$q->where('Consigneename',$Consigneename);
		return $q->get();
	}
	
	public function get_list_doc_delivery($token,$MasterAWB=null)
	{
		$q = ImpDeliorderheader::distinct('imp_deliorderdetail.*')
			->with('detail')
			->where('token', $token)
			->where('void', 0)
			->where('imp_deliorderdetail.void', 0)
			->whereRaw("InvoiceNumber is null OR InvoiceNumber =''")
			->where('flagPOD', 0);
		if(!is_null($MasterAWB))$q->like('a.MasterAWB',$MasterAWB);
		return $q->get();
	}
	
	public function get_list_delivery_for_cargo_out($token,$DONumber=null)
	{
		$q = ImpDeliorderheader::with('detail')
			->where('token', $token)
			->where('void', 0)
			->whereRaw("dateofout is null or dateofout=''");
		if(!is_null($DONumber))$q->like('a.DONumber',$DONumber);		
		return $q->get();
	}
	
	public function get_list_inc_breakdowndetail($token,$MasterAWB=null)
	{
		$q = IncBreakdowndetail::where('token', $token)
			->whereRaw('id_proof is null')
			->orderBy('DateOfBreakdown', 'DESC')
			->limit(50)
			->distinct();
		if(!is_null($MasterAWB))$q->where('MasterAWB',$MasterAWB);
		return $q->get();
	}
	
	public function get_list_inc_weighing($token,$ProofNumber=null)
	{
		$q = IncWeighingheader::distinct()
			->where('token', $token);
		if(!is_null($ProofNumber))$q->where('ProofNumber',$ProofNumber);
		return $q->first();
	}
	
	public function get_list_inc_delivery($token,$DONumber=null)
	{
		$q = IncDeliorderheader::distinct()
			->where('token', $token);
		if(!is_null($DONumber))$q->where('DONumber',$DONumber);
		return $q->first();
	}
}
