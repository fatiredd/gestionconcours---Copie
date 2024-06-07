<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher Détails du Concours</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
    <style>
        .gradient {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
        }
        .btn-salmon {
            background-color: #FA8072;
            color: #fff; /* Texte blanc pour contraste */
            border-radius: 8px; /* Coins arrondis */
            padding: 10px 20px; /* Plus grand */
            font-size: 1.2rem; /* Un peu plus grand */
        }
        .btn-salmon:hover {
            background-color: #FF6347;
        }
        .container-details {
            background-color: #f3f3f3; /* Couleur de fond modifiée */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .details-title {
            font-size: 3rem; /* Plus grand */
            font-weight: bold; /* Gras */
            text-decoration: underline; /* Souligné */
            margin-bottom: 20px;
            color: #333; /* Couleur de texte modifiée */
        }
        .details-text {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #555; /* Couleur de texte modifiée */
        }
    </style>
</head>
<body class="leading-normal tracking-normal text-gray-800 gradient" style="font-family: 'Source Sans Pro', sans-serif;">

<!-- Navigation Bar -->
<nav id="header" class="fixed w-full z-30 top-0 text-gray-800">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
            <a class="text-gray-800 no-underline font-bold text-2xl lg:text-4xl" href="#">
                Mes Concours
            </a>
        </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>

<div class="container mx-auto mt-24 py-8">
    <h1 class="details-title text-center underline font-bold">{{ $concours->nom_concours }}</h1> <!-- Style du titre modifié -->
    
    <div class="container-details">
        <div class="card">
            <div class="card-body">
                <p class="card-text details-text"><strong>Description :</strong> {{ $concours->description }}</p>
                <p class="card-text details-text"><strong>Délai de postulation :</strong> {{ $concours->date_debut }}</p>
                <p class="card-text details-text"><strong>Date du concours :</strong> {{ $concours->date_fin }}</p>
            </div>
        </div>
    </div>

    <div class="mt-8 text-center"> <!-- Déplacement du bouton -->
        <a href="{{ route('concours.index') }}" class="btn btn-salmon">Retour à la liste des concours</a> <!-- Bouton modifié -->
    </div>
</div>

</body>
</html>
