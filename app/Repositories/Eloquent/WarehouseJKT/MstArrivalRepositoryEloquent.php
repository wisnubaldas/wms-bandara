<?php

namespace App\Repositories\Eloquent\WarehouseJKT;

use App\Contracts\Repositories\WarehouseJKT\MstArrivalRepository;
use App\Models\WarehouseJKT\MstArrival;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class MstArrivalRepositoryEloquent.
 */
class MstArrivalRepositoryEloquent extends BaseRepository implements MstArrivalRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return MstArrival::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
