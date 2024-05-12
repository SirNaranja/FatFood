<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Menus\MeatController;
use App\Http\Controllers\Menus\SideController;
use App\Http\Controllers\Menus\DrinkController;
use App\Http\Controllers\Menus\SaladController;
use App\Http\Controllers\Menus\BurgerController;
use App\Http\Controllers\Menus\DessertController;
use App\Http\Controllers\Menus\AllergenController;


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
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile',[ProfileController::class,'index'])->name('profile');

Route::group([], function () {
    Route::get('/burgers',[BurgerController::class,'index'])->name('burgers');
    Route::get('/sides',[SideController::class,'index'])->name('sides');
    Route::get('/meats',[MeatController::class,'index'])->name('meats');
    Route::get('/salads',[SaladController::class,'index'])->name('salads');
    Route::get('/allergen',[AllergenController::class,'index'])->name('allergen');
    Route::get('/desserts',[DessertController::class,'index'])->name('desserts');
    Route::get('/drinks',[DrinkController::class,'index'])->name('drinks');
});
Route::group([],function(){
    Route::get('/avlegal',function(){return view('legal.avlegal');})->name('avlegal');
    Route::get('/polprivacy',function(){return view('legal.polprivacidad');})->name('privacy');
    Route::get('/aboutus',function(){return view('legal.nosotros');})->name('aboutus');
});


Route::controller(MenuController::class)->group(function () {
    Route::get('/menu','index')->name('menu.index');
    Route::post('/menu','store')->name('menu.store');
    Route::get('/menuedit/{id}','edit')->name('menu.edit');
    Route::post('/menuupdate/{id}','update')->name('menu.update');
    Route::delete('/menudestroy/{id}','destroy')->name('menu.destroy');
})->middleware(['auth','verified']);

Route::controller(UserController::class)->group(function () {
    Route::get('/user','index')->name('user.index');
    Route::get('/useredit/{id}','edit')->name('user.edit');
    Route::post('/userupdate/{id}','update')->name('user.update');
    Route::delete('/userdestroy/{id}','destroy')->name('user.destroy');
})->middleware(['auth']);

Route::controller(CartController::class)->group(function () {
    Route::get('/cart', 'index')->name('cart.index');
    Route::get('/cartadd/{id}', 'add')->name('cart.add');
    Route::get('/cartdelete/{menu}','delete')->name('cart.delete');
    Route::get('/cartremove/{menu}','remove')->name('cart.remove');
    Route::post('/cartstore','store')->name('cart.store');
    Route::get('/cartshow','show')->name('cart.show');
    Route::get('/cartgestion','gestion')->name('cart.gestion');
    Route::delete('/cartcancelar/{id}','cancelar')->name('cart.cancelar');
    Route::put('/cart','update')->name('cart.update');
})->middleware(['auth','verified']);




