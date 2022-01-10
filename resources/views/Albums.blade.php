<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Albums</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Nunito', sans-serif;
            background-color: #121212;
            color: #f5dede;
        }
        .containerAlbum{
            background-color: #2e2d2d;
            padding: 1rem;
            width: 10rem;
            height: 15rem;    
            justify-content: center;   
        }
        .container{
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            grid-gap: 10px;
            max-width: 80rem;
            margin: 4rem auto;
        }
        .albumImage{
            width: 7rem;
            height: 7rem;
            border-radius: 1rem;
        }
        .albumName{
            width: 7rem;
            text-align: center;
        }
        h2{
           text-align: center;
        }
        nav{
            margin-bottom: 4rem;
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
        a{
            text-decoration: none;
            color: #f5dede;
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
    <h2>Albums populaires</h2>
   <div class="container">
    @foreach ($albums as $item)
    <a href="{{route('album.tracks', ['id' => $item['id']])}}">
    <div class="containerAlbum">
        <img src="https://media.istockphoto.com/vectors/music-note-icon-vector-illustration-vector-id1175435360?k=20&m=1175435360&s=612x612&w=0&h=1yoTgUwobvdFlNxUQtB7_NnWOUD83XOMZHvxUzkOJJs=" alt="album image" class="albumImage">
         <p class="albumName">{{$item['name']}}e</p>
    </div>
    </a>
    @endforeach
   
   </div>
</body>
</html>