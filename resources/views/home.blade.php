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
                    <a class="inline-block py-3 px-2" href="#">Accueil</a>
                </li>
               
            </ul>
        </div>
    </header>

    <div class="mt-12 ">
        <h2 class="text-3xl text-center font-bold">Nos derniers biens :</h2>
       <div class="flex flex-wrap">
            <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto mt-12">
                <a href="#">
                    <img class="rounded-t-lg" src="https://www.maisons-pierre.com/wp-content/uploads/2020/08/Visuel5.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Maison 1</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Description.</p>
                    <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Voir
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
            
       </div>
            
            
    </div>
</body>
</html>