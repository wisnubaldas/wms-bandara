<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Brick\VarExporter\VarExporter;
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
        $db = \DB::connection($Conn);
        $tabels = $db->select('SHOW TABLES');
        $tabels = collect($tabels)->transform(function ($item, $key) {
            return array_values((array) $item)[0];
        })->toArray();

        $tbl = $this->choice(
            "Table yang dipake di model apa ?",
            (array) $tabels
        );
        $field = $db->getSchemaBuilder()->getColumnListing($tbl);
        $kolom = $db->getSchemaBuilder()->getColumns($tbl);
        $this->line('Koneksi ' . $Conn);
        $this->line('Table ' . $tbl);
        $this->line('Kolom :');
        // dump($kolom);
        // $this->line('Field :');
        // dump($field);
        $rules = [];
        foreach ($kolom as $v) {
            switch ($v['type_name']) {
                case 'varchar':
                case 'text':
                    $v['type_name'] = 'string';
                    break;
                case 'bigint':
                case 'int':
                    $v['type_name'] = 'integer';
                    break;
            }
            $max = '';
            switch ($v['type']) {
                case 'timestamp':
                case 'text':
                    $max = false;
                    break;
                default:
                    $max = "max:".preg_replace('/[^0-9]/','',$v['type']);
                    break;
            }
            $x = [
                $v['nullable']?'nullable':'required',
                $v['type_name'],
                'min:1',
                $max
            ];
            $x = array_filter($x);
            $rules[$v['name']] = $x;
        }
        // bikin Model
        \Artisan::call(
            'make:model',
            array('name' => $this->arg_name)
        );
        $modelFile = $this->load_model_content($this->arg_name);
        $this->replace_content($modelFile, [
            "connection" => $Conn,
            "table" => $tbl,
            "field" => $field
        ]);
        $this->info(\Artisan::output());

        \Artisan::call(
            'make:repository',
            array('name' => $this->arg_name, '--skip-model' => true, '--skip-migration' => true)
        );
        $this->info(\Artisan::output());

        \Artisan::call(
            'make:request',
            array('name' => $this->arg_name . 'Request')
        );
        $requestFile = $this->load_request_content($this->arg_name . 'Request');
        $this->replace_content($requestFile, [
            "connection" => $Conn,
            "table" => $tbl,
            "field" => $field,
            "rules"=>VarExporter::export($rules,VarExporter::TRAILING_COMMA_IN_ARRAY | VarExporter::INLINE_SCALAR_LIST)
        ]);
        $this->info(\Artisan::output());

        \Artisan::call(
            'make:bindings',
            array('name' => $this->arg_name)
        );
        $this->info(\Artisan::output());

    }

    private function load_request_content($name){
        $name = str_replace('/', '\\', $name);
        return rtrim(dirname(__DIR__, 2), '/\\') .
            DIRECTORY_SEPARATOR . 'Http' . 
            DIRECTORY_SEPARATOR . 'Requests' .
            DIRECTORY_SEPARATOR . $name . '.php';
    }
    private function load_model_content($name)
    {
        $name = str_replace('/', '\\', $name);
        return rtrim(dirname(__DIR__, 2), '/\\') .
            DIRECTORY_SEPARATOR . 'Models' . DIRECTORY_SEPARATOR . $name . '.php';
    }
    private function replace_content(string $file, array $content)
    {
        $isi = file_get_contents($file);
        foreach ($content as $search => $replace) {
            if (is_array($replace)) {
                $replace = json_encode($replace);
            }
            $isi = str_replace('{{' . $search . '}}', $replace, $isi);
        }
        file_put_contents($file, $isi);
    }
}
