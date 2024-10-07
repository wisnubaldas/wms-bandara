<?php

namespace App\Repositories\Eloquent\WarehouseJKT;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Contracts\Repositories\WarehouseJKT\MstDepartureRepository;
use App\Models\WarehouseJKT\MstDeparture;
use App\Validators\WarehouseJKT\MstDepartureValidator;

/**
 * Class MstDepartureRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent\WarehouseJKT;
 */
class MstDepartureRepositoryEloquent extends BaseRepository implements MstDepartureRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return MstDeparture::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
