<?php


use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;



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


////Route::get('/{lang}', 'App\Http\Controllers\IController@Langs')->name('lang');
//Route::get('/{lang}', function ($lang) {
////    dd($lang);
//    if (! in_array($lang, ['en', 'ru', 'kz'])) {
//        abort(400);
//    }
//    App::setLocale($lang);
//    return view('welcome');
//})->name('lang');

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
 return redirect()->back();
})->name('locale');



Route::middleware([SetLocale::class])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/tariff', 'App\Http\Controllers\IController@Rates');

    Route::get('/security', function () {
        return view('security');
    });
    Route::get('/rules', function () {
        return view('rules');
    });
    Route::get('/manager', function () {
        return view('company');
    });
    Route::get('/support', function () {
        return view('support');
    });
    Route::get('/contacts', function () {
        return view('contact');
    });
    Route::post('callSupport','App\Http\Controllers\IController@CallSupport');
});






















