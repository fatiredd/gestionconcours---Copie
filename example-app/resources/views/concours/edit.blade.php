<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le Concours</title>
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
        /* Ajout du style pour changer la couleur du texte entré */
        input[type="text"],
        textarea,
        input[type="date"] {
            color: #000; /* Couleur du texte noir */
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
    <h1 class="text-5xl font-bold mb-4 text-center text-gray-800">Modifier le Concours</h1>
    
    <div class="bg-white rounded-lg shadow-lg p-8">
        <form action="{{ route('concours.update', $concours->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nom_concours" class="block text-gray-700 text-sm font-bold mb-2">Nom du Concours</label>
                <input type="text" class="form-input mt-1 block w-full" id="nom_concours" name="nom_concours" value="{{ $concours->nom_concours }}" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea class="form-textarea mt-1 block w-full" id="description" name="description" rows="3" required>{{ $concours->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="date_debut" class="block text-gray-700 text-sm font-bold mb-2">Délai de postulation</label>
                <input type="date" class="form-input mt-1 block w-full" id="date_debut" name="date_debut" value="{{ $concours->date_debut }}" required>
            </div>
            <div class="mb-4">
                <label for="date_fin" class="block text-gray-700 text-sm font-bold mb-2">Date du concours</label>
                <input type="date" class="form-input mt-1 block w-full" id="date_fin" name="date_fin" value="{{ $concours->date_fin }}" required>
            </div>

            <button type="submit" class="btn btn-salmon py-2 px-4 rounded">Modifier</button>
        </form>
    </div>
</div>
</body>
</html>
