<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CustomRepo extends Command
{
    protected $arg_name;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:custom-repo {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'membuat repository, model, request & nambahin injeksi ke provider';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->arg_name = $this->argument('name');
        $ldConn = config('database.connections');
        $Conn = $this->choice(
            'Koneksi database yang di pake di model apa?',
            array_keys($ldConn),
            7
        );
        $tabels = \DB::connection($Conn)->select('SHOW TABLES');
        $tabels = collect($tabels)->transform(function ($item, $key) {
            return array_values((array) $item)[0];
        })->toArray();

        $this->line('Koneksi ' . $Conn);
        $tbl = $this->choice(
            "Table yang dipake di model apa ?",
            (array) $tabels
        );
        $this->line('Koneksi ' . $tbl);
        
        dd($Conn,$tbl, $this->arg_name);

        $this->info('Hello, Jing!!!.................');

        \Artisan::call(
            'make:repository',
            array('name' => $this->arg_name, '--skip-model' => true, '--skip-migration' => true)
        );
        $this->info(\Artisan::output());
        \Artisan::call(
            'make:model',
            array('name' => $this->arg_name)
        );
        $this->info(\Artisan::output());

        \Artisan::call(
            'make:request',
            array('name' => $this->arg_name . 'Request')
        );
        $this->info(\Artisan::output());

        \Artisan::call(
            'make:bindings',
            array('name' => $this->arg_name)
        );
        $this->info(\Artisan::output());

    }
    protected function promptForMissingArgumentsUsing(): array
    {
        return [
            "" => 'Harus ada pilihan',
        ];
    }
}
