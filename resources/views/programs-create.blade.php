@extends("layout.main")
@section('content')
    <title>Formulaire de Programme</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .programme-form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .programme-form h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .programme-form label {
            font-weight: bold;
        }
        .programme-form .form-group {
            margin-bottom: 15px;
        }
        .programme-form .btn-primary {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="programme-form">
                    <h2>Créer un Programme</h2>
                    <form action="/process-programme" method="POST">
                        <!-- Champ pour le nom du programme -->
                        <div class="form-group">
                            <label for="nom">Nom du Programme</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez le nom du programme" required>
                        </div>

                        <!-- Champ pour la description du programme -->
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Entrez une description du programme"></textarea>
                        </div>

                        <!-- Champ pour la date de début -->
                        <div class="form-group">
                            <label for="date_debut">Date de Début</label>
                            <input type="date" class="form-control" id="date_debut" name="date_debut" required>
                        </div>

                        <!-- Champ pour la date de fin -->
                        <div class="form-group">
                            <label for="date_fin">Date de Fin</label>
                            <input type="date" class="form-control" id="date_fin" name="date_fin" required>
                        </div>

                        <!-- Champ pour sélectionner la tontine -->
                        <div class="form-group">
                            <label for="tontine_id">Tontine Associée</label>
                            <select class="form-control" id="tontine_id" name="tontine_id" required>
                                <option value="">Sélectionnez une tontine</option>
                                <!-- Options dynamiques à remplir via le backend -->
                                <option value="1">Tontine 1</option>
                                <option value="2">Tontine 2</option>
                            </select>
                        </div>

                        <!-- Champ pour sélectionner l'utilisateur -->
                        <div class="form-group">
                            <label for="user_id">Utilisateur</label>
                            <select class="form-control" id="user_id" name="user_id" required>
                                <option value="">Sélectionnez un utilisateur</option>
                                <!-- Options dynamiques à remplir via le backend -->
                                <option value="1">Utilisateur 1</option>
                                <option value="2">Utilisateur 2</option>
                            </select>
                        </div>

                        <!-- Bouton de soumission -->
                        <button type="submit" class="btn btn-primary">Créer le Programme</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS et dépendances CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
@endsection