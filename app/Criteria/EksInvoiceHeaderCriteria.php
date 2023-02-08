<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class EksInvoiceHeaderCriteria.
 *
 * @package namespace App\Criteria;
 */
class EksInvoiceHeaderCriteria implements CriteriaInterface
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
        return $model->with([
                        'detail'=>function($detail){
                            return $detail->with([
                                'weighing'=>function($weghing){
                                    return $weghing->with('dtl_weigh');
                            }]);
                    }])
                    ->where('PaymentCode','!=','F')
                    ->whereNotIn('AgreementCode',['FX-MAWB']);
    }
}
