<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('nightfall', function(){
    return Inertia::render('Nightfall/Test');
});