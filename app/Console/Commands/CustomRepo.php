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

        $this->info('Hello, Jing!!!');
        
        \Artisan::call(
            'make:repository',
            array('name' =>  $this->arg_name,'--skip-model'=>true,'--skip-migration'=>true)
        );
        \Artisan::call(
            'make:model',
            array('name' =>  $this->arg_name)
        );
        \Artisan::call(
            'make:request',
            array('name' =>  $this->arg_name)
        );
        \Artisan::call(
            'make:bindings',
            array('name' =>  $this->arg_name)
        );
    }
}
