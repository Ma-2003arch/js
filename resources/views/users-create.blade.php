@extends('layout.main')

@section('title', 'Gestion des Utilisateurs')

@section('content')
<div class="container">
    <h1 class="my-4">Liste des Utilisateurs</h1>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Vérifié</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if ($user->email_verified_at)
                            <span class="badge bg-success">Oui</span>
                        @else
                            <span class="badge bg-danger">Non</span>
                        @endif
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i> Modifier
                        </a>
                        <a href="#" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i> Supprimer
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center">
        {{ $users->links() }} <!-- Pagination -->
    </div>
</div>
@endsection