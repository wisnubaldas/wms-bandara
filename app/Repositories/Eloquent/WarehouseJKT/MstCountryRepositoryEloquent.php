<?php

namespace App\Repositories\Eloquent\WarehouseJKT;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Contracts\Repositories\WarehouseJKT\MstCountryRepository;
use App\Models\WarehouseJKT\MstCountry;
use App\Validators\WarehouseJKT\MstCountryValidator;

/**
 * Class MstCountryRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent\WarehouseJKT;
 */
class MstCountryRepositoryEloquent extends BaseRepository implements MstCountryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return MstCountry::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
