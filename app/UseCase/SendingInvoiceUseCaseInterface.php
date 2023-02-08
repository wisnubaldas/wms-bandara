<?php

namespace App\UseCase;


/**
 * Interface ImpInvoiceheaderRepository.
 *
 * @package namespace App\UseCase;
 */
interface SendingInvoiceUseCaseInterface
{
    public function import_invoice();
    public function eksport_invoice();
    public function pecah_pos_invoice();

}
