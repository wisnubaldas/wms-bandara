<?php

namespace App\Repositories\Eloquent\WarehouseJKT;

use App\Contracts\Repositories\WarehouseJKT\MstCustomerRepository;
use App\Models\WarehouseJKT\MstCustomer;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class MstCustomerRepositoryEloquent.
 */
class MstCustomerRepositoryEloquent extends BaseRepository implements MstCustomerRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return MstCustomer::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
