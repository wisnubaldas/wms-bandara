<?php

namespace App\Domain;

use Illuminate\Support\Facades\Http;

class ErpNextDomain
{

    public $url = 'https://erp.ctos.inidev.xyz/api/method/ctoserp.ctoserp.invoiceCTOS';
    public function post_data($data)
    {
        if($data)
            foreach ($data as $v) {
                $response = Http::post($this->url, $v);
                // dump($response->body());
                Log::debug($response->body());
            }
    }
    static public function send($data)
    {
        $ds = new ErpNextDomain;
        $ds->post_data($data);
    }
}
