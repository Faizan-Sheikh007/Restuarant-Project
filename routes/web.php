<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Admincontroller;
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
route::get('/',[Homecontroller::class,"index"]);
route::get("/users",[Admincontroller::class,"user"]);
route::get("/deletemenu/{id}",[Admincontroller::class,"deletemenu"]);
route::get("/updateview/{id}",[Admincontroller::class,"updateview"]);
route::post("/update/{id}",[Admincontroller::class,"update"]);
route::get("/redirects",[Homecontroller::class,"redirects"]);
route::post("/uploadfood",[Admincontroller::class,"uploadfood"]);
route::get("/deleteuser/{id}",[Admincontroller::class,"deleteuser"]);
route::get("/foodmenu",[Admincontroller::class,"foodmenu"]);
route::post("/reservation",[Admincontroller::class,"reservation"]);
route::get("/viewreservation",[Admincontroller::class,"viewreservation"]);
route::get("/viewchef",[Admincontroller::class,"viewchef"]);
route::post("/uploadchef",[Admincontroller::class,"uploadchef"]);
route::get("/updatechef/{id}",[Admincontroller::class,"updatechef"]);
route::get("/deletechef/{id}",[Admincontroller::class,"deletechef"]);
route::post("/addcart/{id}",[Homecontroller::class,"addcart"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
