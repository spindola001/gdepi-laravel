<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::any('colabs/search', 'RelatController@search')->name('colabs.search');

Auth::routes([
    'verify' => true
]);

// Route::get('profile', function () {
//     // Only verified users may enter...
// })->middleware('verified');

Route::get('/', 'HomeController@index')->name('/')->middleware('verified');

Route::middleware('verified')->group(function () {
    Route::resources([
        'relatorioEpis'=> 'RelatController',
        'colabCad' => 'ColabController',
        'epiCad' => 'EpiController'
    ]);
});

Route::get('/relatorioEpisPDF', 'PDFGenerateController@generatePDF')->name('relatorioEpisPDF')->middleware('verified');




