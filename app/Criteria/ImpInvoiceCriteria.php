<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class ImpInvoiceCriteria.
 *
 * @package namespace App\Criteria;
 */
class ImpInvoiceCriteria implements CriteriaInterface
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
                    ->where('PaymentCode','!=','F')
                    ->whereNotIn('AgreementCode',['UPS-MAWB','XSYSMAWB']);
    }
}
