<?php

use Illuminate\Support\Facades\Route;

Route::middleware([])->group(function () {

    Route::prefix('panel')->group(function () {

        Route::get('/dashboard', function () {

            return 'Home Admin';
        });

        Route::get('/financeiro', function () {

            return 'Financeiro Admin';
        });

        Route::get('/produtos', function () {

            return 'Produtos Admin';
        });

        Route::get('/', function () {

            return 'Admin';
        });
    });
});