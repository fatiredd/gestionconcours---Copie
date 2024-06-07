<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postuler au Concours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Couleur de fond */
            color: #212529; /* Couleur du texte */
        }
        .container {
            margin-top: 50px;
            background-color: #ffffff; /* Couleur de fond */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-label {
            color: #6c757d; /* Couleur du texte des labels */
            font-weight: bold; /* Texte en gras */
        }
        .btn-primary {
            background-color: #dc3545; /* Couleur du bouton */
            border-color: #dc3545; /* Couleur de la bordure */
            font-weight: bold; /* Texte en gras */
            border-radius: 20px; /* Coins arrondis */
        }
        .btn-primary:hover {
            background-color: #c82333; /* Couleur du bouton au survol */
            border-color: #bd2130; /* Couleur de la bordure au survol */
        }
        /* Header styles */
        .header {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
            color: white;
            padding: 10px 0;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<!-- Header -->
<div class="header">
    Mes Concours
</div>

<div class="container">
    <h1 class="text-4xl font-bold mb-4 underline">Postuler au Concours</h1>
    <form action="{{ route('candidature.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="mb-3">
            <label for="cin" class="form-label">CIN</label>
            <input type="text" class="form-control" id="cin" name="cin" required>
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label">Adresse Email</label>
            <input type="email" class="form-control" id="mail" name="mail" required>
        </div>
        <div class="mb-3">
            <label for="niveau_scolaire" class="form-label">Niveau Scolaire</label>
            <input type="text" class="form-control" id="niveau_scolaire" name="niveau_scolaire" required>
        </div>
        <div class="mb-3">
            <label for="filiere" class="form-label">Filière</label>
            <input type="text" class="form-control" id="filiere" name="filiere" required>
        </div>
        
        <!-- Hidden input field for concours_id -->
        <input type="hidden" name="concours_id" value="{{ $concours_id }}">
        
        <button type="submit" class="btn btn-primary btn-lg btn-block mt-4">Postuler</button>
    </form>
</div>

</body>
</html>
