<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.Dashboard', ['type_menu' => 'Dashboard']);
});
