<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\MenusRepositoryEloquent;
use Illuminate\Http\Request;
use App\UseCase\MenusUseCase;
//:use-space

/**
 * @group MenusController
 *
 */

class MenusController extends Controller
{
    public $menu;
    public function __construct(MenusRepositoryEloquent $menu)
    {
        $this->menu = $menu;
    }

    /**
     * All MenusController data
     *
     * @responseFile responses/MenusController.json
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->menu->all();
    }
    /**
     * Return menu tree data
     *
     * @responseFile responses/MenusController.json
     * 
     * @return \Illuminate\Http\Response
     */
    public function menu_tree(MenusUseCase $menusUseCase): array
    {
        $menusUseCase->menu = $this->menu;
        return $menusUseCase->build();
    }
    public function detail_menu($id) {
        return $this->menu->findWhere(['parent_id'=>$id]);
    }
}
