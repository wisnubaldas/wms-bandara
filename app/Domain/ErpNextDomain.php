<?php

namespace App\Domain;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
class ErpNextDomain
{

    public $url = 'https://erp.ctos.inidev.xyz/api/method/ctoserp.ctoserp.invoiceCTOS';
    public function response_handle($r)
    {
        if($r->successful()){
            Log::debug($r->body());
        }else {
            $r->onError(function($callback)
            {
                Log::error($callback);
            });
        }
    }
    public function post_data($data)
    {
        if($data)
            foreach ($data as $v) {
                $response = Http::post($this->url, $v);
                $this->response_handle($response);
                // dump($response->body());
            }
    }
    static public function send($data)
    {
        $ds = new ErpNextDomain;
        $ds->post_data($data);
    }
}
