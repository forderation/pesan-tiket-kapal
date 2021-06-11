<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginAdminController;

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

// Admin Route
Route::prefix('admin')->group(function () {

    Route::prefix('auth')->group(function () {
        Route::get('login', 'App\Http\Controllers\Admin\Auth\LoginAdminController@index')->name('adm1n.login.get');
        Route::post('login', 'App\Http\Controllers\Admin\Auth\LoginAdminController@login')->name('adm1n.login.post');
        Route::get('logout', 'App\Http\Controllers\Admin\Auth\LoginAdminController@logout')->name('adm1n.logout');
    });
    Route::get('jadwal-speedboat', 'App\Http\Controllers\Admin\SpeedboatController@index')->name('adm1n.jadwal');
    Route::get('jadwal-speedboat/tambah', 'App\Http\Controllers\Admin\SpeedboatController@tombol_tambah')->name('adm1n.tambah-jadwal');
    Route::post('jadwal-speedboat/tambah', 'App\Http\Controllers\Admin\SpeedboatController@tambah')->name('adm1n.tambah-jadwal.post');
    Route::delete('jadwal-speedboat/delete/{id}', 'App\Http\Controllers\Admin\SpeedboatController@destroy')->name('adm1n.destroy');
    Route::put('jadwal-speedboat/update/{id}', 'App\Http\Controllers\Admin\SpeedboatController@update')->name('adm1n.update');

    Route::prefix('dashboard')->middleware('auth.admin')->group(function () {

        Route::get('', 'App\Http\Controllers\Admin\DashboardAdminController@index')->name('adm1n.dashboard.index');
    });

    Route::get('pemesanan', 'App\Http\Controllers\Admin\OrderController@index')->name('adm1n.order');
    Route::get('pemesanan/aktif_tiket/{id}', 'App\Http\Controllers\Admin\OrderController@aktif_tiket')->name('aktif.tiket');
    Route::get('pemesanan/nonaktif_tiket/{id}', 'App\Http\Controllers\Admin\OrderController@nonaktif_tiket')->name('nonaktif.tiket');
});

// Customer Route
Route::prefix('customer')->group(function () {
    Route::get('index', 'App\Http\Controllers\Customer\FrontController@index')->name('customer.index');
    Route::get('login', 'App\Http\Controllers\Customer\Auth\LoginCustomerController@index')->name('customer.login.get');
    Route::post('login', 'App\Http\Controllers\Customer\Auth\LoginCustomerController@login')->name('customer.login.post');
    Route::get('logout', 'App\Http\Controllers\Customer\Auth\LoginCustomerController@logout')->name('customer.logout');

    Route::get('register', 'App\Http\Controllers\Customer\Auth\LoginCustomerController@showRegister')->name('customer.showRegister');
    Route::post('register', 'App\Http\Controllers\Customer\Auth\LoginCustomerController@register')->name('customer.register');

    Route::prefix('dashboard-customer')->group(function () {
        Route::get('', 'App\Http\Controllers\Customer\DashboardCustomerController@index')->name('customer.dashboard');
        Route::get('pemesanan/{id}', 'App\Http\Controllers\Customer\PemesananController@index')->name('pesan.order');
        Route::post('pemesanan/{id}', 'App\Http\Controllers\Customer\PemesananController@store')->name('pesan.order1');

        Route::get('tiket', 'App\Http\Controllers\Customer\TiketCustomerController@index')->name('tiket.customer');
        Route::get('tiket/cetak-pdf', 'App\Http\Controllers\Customer\TiketCustomerController@cetak_pdf')->name('tiket.cetak');

    });


});


//Auth admin
// Route::get('admin/login', 'App\Http\Controllers\Admin\Auth\LoginAdminController@index')->name('adm1n_login_get')->middleware('guest');
// Route::get('admin/login', 'App\Http\Controllers\Admin\Auth\LoginAdminController@index')->name('adm1n_login_get')->middleware('guest');
