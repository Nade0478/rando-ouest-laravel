<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;



Route::get('/', function () {
    return view('Bienvenue');
});




