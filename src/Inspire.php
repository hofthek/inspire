<?php

namespace Hofthek\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire 
{
    public function justDoIt()
    {
        $response = Http::get('https://inspiration.goprogramm.ai/');

        return $response['quote'] . ' - ' . $response['author'];
    }
}