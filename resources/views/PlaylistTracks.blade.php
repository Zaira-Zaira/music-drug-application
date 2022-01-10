<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Playlist</title>
    <style>
        body {
           font-family: 'Nunito', sans-serif;
           background-color: #121212;
           color: #f5dede;
           }
        a{
            text-decoration: none;
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
           h1{
               text-align: center;
               padding: 4rem 0;
           }
           table{
            width: 100%;
           }
           table thead tr th{
           text-align: left;
           padding: 2rem 0;
           }
           table tbody tr td{
            padding: 2rem 0;
        }
        .playListtrackTable{
            max-width: 80rem;
            align-self: center;
            margin: 0 auto;
        }
        .recommendations{
            max-width: 70rem;
            align-self: center;
            margin: 6rem auto;
        }
        .addTrackBtn{
            border: 1px solid #333;
            border-radius: 2rem;
            padding: 0.8rem;
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
    <h1></h1>
    <section class="playlistTracksContainer">
     <h1>Playlist Tracks</h1>
        <div class="playListtrackTable">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titre</th>
                        <th>Lecture</th>
                        <th>Time</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($playlistTracks as $item)
                   <a href="http://">
                    <tr>
                        <td>{{$loop->index}}</td>
                        <td> </td>
                        <td>Lecture</td>
                        <td>Time</td>
                        <td><a href="#">...</a></td>
                    </tr>
                    </a> 
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="recommendations">
            <h2>Recommendations</h2>
            <table>
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trackRecommendations as $item)
                   <a href="http://">
                    <tr>
                        <td>{{$item['name']}}</td>
                        <td><a href="http://" class="addTrackBtn">Ajouter</a></td>
                    </tr>
                    </a> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>