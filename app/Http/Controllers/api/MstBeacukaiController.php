<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Eloquent\WarehouseJKT\MstBeacukaiRepositoryEloquent;
/**
 * @group MstBeacukaiController
 *
 * APIs for All Master Controller
 * 
 */
class MstBeacukaiController extends Controller
{
    protected $bc;
    public function __construct(MstBeacukaiRepositoryEloquent $bc) {
        $this->bc = $bc;
    }
    /**
     * Display a listing of the resource.
     * 
     * @response array{data:MstBeacukaiRepositoryEloquent[]}
     */
    public function index()
    {
        return $this->bc->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
