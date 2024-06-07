<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Liste des Candidats</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Liste des Candidats pour le Concours {{ $concours_id }}</h1>

        @if($candidats->isEmpty())
            <div class="alert alert-warning" role="alert">
                Aucun candidat pour ce concours.
            </div>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>CIN</th>
                        <th>Email</th>
                        <th>Niveau Scolaire</th>
                        <th>Filière</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($candidats as $candidat)
                        <tr>
                            <td>{{ $candidat->nom }}</td>
                            <td>{{ $candidat->prenom }}</td>
                            <td>{{ $candidat->cin }}</td>
                            <td>{{ $candidat->mail }}</td>
                            <td>{{ $candidat->niveau_scolaire }}</td>
                            <td>{{ $candidat->filiere }}</td>
                            <td>
                                <a href="{{ route('candidature.show', $candidat->id) }}" class="btn btn-info">Voir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
