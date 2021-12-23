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
     }
     a{
         text-decoration: none;
         color: #f5dede;
     }
    </style>
</head>
<body>
    <h1>Playlists</h1>
    <section class="userPlaylistsContainer">
        <div class="playlists">
            @foreach ($playlists as $playlist)
            <a href="">
                <div class="playlistItem">
                    <p>{{$playlist['name']}}</p>
                </div>
            </a>
            @endforeach
        </div>
    </section>
</body>
</html>