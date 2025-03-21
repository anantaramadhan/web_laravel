<?php
use App\Http\Controllers\backend\PendidikanController;
use App\Http\Controllers\backend\PengalamanKerjaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\ManagementUserController;
use app\Http\Controllers\SessionController;
use app\Http\Controllers\PegawaiController;
use app\Http\Controllers\CobaController;
use App\Http\Controllers\UploadController;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiPendidikanController;

// Route dasar
Route::get('/', function () {
    return view('welcome');
});

// Pastikan Controller dipanggil dengan benar

// Route::group(['namespace'=>'Frontend'], function()
// {
//     Route::resource('home', 'HomeController');
// });

// Route::group(['namespace'=>'Backend'], function()
// {
//     Route::resource('dashboard', 'DashboardController');
// }); laravel 8 keatas tidak mendukung sintaks ini

// Rute untuk HomeController
// Route::resource('home', HomeController::class);

// Rute untuk DashboardController
// Route::resource('dashboard', DashboardController::class);

// Rute untuk ManagementUserController
Route::resource('/user', ManagementUserController::class);


// Route::get('/users', [ManagementUserController::class, 'index']);
// Route::get('/users/create', [ManagementUserController::class, 'create']);
// Route::post('/users', [ManagementUserController::class, 'store']);
// Route::get('/users/{id}', [ManagementUserController::class, 'show']);
// Route::get('/users/{id}/edit', [ManagementUserController::class, 'edit']);
// Route::put('/users/{id}', [ManagementUserController::class, 'update']);
// Route::delete('/users/{id}', [ManagementUserController::class, 'destroy']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('home')->middleware('auth');

Route::group(['namespace' => ''], function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('pengalaman_kerja', PengalamanKerjaController::class);
    Route::resource('pendidikan', PendidikanController::class);
});




//session acara 17
 Route::get('/session/create', [SessionController::class, 'create']);
 Route::get('/session/show', [SessionController::class, 'show']);
 Route::get('/session/delete', [SessionController::class, 'delete']); 

 Route::get('/formulir', [PegawaiController::class, 'formulir']);
 Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
 Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

 //acara 18
 Route::get('/cobaerror/{nama?}', [CobaController::class, 'index']);

 // acara 19 
 Route::get('/upload', [UploadController::class, 'upload'])->name('upload');
 Route::post('/upload/proses', [UploadController::class, 'proses_upload'])->name('upload.proses');
 Route::post('/upload/resize', [UploadController::class, 'resize_upload'])->name('upload.resize');



 // acara 20 

 Route::get('/dropzone', [UploadController::class, 'dropzone'])->name('dropzone');
 Route::post('/dropzone/store', [UploadController::class, 'dropzone_store'])->name('dropzone.store');
 Route::get('/pdf_upload', [UploadController::class, 'pdf_upload'])->name('pdf.upload');
 Route::post('/pdf/store', [UploadController::class, 'pdf_store'])->name('pdf.store');

 // acara 21
 Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('api_pendidikan', [ApiPendidikanController::class, 'getAll']);
Route::get('api_pendidikan/{id}', [ApiPendidikanController::class, 'getPen']);
Route::post('api_pendidikan', [ApiPendidikanController::class, 'createPen']);
Route::put('api_pendidikan/{id}', [ApiPendidikanController::class, 'updatePen']);
Route::delete('api_pendidikan/{id}', [ApiPendidikanController::class, 'deletePen']);

// acara 22
Route::get('api_pendidikan/{id}', [ApiPendidikanController::class, 'getPen']);
 Route::post('api_pendidikan', [ApiPendidikanController::class, 'createPen']);
 Route::put('api_pendidikan/{id}', [ApiPendidikanController::class, 'updatePen']);
