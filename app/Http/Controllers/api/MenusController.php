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

    /**
     * Create MenusController
     * 
     * @authenticated
     * @response {
     *      "status": 200,
     *      "success": true
     * }
     *
     * @param  MenusControllerRequest  $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show MenusController data by id.
     * 
     * @pathParam id integer required
     * The ID of the item to retrieve. Example: 10
     * 
     * @responseFile responses/MenusController.json
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show MenusController data by id.
     * 
     * @pathParam id integer required
     * The ID of the item to retrieve. Example: 10
     * 
     * @authenticated
     * @param  MenusControllerRequest  $request
     * @responseFile responses/MenusController.json
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * DELETE MenusController
     */
    public function destroy(string $id)
    {
        //
    }
}
