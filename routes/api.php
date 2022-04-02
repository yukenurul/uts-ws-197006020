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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/browse/new-releases/', [\App\Http\Controllers\WrapperApiController::class,'browse'])->name('browse')->middleware('npm');
Route::get('/v1/users/{user_id}', [\App\Http\Controllers\WrapperApiController::class,'user'])->name('user')->middleware('npm');
Route::post('/v1/users/{user_id}/playlists', [\App\Http\Controllers\WrapperApiController::class,'playlist'])->name('playlist')->middleware('npm');
Route::post('/v1/playlists/:playlistid/tracks?uris=spotify:track:4JozU4Ud30FGyDYzoUKasI', [\App\Http\Controllers\WrapperApiController::class,'add_playlist'])->name('add_playlist')->middleware('npm');
Route::get('/v1/artists/{id}/albums', [\App\Http\Controllers\WrapperApiController::class,'artist'])->name('artist')->middleware('npm');

Route::get('/user/identitas', function (){
    return [
        'code' => '0',
        'data' => [
            'npm'=>'197006020',
            'nama'=>'Yuke Nurul Fajriani',
            'email'=>'197006020@student.unsil.ac.id'
        ]
    ];
}) ->middleware('npm');
