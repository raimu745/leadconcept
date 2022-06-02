<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\NewController;
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

Route::get('/', function () {
    return view('welcome');
});
// route::view('dashboard','master.layout');
// // route::view('/table','master.table');
// route::get('/show', [CrudController::class,'show']);

// route::get('/{',function($name){
//   return view('index');
// });
// route::get('/about',function(){
//     return view('about');
//   });

// route::get('lead/{id}',[CrudController::class,'index']);
route::view('/template','layout.master');
route::get('/',[NewController::class,'index'])->name('index');
route::post('/insert',[FormController::class,'store'])->name('insert.data');
// route::view('/data','data');
route::get('/data',[FormController::class,'demo'])->name('data');
route::get('/delete/{id}',[FormController::class,'destroy'])->name('del');
route::get('/edit/{key}',[FormController::class,'edit'])->name('edit');
route::post('/update/{id}',[FormController::class,'update'])->name('update');
