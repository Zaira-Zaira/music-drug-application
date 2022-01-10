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
        // dd($playlists);
        Session::put('userPlaylists', $playlists);
        return view('playlists', compact('playlists'));
   }

    public function getPlaylistItem($playlistId){
        $res = Spotify::playlistTracks($playlistId)->get();
        $playlistTracks = $res['items'];
        $playlistCover = Spotify::playlistCoverImage($playlistId)->get();
        $seed = SpotifySeed::setGenres(['gospel', 'pop', 'funk'])
               ->setTargetValence(1.00)
               ->setSpeechiness(0.3, 0.9)
               ->setLiveness(0.3, 1.0);
        $trackRecommendations = Spotify::recommendations($seed)->get();
        $trackRecommendations = $trackRecommendations['tracks'];
        // dd($trackRecommendations);
        return view('playlistTracks', compact('playlistTracks', 'trackRecommendations'));
    }
}
