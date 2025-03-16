<?php
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;




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

//acara 8
Route::resource('dashboard', DashboardController::class);



