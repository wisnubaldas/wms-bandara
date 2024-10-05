<?php

namespace App\Repositories\Eloquent\WarehouseJKT;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Contracts\Repositories\WarehouseJKT\MstArrivalRepository;
use App\Models\WarehouseJKT\MstArrival;
use App\Validators\WarehouseJKT\MstArrivalValidator;

/**
 * Class MstArrivalRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent\WarehouseJKT;
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
