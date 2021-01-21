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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-dashboard', 'DashboardAdminController@dashboard')->middleware('auth');


Route::get('/beranda', 'BerandaController@beranda');
Route::get('/tentang', 'TentangController@tentang');

Route::get('/berita', 'BeritaController@berita')->middleware('auth');
Route::get('/berita/tambah', 'BeritaController@tambah')->middleware('auth');
Route::post('/berita/tambah/store', 'BeritaController@store')->middleware('auth');
Route::get('/berita/ubah/{id}', 'BeritaController@ubah')->middleware('auth');
Route::put('/berita/update/{id}', 'BeritaController@update')->middleware('auth');
Route::get('/berita/delete/{id}', 'BeritaController@delete')->middleware('auth');
Route::get('/berita/lihat/{id}', 'BeritaController@lihat');
Route::get('/berita/cari', 'BeritaController@cari')->middleware('auth');

Route::get('/user-berita', 'BeritaController@userBerita');

Route::get('/blogg', 'BlogController@index')->middleware('auth');
Route::get('/blog/tambah', 'BlogController@tambah')->middleware('auth');
Route::post('/blog/tambah/proses', 'BlogController@proses_tambah')->middleware('auth');
Route::get('/blog/hapus/proses/{id}', 'BlogController@proses_hapus')->middleware('auth');
Route::get('/blog/edit/{id}', 'BlogController@edit')->middleware('auth');
Route::put('/blog/update/{id}', 'BlogController@update')->middleware('auth');
Route::get('/blog/cari','BlogController@cari')->middleware('auth');
Route::get('/blog/lihat/{id}', 'BlogController@lihat');

Route::get('/user-blogg', 'BlogController@userBlog');

Route::get('/acara', 'AcaraController@Acara')->middleware('auth');
Route::get('/acara/tambah','AcaraController@tambah')->middleware('auth');
Route::post('/acara/store','AcaraController@store')->middleware('auth');
Route::get('/acara/edit/{id}','AcaraController@edit')->middleware('auth');
Route::put('/acara/update/{id}','AcaraController@update')->middleware('auth');
Route::get('/acara/hapus/{id}','AcaraController@delete')->middleware('auth');
Route::get('/acara/cari','AcaraController@cari')->middleware('auth');
Route::get('/acara/lihat/{id}','AcaraController@lihat');

Route::get('/user-acara', 'AcaraController@userAcara');


Route::get('/kontak', 'KontakController@kontak');
Route::post('/kontak/store', 'KontakController@store');
Route::get('/admin-kontak', 'KontakController@adminKontak')->middleware('auth');
Route::get('/admin-kontak/hapus/{id}','KontakController@deleteAdminKontak')->middleware('auth');
Route::get('/kontak/cari','KontakController@cari')->middleware('auth');

Route::get('/galeri', 'GaleriController@galeri');





// Route::get('/home_admin', 'AdminController@index');
// Route::get('/login', 'AdminController@login');
// Route::post('/loginPost', 'AdminController@loginPost');
// Route::get('/register', 'AdminController@register');
// Route::post('/registerPost', 'AdminController@registerPost');
// Route::get('/logout', 'AdminController@logout');

// Route::get('/hash', 'CobaController@hash');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
