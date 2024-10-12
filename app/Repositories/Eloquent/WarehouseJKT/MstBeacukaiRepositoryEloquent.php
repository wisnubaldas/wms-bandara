<?php

namespace App\Repositories\Eloquent\WarehouseJKT;

use App\Contracts\Repositories\WarehouseJKT\MstBeacukaiRepository;
use App\Models\WarehouseJKT\MstBeacukai;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class MstBeacukaiRepositoryEloquent.
 */
class MstBeacukaiRepositoryEloquent extends BaseRepository implements MstBeacukaiRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return MstBeacukai::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
