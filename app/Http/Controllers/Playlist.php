<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Client\Response;
use Spotify;
use SpotifySeed;


class Playlist extends Controller
{

    public function getAllPlaylist(){
        $res = Spotify::userPlaylists("aaw1kd4bm0uf2naz19naf6e4n")->get();
        $playlists = $res['items'];
        Session::put('userPlaylists', $playlists);
        return view('playlists', compact('playlists'));
   }
}
