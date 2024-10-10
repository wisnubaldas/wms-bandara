<?php

namespace App\Repositories\Eloquent\TPS;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Contracts\Repositories\TPS\ThOutbondRepository;
use App\Models\TPS\ThOutbond;
use App\Validators\TPS\ThOutbondValidator;

/**
 * Class ThOutbondRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent\TPS;
 */
class ThOutbondRepositoryEloquent extends BaseRepository implements ThOutbondRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ThOutbond::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
