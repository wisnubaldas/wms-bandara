<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\UseCase\SendingInvoiceUseCase;
use App\Domain\ErpNextDomain;
class SendingInvoice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:inv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sending data invoice';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(SendingInvoiceUseCase $sending_inv)
    {
        $import = $sending_inv->import_invoice();
        $eksport = $sending_inv->eksport_invoice();

        ErpNextDomain::send($import['data']);
        ErpNextDomain::send($eksport['data']);
        return Command::SUCCESS;
    }
}
