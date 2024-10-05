<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\WarehouseJKT\MstAirlinesRepositoryEloquent;
use App\Http\Requests\MstAirlines;
class MstAirlinesController extends Controller
{
    protected $airlines;
    public function __construct(MstAirlinesRepositoryEloquent $airlines)
    {
        $this->airlines = $airlines;
    }
    /**
     * Get Paginate Airlines
     */
    public function index()
    {
        return $this->airlines->paginate(10, ["Noid", "TwoLetterCode", "ThreeLetterCode", "AirlinesName", "CountryCode", "Actived", "Void", "KodeGudangByCustom", "WHcode", "activeGud", "flag_ekspor", "flag_import", "flag_outgoing", "flag_incoming", "flag_plp"]);
    }

    /**
     * Create Airlines.
     * 
     * @response array{status: string, message: string}
     */
    public function store(MstAirlines $request)
    {

       $request->validated();
       return response()
            ->json(['status' => 'ok', 'message' => 'Succsess create data']);
    }

    /**
     * Display the specified resource.
     * 
     * @response array{data:airlines[]}
     */
    public function show(string $id)
    {
        return $this->airlines->find($id);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @response array{status: string, message: string}
     */
    public function update(MstAirlines $request, string $id)
    {
        $status = $this->airlines->update($request->all(),$id);
        return response()
            ->json(['status' => $status, 'message' => 'Succsess update data']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
