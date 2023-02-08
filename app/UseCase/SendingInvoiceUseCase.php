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

    public function import_invoice()
    {
        // ini buat presenter nya
        $this->repository->setPresenter("App\\Presenters\\InvoiceErpPresenter");
        // ini criteria kalo mau tarik data by date
        $this->repository->pushCriteria(InvByDateCriteria::class);
        return $this->repository
                ->with(['detail'=>function($q){
                    return $q->with(['do']);
                }])->all();
        
    }
    public function eksport_invoice()
    {
        // $this->eksport->setPresenter("App\\Presenters\\InvoiceErpPresenter");
        $this->eksport->pushCriteria(EksInvoiceHeaderCriteria::class);
        return $this->eksport->limit(2);
        // ->findWhere(['InvoiceNumber'=>'BGD1.INV.22.356498']);
    }
    public function pecah_pos_invoice()
    {
        # code...
    }
}
