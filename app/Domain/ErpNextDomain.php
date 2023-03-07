<?php

namespace App\Domain;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
class ErpNextDomain
{

    public $url = 'https://mai.erp-next.id/api/method/ctoserp.ctoserp.invoiceCTOS';
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
                echo $response->status();
                
                $this->response_handle($response);
                Log::info($v['NO_INVOICE'],$v);
                // dump($response->body());
            }
    }
    static public function send($data)
    {
        $ds = new ErpNextDomain;
        $ds->post_data($data);
    }
}
