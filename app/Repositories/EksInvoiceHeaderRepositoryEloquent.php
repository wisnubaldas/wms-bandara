<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
// use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EksInvoiceHeaderRepository;
use App\Models\Warehouse\EksInvoiceheader;
use App\Validators\EksInvoiceHeaderValidator;

/**
 * Class EksInvoiceHeaderRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class EksInvoiceHeaderRepositoryEloquent extends BaseRepository implements EksInvoiceHeaderRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return EksInvoiceheader::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        // $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
