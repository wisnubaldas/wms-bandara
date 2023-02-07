<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ImpInvoiceheaderRepository;
use App\Http\Resources\ImportResource;
use App\Criteria\InvByDateCriteria;
class ImpInvoiceheaderController extends Controller
{
    protected $repository;
    public function __construct(ImpInvoiceheaderRepository $repository) {
        $this->repository = $repository;
    }
    public function all()
    {
        // $this->repository->pushCriteria(InvByDateCriteria::class);
        return new ImportResource($this->repository->paginate(10,['TotalWarehouseFee','InvoiceNumber']));
    }
}
