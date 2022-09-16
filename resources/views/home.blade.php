<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
       WebImmo
    </title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-200 font-[Nunito]">

    <header class="shadow bg-white">
        <div class="flex items-center max-w-7xl mx-auto px-3">
            <h1 class="text-xl font-bold mr-4">{{ config('app.name') }}</h1>
            <ul class="flex">
                <li>
                    <a class="inline-block py-3 px-2" href="{{ route('home')}}">Accueil</a>
                </li>
                <li>
                    <a class="inline-block py-3 px-2" href="{{ route('show')}}">Parcourir</a>
                </li>
                <li>
                    <a class="inline-block py-3 px-2" href="{{ route('create')}}">Publier</a>
                </li>
            </ul>
        </div>
    </header>

    <div class="text-center mt-12">
        <h2 class="text-3xl">Bienvenue sur <strong>WebImmo</strong></h2>
        <p class="text-xl underline text-slate-500">L'agence immobilière du net</p>
    </div>
</body>
</html>