<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Criteria\ImpInvoiceCriteria;
use App\Repositories\ImpInvoiceheaderRepository;
use App\Entities\ImpInvoiceheader;
use App\Validators\ImpInvoiceheaderValidator;

/**
 * Class ImpInvoiceheaderRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ImpInvoiceheaderRepositoryEloquent extends BaseRepository implements ImpInvoiceheaderRepository
{
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
