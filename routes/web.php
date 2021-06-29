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
    return view('welcome');
});

//Route::get('mahasiswa','MahasiswaController@index');
//Route::get('mahasiswa/tambah','MahasiswaController@create');


// Route::post('mahasiwa/tambah','MahasiswaController@store'); menyimpan
// Route::post('mahasiwa/tambah','MahasiswaController@edit'); edit
// Route::post('mahasiwa/tambah','MahasiswaController@destroy'); menghapus
// Route::post('mahasiwa/tambah','MahasiswaController@show'); tampilan edit

// Route::get('mahasiswa','MahasiswaController@print);

// Route::resource('mahasiswa','MahasiswaController');


Route::get('mahasiswa','MahasiswaController@index')-> name('mhs');
Route::get('mahasiswa/tambah','MahasiswaController@create')-> name('mahasiswa/tambah');
Route::post('simpan.mhs','MahasiswaController@store')->name('simpan.mhs');


Route::get('mahasiswa.edit/{id}', 'MahasiswaController@edit')->name('edit.mahasiswa');
Route::put('mahasiswa.update/{id}','MahasiswaController@update')->name('update.mahasiswa');
Route::get('mahasiswa.hapus/{id}','MahasiswaController@destroy')->name('hapus.mahasiswa');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

