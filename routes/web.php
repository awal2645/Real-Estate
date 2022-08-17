<?php

use App\Http\Controllers\FontendViewController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



// template view Route 

Route::get('/',[FontendViewController::class,'homePage'])->name('home.page');
Route::get('/about',[FontendViewController::class,'aboutPage'])->name('about.page');
Route::get('/testimonial',[FontendViewController::class,'testimonialPage'])->name('testimonial.page');
Route::get('/contact',[FontendViewController::class,'contactPage'])->name('contact.page');
Route::get('/property/list',[FontendViewController::class,'propertyListPage'])->name('property.list.page');
Route::get('/property/type',[FontendViewController::class,'propertyTypePage'])->name('property.type.page');
Route::get('/property/agent',[FontendViewController::class,'propertyAgentPage'])->name('property.agent.page');
Route::get('/error',[FontendViewController::class,'errorPage'])->name('error.page');
