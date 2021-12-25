<?php

use Illuminate\Support\Facades\Route;

// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// -------------------------------------------------------------------------------------------------------------------------------
// ------------------------------------------------------------ HOME -------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route::get('/',                             'App\Http\Controllers\LaporController@home'             )->name('home');


// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// -------------------------------------------------------------------------------------------------------------------------------
// ------------------------------------------------------------ LOGIN ------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route::post('/',                            'App\Http\Controllers\LoginController@authenticate'     )->middleware('guest');
Route::post('/logout',                      'App\Http\Controllers\LoginController@logout'           )->middleware('auth') ->name('logout');
Route::get ('/loginRequired',               'App\Http\Controllers\LoginController@loginRequired'    )                     ->name('loginRequired');


// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// -------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------- REGISTRASI ---------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route::get ('/daftar-akun',                 'App\Http\Controllers\RegisterController@register'      )->middleware('guest')->name('register');
Route::get ('check-email/{emailAddress}',   'App\Http\Controllers\RegisterController@isStoredEmail' )->middleware('guest');
Route::get ('check-uname/{userName}',       'App\Http\Controllers\RegisterController@isStoredUname' )->middleware('guest');
Route::post('/daftar-akun',                 'App\Http\Controllers\RegisterController@store'         )->middleware('guest');


// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// -------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------- TAMPIL SEMUA DATA, BERDASARKAN ASPEK, DAN TAMPIL DETAIL -----------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route:: get('/semua-laporan',               'App\Http\Controllers\LaporController@show'             ) ->name('show');
Route:: get('/semua-laporan/{aspect}',      'App\Http\Controllers\LaporController@showAspect'       );
Route:: get('/detail-laporan/{slugy}',      'App\Http\Controllers\LaporController@detail'           ) ->name('detail');
Route::post('/detail-laporan/{id}',         'App\Http\Controllers\LaporController@CekKode'          ) ->name('cekkode');



// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------- UPDATE LAPORAN -------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route::get ('/update-laporan/{slugy}',      'App\Http\Controllers\LaporController@update'           ) ->name('update');
Route::post('/update-laporan/{id}',         'App\Http\Controllers\LaporController@storeUpdate'      ) ->name('storeUpdate');


// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------- DELETE LAPORAN -------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route::get ('/hapus-laporan/{id}',          'App\Http\Controllers\LaporController@delete'           ) ->name('delete');



// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// -------------------------------------------------------------------------------------------------------------------------------
// --------------------------------------------------------- BUAT LAPORAN --------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route::get ('/laporan-baru',                'App\Http\Controllers\LaporController@create'           )->middleware('auth')->name('create');
Route::post('/laporan-baru',                'App\Http\Controllers\LaporController@store'            )->middleware('auth');
Route::get ('/laporan-baru/{slugy}',        'App\Http\Controllers\LaporController@checkslug'        )->middleware('auth');


// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// -------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------- PENCARIAN ---------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route::get ('/carikeyword/{keyword}',       'App\Http\Controllers\LaporController@livesearch'        );





// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// -------------------------------------------------------------------------------------------------------------------------------
// ------------------------------------------------------------ ABOUT ------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route::get ('/about-lapor',                 'App\Http\Controllers\LaporController@about'            )->name('about');






























// Route::get('/masuk', function () {
//     return view('templates/login');
// })->name('login');
