<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Album tracks</title>
    <style>
        body{
            font-family: 'Nunito', sans-serif;
            background-color: #121212;
            color: #f5dede;
        }
        a{
            text-decoration: none;
            color: #f5dede;
        }
      .albumTrackContainer{
          margin: 0 auto;
          max-width: 80rem;
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
            font-size: 1.3rem;
        }
        nav ul li, .albumActions ul li{
            list-style: none;
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
        .albumActions{
            max-width: 35rem;
            width: 100%;
        }
        .albumActions ul{
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Bibliotheque</a></li>
            <li><a href="{{ route('albums')}}">Albums</a></li>
            <li><a href="#">Playlist</a></li>
        </ul>
    </nav>
    <section class="albumTrackContainer">
    <div class="albumHeader">
    {{-- <p>Artist</p>
    <p>Totale tracks</p>
    <p>Total time</p> --}}
    </div>
   <div class="albumActions">
       <ul>
           <li><a href="#">Favoris</a></li>
           <li><a href="#">Download</a></li>
           <li><a href="#">Ajouter à playlist</a></li>
       </ul>
   </div>
    <div class="trackTable">
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
            @foreach ($tracks as $item)
            <tr>
                <td>{{$loop->index}}</td>
                <td>{{$item['name']}}</td>
                <td>Lecture</td>
                <td>Time</td>
                <td><a href="#">...</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</section>
</body>
</html>