<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MesConcours - Bienvenue</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet"/>
    <style>
        .gradient {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
        }
        .animated-text {
            color: #ffc0cb; /* Rose foncé */
            animation: colorChange 3s infinite;
        }
        @keyframes colorChange {
            0% { color: #ffc0cb; }
            50% { color: ##fafafa; } 
            100% { color: #ffc0cb; }
        }
    </style>
</head>
<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">

<!--Nav-->
<nav id="header" class="fixed w-full z-30 top-0 text-white">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
            <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                MesConcours
            </a>
        </div>
        <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <li class="mr-3">
                    <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="{{ route('login') }}">Se connecter (Admin)</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="{{ route('register') }}">Créer un compte (Admin)</a>
                </li>
            </ul>
        </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>
<!--Hero-->
<div class="flex justify-center items-center h-screen">
    <div class="container px-3 mx-auto">
        <!--Left Col-->
        <div class="flex flex-col justify-center items-center text-center">
            <p class="uppercase tracking-loose">Votre plateforme dédiée à la gestion des concours</p>
            <h1 class="my-4 text-5xl font-bold leading-tight">
                Bienvenue sur <span class="animated-text">MesConcours</span>
            </h1>
            <p class="leading-normal text-2xl mb-8">
                Découvrez tous les concours disponibles, postulez facilement en ligne et consultez les résultats en temps réel.
            </p>
            <a href="{{ route('concours.index') }}" class="inline-block bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">Voir les concours</a>
        </div>
    </div>
</div>
</body>
</html>
