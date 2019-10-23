<?php

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

//return 'welcome'
//Route::get('/', function () {
    //return 'welcome';
//});

//設定 Route 回傳 view
//Route::get('/',function(){
    //return view('welcome');
//});

//設定 Route 跳轉頁面
Route::get('/',function(){
    return redirect('welcome');
});

Route::get('welcome', function() {
    return view('welcome');
});

Route::get('hello/{name}',function($name){
    return'Hello,'.$name;
});

