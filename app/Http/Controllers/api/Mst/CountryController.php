<?php

namespace App\Http\Controllers\api\Mst;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Eloquent\WarehouseJKT\MstCountryRepositoryEloquent;
use App\Http\Requests\WarehouseJKT\MstCountryRequest;
/**
 * @group CountryController
 *
 * APIs for App\Http\Controllers\api\Mst\CountryController::class
 * 
 */

class CountryController extends Controller
{
    protected $mstCountry;
    public function __construct(MstCountryRepositoryEloquent $mstCountry) {
        $this->mstCountry = $mstCountry;
    }
    /**
     * GET CountryController
     * 
     */
    public function index()
    {
        return $this->mstCountry->paginate(10);
    }

    /**
     * POST CountryController
     */
    public function store(MstCountryRequest $MstCountryRequest)
    {
        $MstCountryRequest->validated();
        return response()
        ->json(['status' => 'ok', 'message' => 'Succsess create data']);
    }

    /**
     * GET CountryController
     */
    public function show(string $id)
    {
        return $this->mstCountry->find($id);
    }

    /**
     * PUT, PATCH CountryController
     */
    public function update(MstCountryRequest $request, string $id)
    {
        $this->mstCountry->update($request->all(),$id);
        return response()
                ->json(['status' => 'ok', 'message' => 'Succsess update data']);
    }

    /**
     * DELETE CountryController
     */
    public function destroy(string $id)
    {
        //
    }
}
