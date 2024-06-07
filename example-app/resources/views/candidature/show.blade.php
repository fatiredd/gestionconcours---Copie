<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Informations du Candidat</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Informations du Candidat</h1>

        <div class="card">
            <div class="card-body">
                <h2 class="card-title">{{ $candidat->nom }} {{ $candidat->prenom }}</h2>
                <p class="card-text"><strong>CIN:</strong> {{ $candidat->cin }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $candidat->mail }}</p>
                <p class="card-text"><strong>Niveau Scolaire:</strong> {{ $candidat->niveau_scolaire }}</p>
                <p class="card-text"><strong>Filière:</strong> {{ $candidat->filiere }}</p>
            </div>
        </div>

        <a href="{{ route('candidature.index', $candidat->concours_id) }}" class="btn btn-primary mt-4">Retour à la liste des candidats</a>
    </div>
</body>
</html>
