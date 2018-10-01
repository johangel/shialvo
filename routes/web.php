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


Route::get('/', function () {
   if(Auth::check()){
     return redirect()->action('HomeController@index');
   }else{
     return view('./auth/login');
   }
});

Auth::routes();


Route::middleware(['auth'])->group(function (){

    Route::get('/home', 'HomeController@index')->name('home');

  //Roles
    Route::post('roles/store')->name('roles.store', 'RoleController@store')->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')->middleware('permission:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RolleControler@update')->name('roles.update')->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RolleControler@show')->name('roles.show')->middleware('permission:roles.show');

    Route::delete('roles/{role}', 'RolleControler@destroy')->name('roles.destroy')->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RolleControler@edit')->name('roles.edit')->middleware('permission:roles.edit');

  //Products
    Route::get('products/admininistrate', 'ProductController@Administrate')->name('products.administrate')->middleware('permission:products.administrate');

    Route::post('products/ImportProducts', 'Excelcontroller@importProducts')->middleware('permission:products.import');

});
