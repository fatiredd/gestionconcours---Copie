<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats des Concours</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
    <style>
        .gradient {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
        }
        .btn-salmon {
            background-color: #FA8072;
            color: #000; /* Texte noir pour plus de contraste */
        }
        .btn-salmon:hover {
            background-color: #FF6347;
        }
        .btn-gray {
            background-color: #B0BEC5;
            color: #000; /* Texte noir pour plus de contraste */
        }
        .btn-gray:hover {
            background-color: #78909C;
        }
        .btn-pink {
            background-color: #FFC0CB;
            color: #000; /* Texte noir pour plus de contraste */
        }
        .btn-pink:hover {
            background-color: #FF69B4;
        }
        .btn:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.5);
        }
    </style>
</head>
<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">

<!-- Navigation Bar -->
<nav id="header" class="fixed w-full z-30 top-0 text-white">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
            <a class="text-white no-underline font-bold text-2xl lg:text-4xl" href="#">
                Mes Concours
            </a>
        </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>

<div class="container mx-auto mt-24 py-8">
    <h1 class="text-5xl font-bold mb-4 text-center text-gray-800">Résultats des Concours</h1>
    
    @if (auth()->check())
    <!-- Bouton pour insérer un PDF -->
    <form action="{{ route('resultats.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow-lg p-8">
        @csrf
        <div class="mb-4">
            <label for="document_resultat" class="block text-gray-700 text-sm font-bold mb-2">Insérer un PDF</label>
            <input type="file" class="form-input mt-1 block w-full" id="document_resultat" name="document_resultat" accept=".pdf" required>
        </div>
        <button type="submit" class="btn btn-salmon py-2 px-4 rounded">Insérer</button>
    </form>
    @endif

    <!-- Affichage des documents insérés -->
    <div class="bg-white rounded-lg shadow-lg p-8 mt-8">
        <h2 class="text-xl font-bold mb-4 text-gray-800">Résultats des concours</h2>
        @if($resultats->isEmpty())
            <div class="alert alert-warning" role="alert">
                Aucun document inséré pour le moment.
            </div>
        @else
            <ul class="list-disc pl-5">
                @foreach($resultats as $resultat)
                    <li><a href="{{ route('resultats.show', $resultat->id) }}" class="text-blue-500 hover:text-blue-700">{{ $resultat->document_resultat }}</a></li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
</body>
</html>
