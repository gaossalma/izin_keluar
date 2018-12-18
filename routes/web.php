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
  return redirect('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('pembimbings', 'PembimbingController');

Route::resource('asramas', 'AsramaController');

Route::resource('kelas', 'KelasController');

Route::resource('santris', 'SantriController');

Route::resource('dataSantris', 'DataSantriController');

Route::resource('keperluans', 'KeperluanController');

Route::resource('izinPulangs', 'IzinPulangController');

Route::get('pdf/{id}','IzinPulangController@make' );

Route::get('suratizin','PrintController@index');

Route::get('/prnpriview','PrintController@prnpriview');
