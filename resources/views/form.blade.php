<html>
    <body>
    <form action="{{ route('save') }}" method="POST">
        @csrf
        <label>Title</label>
        <input type="text" name="title" id="">
        <br><label>Start date</label>
        <input type="date" name="start" id="">
        <br><label>Lenght</label>
        <input type="text" name="length" id="">
        <br><label>Contry</label>
        <input type="text" name="country" id="">
        <br><label>Year</label>
        <input type="number" name="year" id="">
        <br><label>Descriptoo</label>
        <input type="text" name="description" id="">
        <br><label>End date</label>
        <input type="date" name="end" id="">
        <br><label>Images</label>
        <input type="url" name="image1">
        <input type="url" name="image2">
        <br><label>Rating</label>
        <select name="rating">
            @foreach ($ratings as $rating)
                <option value="{{$rating->id}}">{{ $rating->rating }}</option>
            @endforeach
        </select>
        <br><label>Type</label>
        <select name="type">
            @foreach ($types as $type)
                <option value="{{$type->id}}">{{ $type->type }}</option>
            @endforeach
        </select>
        <br><label for="genres">Genres</label>
        @foreach ($genres as $genre)
            <input type="checkbox" name="genres[]" id="genres" value="{{$genre->id}}">{{$genre->name}}
        @endforeach
        <br><label for="genres">Actors</label><br>
        @foreach ($actors as $actor)
            <input type="checkbox" name="actors[]" id="actors" value="{{$actor->id}}">{{$actor->name}}
        @endforeach
        <br><label for="genres">Directors</label><br>
        @foreach ($directors as $director)
            <input type="checkbox" name="directors[]" id="directors" value="{{$director->id}}">{{$director->name}}
        @endforeach
        <input type="submit" value="Save">
    </form>
    </body>
</html>