<h1>Famous Actors</h1>

<ul>
    @foreach ($actors as $actor)
    <li>{{ $actor['name'] }} {{ $actor['surname'] }}</li>
        
    @endforeach
</ul>