<?php

namespace App\Presenters;

use App\Transformers\EksInvoiceHeaderTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class EksInvoiceHeaderPresenter.
 *
 * @package namespace App\Presenters;
 */
class EksInvoiceHeaderPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new EksInvoiceHeaderTransformer();
    }
}
