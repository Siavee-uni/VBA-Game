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
Route::middleware(['auth'])->group(function () {
    Route::get('/', \App\Http\Livewire\Index::class)->name("index");
    Route::get('/tutorial', \App\Http\Livewire\Tasks::class)->name("tutorial");
    Route::get('/table', \App\Http\Livewire\CssSiteMenu::class)->name("CssSiteMenu");
    Route::get('/herausforderungen', \App\Http\Livewire\Challanges::class)->name("challenges");
    Route::get('/herausforderung/{id}', \App\Http\Livewire\ChallengeController::class)->name("challenge");
    Route::get('/rangliste', \App\Http\Livewire\RankingController::class)->name("ranking");

    Route::prefix('admin')->group(function () {
        Route::get('/', \App\Http\Livewire\Admin\Home::class)->name("admin-area");
        Route::get('/challenges', \App\Http\Livewire\Admin\Challenges::class)->name("admin-challenges");
        Route::get('/tutorials', \App\Http\Livewire\Admin\Tutorials::class)->name("admin-tutorials");
        Route::get('/users', \App\Http\Livewire\Admin\Users::class)->name("admin-users");
    });
});

