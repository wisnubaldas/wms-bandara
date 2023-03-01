<?php

namespace App\UseCase;

use App\Repositories\ImpInvoiceheaderRepository;
use App\Repositories\EksInvoiceHeaderRepository;

use App\Http\Resources\ImportResource;
use App\Criteria\InvByDateCriteria;
use App\Criteria\EksInvoiceHeaderCriteria;

/**
 * Class UseCase.
 *
 * @package namespace App\UseCase;
 */
class SendingInvoiceUseCase implements SendingInvoiceUseCaseInterface
{
    protected $repository;
    protected $eksport;
    public function __construct(ImpInvoiceheaderRepository $repository, 
                                EksInvoiceHeaderRepository $eksport) {
        $this->repository = $repository;
        $this->eksport = $eksport;
    }

    public function import_invoice($date = null)
    {
        // ini buat presenter nya
        $this->repository->setPresenter("App\\Presenters\\InvoiceErpPresenter");
        if ($date) {
            return $this->repository
                ->with(['detail'=>function($q){
                    return $q->with(['do']);
                }])->where('DateOfTransaction',$date)->get();

        }else {
            // ini criteria kalo mau tarik data by date
            $this->repository->pushCriteria(InvByDateCriteria::class);
            return $this->repository
                    ->with(['detail'=>function($q){
                        return $q->with(['do']);
                    }])->all();
        }
        
    }
    public function eksport_invoice($date = null)
    {
        $this->eksport->setPresenter("App\\Presenters\\EksInvoiceHeaderPresenter");
        $this->eksport->pushCriteria(EksInvoiceHeaderCriteria::class);
        if($date){
            return $this->eksport->where('DateOfTransaction',$date)->get();
        }else{
             $this->eksport->pushCriteria(InvByDateCriteria::class);
            return $this->eksport->all();
        }
       
        // return $this->eksport->findWhereIn('InvoiceNumber',['BGD1.INV.22.356498']);
    }
    public function pecah_pos_invoice()
    {
        # code...
    }

}
