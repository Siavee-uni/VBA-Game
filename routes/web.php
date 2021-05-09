<?php
require __DIR__.'/auth.php';
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

Route::get('/', \App\Http\Livewire\Index::class)->middleware(['auth'])->name("index");
Route::get('/tutorial', \App\Http\Livewire\Tasks::class)->name("tutorial");
Route::get('/table', \App\Http\Livewire\CssSiteMenu::class)->name("CssSiteMenu");
/*Route::group(['middleware'=>'guest'], function () {
    Route::get('/login')->name('login');
    Route::get('/table', 'register');
});*/
Route::middleware(['auth'])->group(function () {
    Route::get('/', \App\Http\Livewire\Index::class)->name("index");
    Route::get('/tutorial', \App\Http\Livewire\Tasks::class)->name("tutorial");
    Route::get('/table', \App\Http\Livewire\CssSiteMenu::class)->name("CssSiteMenu");
});

