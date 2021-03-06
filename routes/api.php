<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/registrate",'ApiController@create');
Route::get("/user",'ApiController@show');
Route::get("/user/{id}",'ApiController@showbyid');
Route::get("/login/email={email}/password={password}",'ApiController@userLogin');
Route::delete("/user/{id}",'ApiController@deletebyid');
Route::put("/user/{id}",'ApiController@updatebyid');
Route::post("/comment",'CommentsController@createComment');
Route::get("/comment",'CommentsController@show');
Route::get("/daylycomments",'CommentsController@daylycomments');

