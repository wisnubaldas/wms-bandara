<?php

namespace App\Repositories\Eloquent\WarehouseJKT;

use App\Contracts\Repositories\WarehouseJKT\MstAirlinesRepository;
use App\Models\WarehouseJKT\MstAirlines;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class MstAirlinesRepositoryEloquent.
 */
class MstAirlinesRepositoryEloquent extends BaseRepository implements MstAirlinesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return MstAirlines::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
