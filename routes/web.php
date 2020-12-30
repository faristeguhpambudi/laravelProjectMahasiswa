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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = "Faris";
//     return view('about', ['nama' => $nama]);
// });

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

//buat ke mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index');

//buat ke students
Route::get('/students', 'StudentsController@index'); //untuk semua data
Route::get('/students/create', 'StudentsController@create'); //untuk ke form
Route::get('/students/{student}', 'StudentsController@show'); //untuk detail
Route::post('/students', 'StudentsController@store'); //untuk menyimpan
Route::delete('/students/{student}', 'StudentsController@destroy'); //untuk menghapus
Route::get('/students/{student}/edit', 'StudentsController@edit'); //untuk ke halaman edit
Route::put('/students/{student}', 'StudentsController@update'); //untuk update data
