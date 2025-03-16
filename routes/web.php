<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PendidikanController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\Backend\PengalamanKerjaController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UploadFilesController;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\CheckEmailVerified;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;




// Route::get('/', function () {
//     return view('welcome');
// });


//acara3
// Route::get('foo',function(){
//     return 'Hello world';
// });

// Route::get('user/{id}', function($id){
//     return 'User'.$id;
// });

// Route::get('post/{post}/comments/{comment}', function($postId , $commentId){
//     //
// });


//acara 5
// Route::get('/user', 'ManagementUserController@index');
// Route::resource('/user', 'ManagementUserController');

//acara 6 
// Route::get("/home", function(){
//     return view("home");
// });

// Route::get("/user", function(){
//     return view("user");
// });

//acara 7


Route::group(['namespace' => 'App\Http\Controllers\Frontend'], function () {
    Route::resource('home', "HomeController");
});
