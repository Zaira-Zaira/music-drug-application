<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Client\Response;
use Spotify;
use SpotifySeed;


class Album extends Controller
{
    public function show(Request $request){
       $res = Spotify::newReleases()->limit(10)->get();
       $results =  $res['albums'];
       $albums = $results['items'];
       $request->session()->put('albums', $albums);
       return view('Albums', compact('albums'));
    }

    public function showAlbumTracks($albumId){
        $res = Spotify::albumTracks($albumId)->get();
        $tracks = $res['items'];
        // dd($tracks);
        return view('AlbumTracks', compact('tracks'));
    }

}
