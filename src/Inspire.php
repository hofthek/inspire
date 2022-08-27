<?php

namespace Hofthek\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire 
{
    public function justDoIt()
    {
        $response = Http::get('https://api.goprogram.ai/inspiration/');

        return $response['quote'] . ' - ' . $response['author'];
    }
}