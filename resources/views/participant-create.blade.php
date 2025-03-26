@extends('layout.main')

@section('content')
    <title>Gestion des Participations</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #2e59d9;
            --accent-color: #1cc88a;
            --dark-color: #5a5c69;
            --light-color: #f8f9fc;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
        }
        
        .participation-container {
            max-width: 800px;
            margin: 2rem auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            padding: 2.5rem;
        }
        
        .participation-header {
            text-align: center;
            margin-bottom: 2.5rem;
            position: relative;
            padding-bottom: 1rem;
        }
        
        .participation-header h1 {
            font-weight: 700;
            color: var(--dark-color);
            font-size: 2.2rem;
        }
        
        .participation-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            border-radius: 2px;
        }
        
        .form-label {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
        }
        
        .form-control, .form-select {
            border-radius: 8px;
            border: 1px solid #e3e6f0;
            padding: 0.75rem 1.25rem;
            transition: all 0.3s;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
        }
        
        .form-select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%235a5c69' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
        }
        
        .btn-participation {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 8px;
            padding: 0.75rem;
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: 0.5px;
            color: white;
            transition: all 0.3s;
            width: 100%;
            margin-top: 1.5rem;
            text-transform: uppercase;
        }
        
        .btn-participation:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(78, 115, 223, 0.3);
        }
        
        .input-icon {
            position: relative;
        }
        
        .input-icon i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #adb5bd;
        }
        
        @media (max-width: 768px) {
            .participation-container {
                padding: 1.5rem;
            }
            
            .participation-header h1 {
                font-size: 1.8rem;
            }
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="participation-container">
                    <div class="participation-header">
                        <h1><i class="fas fa-users me-2"></i>Gestion des Participations</h1>
                    </div>
                    
                    <form action="{{ route('participant.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group mb-4">
                            <label for="user_id" class="form-label">Utilisateur</label>
                            <div class="input-icon">
                                <select class="form-select" id="user_id" name="user_id" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        
                        <div class="form-group mb-4">
                            <label for="tontine_id" class="form-label">Tontine</label>
                            <div class="input-icon">
                                <select class="form-select" id="tontine_id" name="tontine_id" required>
                                    @foreach($tontines as $tontine)
                                        <option value="{{ $tontine->id }}">{{ $tontine->nom }}</option>
                                    @endforeach
                                </select>
                                <i class="fas fa-hand-holding-usd"></i>
                            </div>
                        </div>
                        
                        <div class="form-group mb-4">
                            <label for="date_participation" class="form-label">Date de Participation</label>
                            <div class="input-icon">
                                <input type="date" class="form-control" id="date_participation" name="date_participation" required>
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-participation">
                            <i class="fas fa-save me-2"></i> Enregistrer la Participation
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        // Initialisation de la date du jour par défaut
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('date_participation').value = today;
        });
    </script>
@endsection