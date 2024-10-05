<?php

namespace App\Repositories\Eloquent\WarehouseJKT;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Contracts\Repositories\WarehouseJKT\MstAirlinesRepository;
use App\Models\WarehouseJKT\MstAirlines;

/**
 * Class MstAirlinesRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent\WarehouseJKT;
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
