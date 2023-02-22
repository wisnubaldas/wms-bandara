<?php
/**
 * trait con login 
 */
namespace App\Http\Resources\Ctos;

trait ContLoginTrait
{
    public $method;
    public function method_nya($method)
    {
        $this->method = $method;
    }
}
