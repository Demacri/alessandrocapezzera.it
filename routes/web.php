<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/blog/{slug}', function ($slug) {
    return view('blog.' . $slug);
})->name('blog');
Route::get('/{lang}/{route?}', function ($lang, $route = '') {
    return redirect('/' . $route);
})->whereIn('lang', config('app.locales'))->where('route', '.*')->middleware('locale');
Route::post('/send-message', [ContactController::class, 'send'])->name('contact.send');
