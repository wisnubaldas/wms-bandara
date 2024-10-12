<?php

namespace App\Repositories\Eloquent\TPS;

use App\Contracts\Repositories\TPS\ThInboundRepository;
use App\Models\TPS\ThInbound;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class ThInboundRepositoryEloquent.
 */
class ThInboundRepositoryEloquent extends BaseRepository implements ThInboundRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ThInbound::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
