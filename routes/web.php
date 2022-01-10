<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Album;
use App\Http\Controllers\Playlist;
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
    return view('Home');
});
Route::get('/albums', function(){
    return view('Albums');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/albums',  [Album::class, 'show'])->name('albums');
Route::get('/albums/{id}/tracks',  [Album::class, 'showAlbumTracks'])->name('album.tracks');
Route::get('/playlists',  [Playlist::class, 'getAllPlaylist'])->name('userPlaylists');
Route::get('/playlist/{id}',  [Playlist::class, 'getPlaylistItem'])->name('playlists.item');