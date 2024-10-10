<?php

namespace App\Http\Controllers\api\Cont;

use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\TPS\ThInboundRepositoryEloquent;
use App\Http\Requests\TPS\ThInboundRequest;
/**
 * @group CloudStatusController
 * 
 */

class CloudStatusController extends Controller
{
    protected $inbound;
    public function __construct(ThInboundRepositoryEloquent $inbound)
    {
        $this->inbound = $inbound;
    }
    /**
     * All Cloud Status
     *
     * @responseFile responses/CloudStatus.index.json
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->inbound->paginate(10);
    }

    /**
     * Create CloudStatus
     * 
     * @authenticated
     * @response {
     *      "status": 200,
     *      "success": true
     * }
     *
     * @param  ThInboundRequest  $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(ThInboundRequest $request)
    {
        $request->validated();
        return $this->inbound->create($request->all());
    }

    /**
     * Show data by id.
     * 
     * @pathParam id integer required
     * The ID of the item to retrieve. Example: 10
     * 
     * @responseFile responses/CloudStatus.index.json
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified CloudStatus.
     */
    public function update(ThInboundRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified CloudStatus.
     */
    public function destroy(string $id)
    {
        //
    }
}
