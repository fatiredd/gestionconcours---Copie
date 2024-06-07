<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Concours</title>
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
    <h1 class="text-5xl font-bold mb-4 text-center text-gray-800">Liste des Concours</h1>

    @if (auth()->check())
        <a href="{{ route('concours.create') }}" class="btn mb-3 inline-block btn-salmon py-2 px-4 rounded">Créer un concours</a>
    @endif

    <a href="{{ route('concours.resultats') }}" class="btn mb-3 inline-block btn-gray py-2 px-4 rounded">Afficher les résultats</a>

    @if($concours->isEmpty())
        <div class="alert alert-warning" role="alert">
            Aucun concours pour le moment.
        </div>
    @else
        <div class="table-responsive">
            <table class="table-auto w-full bg-white rounded-lg shadow-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Nom du Concours</th>
                        <th class="py-3 px-6 text-left">Description</th>
                        <th class="py-3 px-6 text-left">Délai de postulation</th>
                        <th class="py-3 px-6 text-left">Date du concours</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach($concours as $concour)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $concour->nom_concours }}</td>
                        <td class="py-3 px-6 text-left">{{ $concour->description }}</td>
                        <td class="py-3 px-6 text-left">{{ $concour->date_debut }}</td>
                        <td class="py-3 px-6 text-left">{{ $concour->date_fin }}</td>
                        <td class="py-3 px-6 text-center">
                            @if (auth()->check())
                                <a href="{{ route('concours.edit', $concour->id) }}" class="btn btn-sm inline-block btn-pink py-1 px-2 rounded">Modifier</a>
                                <form action="{{ route('concours.destroy', $concour->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm inline-block btn-gray py-1 px-2 rounded">Supprimer</button>
                                </form>
                            @endif
                            <a href="{{ route('concours.show', $concour->id) }}" class="btn btn-sm inline-block btn-salmon py-1 px-2 rounded">Afficher les détails</a>
                            <a href="{{ route('candidature.create', ['concours_id' => $concour->id]) }}" class="btn btn-sm inline-block btn-pink py-1 px-2 rounded">Postuler</a>
                            @if (auth()->check())
                                <a href="{{ route('concours.candidats', $concour->id) }}" class="btn btn-sm inline-block btn-salmon py-1 px-2 rounded">Voir les candidats</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $concours->links() }}
        </div>
    @endif
</div>
</body>
</html>
