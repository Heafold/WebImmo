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
    <h2 class="text-3xl text-center font-bold underline mt-12">Publier une annonce</h2>
    <div class="mx-auto max-w-xs mt-12">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post">
            @csrf
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
              Titre
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Un titre pour l'annonce">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
              Description
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="description" type="text" placeholder="Une description de l'annonce">
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
              Prix (en €)
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="price" type="number">
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
              Publier l'annonce
            </button>
          </div>
        </form>
      </div>
</body>
</html>