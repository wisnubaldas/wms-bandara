<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Criteria\ImpInvoiceCriteria;
use App\Repositories\ImpInvoiceheaderRepository;
use App\Entities\ImpInvoiceheader;
use App\Validators\ImpInvoiceheaderValidator;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;

/**
 * Class ImpInvoiceheaderRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ImpInvoiceheaderRepositoryEloquent extends BaseRepository implements ImpInvoiceheaderRepository
{
     use CacheableRepository;
     
    // public function presenter()
    // {
    //     return "App\\Presenter\\InvoiceErpPresenter";
    // }
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return "App\\Models\\Warehouse\\ImpInvoiceheader";
        // return ImpInvoiceheader::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(ImpInvoiceCriteria::class));
    }
    
}
