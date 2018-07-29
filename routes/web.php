<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::namespace('Examples')
    ->prefix('examples')->as('examples.')
    ->group(function () {
        Route::view('table', 'examples.table.index')->name('table');

        Route::prefix('table')->as('table.')
            ->group(function () {
                Route::get('init', 'TableController@init')->name('init');
                Route::get('data', 'TableController@data')->name('data');
                Route::get('exportExcel', 'TableController@exportExcel')->name('exportExcel');
            });

        // Route::view('select', 'examples.select.index')->name('select');

        // Route::prefix('select')->as('select.')
        //     ->group(function () {
        //         Route::get('employee', 'EmployeeSelectController@options')->name('employee');
        //     });
    });

// Route::get('{any}', function () {
//     return view('laravel-enso/core::index');
// })->where('any', '.*');
