<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Mada&family=Signika+Negative:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/assets/css/app.css') }}">
    <title>Game of Thrones</title>
</head>
<body>
    <header>
        <h1>Game of Thrones</h1>
        <nav>
            <ul>
                <li><a href="{{ route('homepage') }}">Personnages</a></li>
                <li><a href="{{ route('houses') }}">Maisons</a></li>
            </ul>
        </nav>
        <div class="separator"></div>
    </header>
    <main>
        <div class="wrapper">
            @yield('content')
        </div>
    </main>
</body>
</html>

<ul class="characters-list">
    {{-- Forelse permet de faire à la fois un foreach sur un tableau, tout en précisant une action à faire si le tableau est vide dans @empty --}}
    @forelse($characters as $character)
        <li class="character-card">
            <a href="{{ route('character-page', [ 'id' =>$character->id]) }}">
                <?php $houses = $character->houses ?>
                {{-- On utilise la couleur de la première maison du personnage pour faire le fond --}}
                <div class="avatar" style="background: #{{ $character->houses[0]->colour }};">
                    <img src="{{ url('/assets/img/' . $character->image) }}" alt="{{ $character->first_name }}">
                </div>
                <div class="name">
                    {{ $character->first_name}} {{ $character->last_name }}
                </div>
            </a>
        </li>
    @empty
        <li>Aucun personnage pour l'instant</li>
    @endforelse
</ul>