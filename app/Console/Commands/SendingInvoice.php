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
    protected $signature = 'send:inv  {tgl?}';

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
        $tgl = $this->argument('tgl');
        if ($tgl) {
            $import = $sending_inv->import_invoice($tgl);
            $eksport = $sending_inv->eksport_invoice($tgl);
        }else{
            $import = $sending_inv->import_invoice();
            $eksport = $sending_inv->eksport_invoice();
        }
        dump($import);
        dump($eksport);
        exit();
        
        ErpNextDomain::send($import['data']);
        ErpNextDomain::send($eksport['data']);
        return Command::SUCCESS;
    }
}
