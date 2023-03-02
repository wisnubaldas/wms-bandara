<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;
use Carbon\Carbon;

/**
 * Class InvByDateCriteria.
 *
 * @package namespace App\Criteria;
 */
class InvByDateCriteria implements CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        return $model
                    ->where('DateOfTransaction', $this->create_date()->tanggal)
                    ->whereBetween('TimeOfTransaction',[
                                                $this->create_date()->start,
                                                $this->create_date()->end
                                            ]);
    }
    private function create_date()
    {
        $date = Carbon::now();
        dump($date);
        $this->tanggal = $date->format('Y-m-d');
        $this->start = $date->subMinutes(5)->format('H:i');
        $this->end = $date->format('H:i');
        return $this;
    }
}
