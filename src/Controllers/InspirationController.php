<?php

namespace Hofthek\Inspire\Controllers;

use Illuminate\Http\Request;
use Hofthek\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inpire)
    {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));    
    }
}