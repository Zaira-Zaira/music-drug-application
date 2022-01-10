<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Playlists</title>
    <style>
     body {
        font-family: 'Nunito', sans-serif;
        background-color: #121212;
        color: #f5dede;
        }
     .userPlaylistsContainer{
       width: 100%;
       max-width: 80rem;
       margin: 0 auto;
     }
     .playlists{
         width: 100%;
         display: flex;
         justify-content: space-around;
         align-items: center;
         text-align: center;
     }
     a{
         text-decoration: none;
         color: #f5dede;
     }
     .playlistItem{
         width: 15rem;
         height: 15rem;
         background-color: #424141;
         color: #e4d8d8;
         border-radius: 1rem;
     }
     .playlistName{
         padding-top: 50%;
     }
       nav ul{
          display: flex;
          justify-content: space-between;
          max-width: 40rem;
        }
        nav ul li a{
            color: #e4d8d8;
            text-decoration: none;
            font-size: 1.3rem;
        }
        nav ul li{
            list-style: none;
        }
        h1{
            text-align: center;
            padding: 4rem 0;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Bibliotheque</a></li>
            <li><a href="{{ route('albums')}}">Albums</a></li>
            <li><a href="{{ route('userPlaylists')}}">Playlist</a></li>
        </ul>
    </nav>
    <h1>Playlists</h1>
    <section class="userPlaylistsContainer">
        <div class="playlists">
            @foreach ($playlists as $playlist)
            <a href="{{ route('playlists.item', ['id' => $playlist['id']])}}">
                <div class="playlistItem">
                    <p class="playlistName">{{$playlist['name']}}</p>
                </div>
            </a>
            @endforeach
        </div>
    </section>
</body>
</html>