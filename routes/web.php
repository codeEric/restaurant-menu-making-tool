<?php

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/create', function () {
    return view('dashboard.create');
});
