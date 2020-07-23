<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <table class="table mx-auto">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Movie</th>
                        <th scope="col">Date start</th>
                        <th scope="col">Date end</th>
                        <th scope="col">Length</th>
                        <th scope="col">Country</th>
                        <th scope="col">Year</th>
                        <th scope="col">Description</th>
                        <th scope="col">Rated</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actors</th>
                        <th scope="col">Directors</th>
                        <th scope="col">Genres</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie) 
                        <tr>
                            <th scope="row">{{$movie->id}}</th>
                            <td>{{$movie->name}}</td>
                            <td>{{$movie->start}}</td>
                            <td>{{$movie->end}}</td>
                            <td>{{$movie->length}}</td>
                            <td>{{$movie->country}}</td>
                            <td>{{$movie->year}}</td>
                            <td>{{$movie->description}}</td>
                            <td>{{$movie->rating->rating}}</td>
                            <td>{{$movie->type->type}}</td>
                            <td>
                                @foreach ($movie->actors as $actor)
                                    {{$actor->name}}<br>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($movie->directors as $director)
                                    {{$director->name}}<br>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($movie->genres as $genre)
                                    {{$genre->genre}}<br>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>