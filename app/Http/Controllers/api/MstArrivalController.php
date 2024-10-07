<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Eloquent\WarehouseJKT\MstArrivalRepositoryEloquent;
use App\Http\Requests\WarehouseJKT\MstArrival;
/**
 * @group Master
 *
 * APIs for All Master Controller
 * 
 */
class MstArrivalController extends Controller
{
    protected $arrival;
    public function __construct(MstArrivalRepositoryEloquent $arrival) {
        $this->arrival = $arrival;
    }
    /**
     * Display a listing of the resource.
     * 
     * @response array{data:MstArrivalRepositoryEloquent[]}
     */
    public function index()
    {
        return $this->arrival->paginate(10);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MstArrival $request)
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
    public function update(MstArrival $request, string $id)
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
