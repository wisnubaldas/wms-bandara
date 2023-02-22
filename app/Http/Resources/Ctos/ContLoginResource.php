<?php

namespace App\Http\Resources\Ctos;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ContLoginResource extends JsonResource
{
    use ContLoginTrait;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        dd($this->resource);

        return [
                'noid' => $this->noid,
                'EmployeeNumber' => $this->EmployeeNumber,
                'DepartmenCode' => $this->DepartmenCode,
                'DepartmenName' => $this->master_departement->DepartmenName,
                'CaptionForm' => $this->master_departement->CaptionForm,
            ];
    }
}
