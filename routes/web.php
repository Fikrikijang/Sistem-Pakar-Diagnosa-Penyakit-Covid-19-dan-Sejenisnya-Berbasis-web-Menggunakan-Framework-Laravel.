<?php

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

Route::get('/', 'PagesHomeController@index');
Route::get('/penyakit', 'PagesHomeController@tabelPenyakit')->name('tabelPenyakit');
Route::get('/penyakit/{id}', 'Admin\PenyakitController@show');
Route::get('/gejala', 'PagesHomeController@tabelGejala')->name('tabelGejala');
Route::get('/covid-nasional', 'PagesHomeController@covidNasional')->name('covidNasional');
Route::get('/covid-internasional', 'PagesHomeController@covidInternasional')->name('covidInternasional');
Route::get('/artikel-berita', 'PagesHomeController@artikelBerita')->name('artikelBerita');
Route::resource('/detail', 'PagesHomeController');
Route::get('/pencegahan', 'PagesHomeController@pencegahan')->name('pencegahan');

Route::get('/table-indonesia', 'ApiController@SebaranIndo');
Route::get('/table-internasional', 'ApiController@SebaranGLobal');
Route::get('/graph', 'ApiController@showchart');
Route::group(['prefix' => 'konsultasi'], function () {
    Route::get('/', 'KonsultasiController@pasienForm')->name('pasienForm');
    Route::post('/', 'KonsultasiController@storePasien')->name('storePasien');
    Route::post('/diagnosa', 'KonsultasiController@diagnosa')->name('diagnosa');
    Route::get('/{pasien_id}/hasil', 'KonsultasiController@hasilDiagnosa')->name('hasilDiagnosa');
});





Auth::routes();
// Route::group(['middleware' => 'auth'], function () {

Route::get('/sp/home', 'HomeController@index');

Route::resource('/sp/penyakit', 'Admin\PenyakitController');

Route::resource('/sp/gejala', 'Admin\GejalaController');

Route::resource('/sp/pasien', 'Admin\PasienController');

Route::resource('/sp/tag', 'Admin\TagController');
Route::get('/sp/tag/{id}/destroy', 'Admin\TagController@destroy');

Route::resource('/sp/category', 'Admin\CategoryController');
Route::get('/sp/category/{id}/destroy', 'Admin\CategoryController@destroy');

Route::get('/sp/post/tampil_hapus', 'Admin\PostController@tampil_hapus')->name('post.tampil_hapus');
Route::get('/sp/post/restore/{id}', 'Admin\PostController@restore')->name('post.restore');
Route::delete('/sp/post/kill/{id}', 'Admin\PostController@kill')->name('post.kill');

Route::resource('/sp/post', 'Admin\PostController');
Route::get('/sp/post/{id}/destroy', 'Admin\PostController@destroy');


Route::resource('/sp/user', 'Admin\UserController');
Route::get('/sp/user/{id}/destroy', 'Admin\UserController@destroy');

Route::resource('/sp/profil', 'Admin\ProfilController');

Route::resource('/sp/laporan', 'Admin\LaporanController');

Route::post('/sp/user/logout', 'Auth\LoginController@logoutUser')->name('user.logout');
// });
