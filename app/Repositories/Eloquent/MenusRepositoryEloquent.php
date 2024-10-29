<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Contracts\Repositories\MenusRepository;
use App\Models\Menus;
use App\Validators\MenusValidator;

/**
 * Class MenusRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent;
 */
class MenusRepositoryEloquent extends BaseRepository implements MenusRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Menus::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
