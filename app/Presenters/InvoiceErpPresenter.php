<?php

namespace App\Presenters;

use App\Transformers\InvoiceErpTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class InvoiceErpPresenter.
 *
 * @package namespace App\Presenters;
 */
class InvoiceErpPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new InvoiceErpTransformer();
    }
}
