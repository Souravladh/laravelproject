<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

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

// Route::get('/', function () {
//     return view('home.index');
// });

route::get('/',[Homecontroller::class,'index']);

route::post('/upload_post',[Homecontroller::class,'upload']);

route::get('/view_post',[Homecontroller::class,'viewpost']);

route::get('/delete_post/{id}',[Homecontroller::class,'delete_post']);

route::get('/update_post/{id}',[Homecontroller::class,'update_post']);

route::post('/confirm_update/{id}',[Homecontroller::class,'confirm_update']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
