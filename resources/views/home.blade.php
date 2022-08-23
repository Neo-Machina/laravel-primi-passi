<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    
    <h1>Hello World</h1>

    <header>
        <ul>Links to other pages:
            <li>
                <a href="{{ route('concert') }}">Concerts</a>
            </li>
            <li>
                <a href="{{ route('store') }}">Store</a>
            </li>
            <li>
                <a href="{{ route('info') }}">Info</a>
            </li>
        </ul>
    </header>

    <main>
        <h2>Discs:</h2>
        @forelse ($discs as $disc)
            <h3>
                Artist: {{ $disc['artist'] }}
            </h3>

            <div>
                Album: {{ $disc['album'] }}
            </div>

            <div>
                Release Year: {{ $disc['release_year'] }}
            </div>
            @empty 

            <div>Non ci sono dischi</div>  
        @endforelse       
        </main>
</body>
</html>