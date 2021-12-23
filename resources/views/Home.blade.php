<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Music world</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/home.css">
    <style>
        body {
        font-family: 'Nunito', sans-serif;
        background-color: #121212;
        color: #f5dede;
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
        .container{
            margin: 0 auto;
        }
        h1{
            text-align: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Bibliotheque</a></li>
            <li><a href="{{ route('albums')}}">Albums</a></li>
            <li><a href="{{ route('playlists')}}">Playlist</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Music World</h1>
    </div>
</body>
</html>