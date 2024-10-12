<?php

namespace App\Models\WarehouseJKT;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class MstArrival.
 */
class MstArrival extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $connection = 'rdwarehouse_jkt';

    protected $table = 'mst_arrival';

    protected $primaryKey = 'Noid';

    // public $incrementing = false;
    // protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = ['Noid', 'TimeArrival', 'ActualTimeArrival', 'Arrival', 'AirlinesCode', 'FlightNo', 'AcType', 'PayLoad', 'Terminal', 'Remarks', 'DateOfArrival', 'DateOfEntry'];
}
