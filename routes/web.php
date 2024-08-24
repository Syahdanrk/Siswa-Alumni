<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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


Route::middleware(['auth'])->group(function () {
    
    Route::get('/', function () {
        return view('Pages.Dashboard.dashboard');
    });

    Route::get('/create-data', function () {
        return view('Pages.Create-Data.createdata');
    });

    Route::get('/data', function () {
        return view('Pages.Create-Data.index');
    });

    Route::resource('data', DataController::class);
});

// Route::get('/update-data-siswa', function () {
//     return view('Pages.Update-Data.updatedatasiswa');
// });

// Route::get('/detail-siswa', function () {
//     return view('Pages.Detail-Siswa.detailsiswa');
// });

// CRUD
Auth::routes();

