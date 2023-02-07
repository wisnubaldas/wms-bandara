<?php

namespace App\UseCase;

use App\Repositories\ImpInvoiceheaderRepository;
use App\Http\Resources\ImportResource;
use App\Criteria\InvByDateCriteria;

/**
 * Class UseCase.
 *
 * @package namespace App\UseCase;
 */
class SendingInvoiceUseCase implements SendingInvoiceUseCaseInterface
{
    protected $repository;
    public function __construct(ImpInvoiceheaderRepository $repository) {
        $this->repository = $repository;
    }

    public function invoice_data()
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
    
}
