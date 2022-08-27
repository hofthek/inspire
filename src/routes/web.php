<?php

use Illuminate\Support\Facades\Route;
use Hofthek\Inspire\Controllers\InspirationController;

Route::get('inspire', InspirationController::class);