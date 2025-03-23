@extends('layout.main')

@section('content')
    <title>Gestion des Participations</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Gestion des Participations</h1>
        <form action="{{ route('participant.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="user_id">Utilisateur</label>
                <select class="form-control" id="user_id" name="user_id" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tontine_id">Tontine</label>
                <select class="form-control" id="tontine_id" name="tontine_id" required>
                    @foreach($tontines as $tontine)
                        <option value="{{ $tontine->id }}">{{ $tontine->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="date_participation">Date de Participation</label>
                <input type="date" class="form-control" id="date_participation" name="date_participation" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Enregistrer la Participation</button>
        </form>
    </div>
@endsection