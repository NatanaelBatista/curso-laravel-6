<?php

use Illuminate\Support\Facades\Route;

Route::resource('products', 'ProductController');

/*
Route::group([

    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'name' => 'admin.'
], function ()
{
    Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

    Route::get('/financeiro', 'TesteController@teste')->name('financ');

    Route::get('/produtos', 'TesteController@teste')->name('products');

    Route::get('/', function ()
    {
        return redirect()->route('admin.dashboard');

    })->name('home');
});
*/