<?php

use App\Http\Controllers\GestionFacturesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('factures', 'App\Http\Controllers\GestionFacturesController');
Route::resource('factures', 'App\Http\Controllers\FactureController');

Route::get('/{page}', 'App\Http\Controllers\adminController@index');

Route::resource('categories', 'App\Http\Controllers\CategorieController');


Route::get('download/{id}/{file_name}', 'facturesDetailsController@get_file');
Route::get('View_file/{id}/{file_name}', 'facturesDetailsController@open_file');

Route::get('/ajouterFacture', [FactureController::class, 'create'])->name('ajouterFacture');
Route::get('/factures.factures', [FactureController::class, 'create']);

Route::get('/listFactures', [FactureController::class, 'show'])->name('listFactures');
Route::get('/edit_facture/{id}', 'FactureController@edit');
Route::get('Facture_Paid','FactureController@Facture_Paid');
Route::get('Facture_UnPaid','FactureController@Facture_UnPaid');
Route::get('Facture_Partial','FactureController@Facture_Partial');
Route::post('Search_factures', 'factures_Report@Search_factures');
Route::resource('Archive', 'ArchiveController');
Route::resource('users','UserController');