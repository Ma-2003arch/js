@extends('layout.main')

@section('content')
    <title>Gestion des Tontines</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <div class="container mt-5">
        <h1 class="text-center">Gestion des Tontines</h1>
        <form action="{{ route('tontines.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom de la Tontine</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="montant">Montant</label>
                <input type="number" step="0.01" class="form-control" id="montant" name="montant" required>
            </div>
            <div class="form-group">
                <label for="date_debut">Date de Début</label>
                <input type="date" class="form-control" id="date_debut" name="date_debut" required>
            </div>
            <div class="form-group">
                <label for="date_fin">Date de Fin</label>
                <input type="date" class="form-control" id="date_fin" name="date_fin" required>
            </div>
            <button type="submit" class="btn btn-primary">Créer la Tontine</button>
        </form>
    </div>
@endsection