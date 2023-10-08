<?php

use App\Models\listproduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BonComController;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\archiveController;
use App\Http\Controllers\FactuerController;
use App\Http\Controllers\ListproductController;
use App\Http\Controllers\TemplentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {return dd(auth()->id());});
Route::get('/', function () {return view('welcome');});


// Auth::routes();
Auth::routes(['verify' => true]);

// for testing
Route::get('/showtest', function () { return view('layouts.showtest');});

Route::get('/test', [BonComController::class,'index']);
// for testing



Route::controller(HomeController::class)->group(function() {
    Route::get('/settings','settings')->name('settings');
    Route::get('/clients', 'clients')->name('clients');
    Route::get('/poubelles', 'poubelles')->name('poubelles');
    Route::prefix('creationfactuer')->group(function() {
        Route::get('/devis','devis')->name('devis');
        Route::get('/factuer','factuer')->name('factuer');
        Route::get('/bon-commande','bonCommande')->name('bonCommande');
        Route::get('/bon-livraison','bonLivraison')->name('bonLivraison');
        Route::get('/customer-factuer','customerFactuer')->name('customerFactuer');
        // Route::post('/customer-factuer/{he}','customerFactuer')->name('customerFactuer.store');
    });
});



// Route::post('customer-factuer/{he}','customerFactuer')->name('customerFactuer.store');



Route::resource('account', AccountController::class);
Route::resource('factuer', FactuerController::class);

Route::fallback(function () {return view('pages.404');});
Route::resource('orders', OrderController::class);




Route::resource('listproduct', ListproductController::class);




// Route::resource('customerFactuer', TemplentController::class);













// Route::resource('archive', archiveController::class);
Route::prefix('archive')->group(function () {

    Route::get('/', [archiveController::class,'index'])->name('archive.index');
    Route::get('/devis', function () {dd('devis');});
    Route::get('/facteurs', function () {dd('facteurs');});
    Route::get('/bon_comend', function () {dd('facteurs');});
    Route::get('/bon_comend', function () {dd('facteurs');});
});
