@extends('layout.main')

@section('content')
    <!-- Styles personnalisés -->
    <style>
        .tontine-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            padding: 2.5rem;
            margin-top: 2rem;
            margin-bottom: 3rem;
        }
        
        .tontine-header {
            color: #2c3e50;
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
            padding-bottom: 15px;
        }
        
        .tontine-header:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(to right, #3498db, #2ecc71);
        }
        
        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.5rem;
        }
        
        .form-control {
            border-radius: 5px;
            border: 1px solid #ced4da;
            padding: 0.75rem 1rem;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        
        .btn-tontine {
            background: linear-gradient(to right, #3498db, #2ecc71);
            border: none;
            border-radius: 50px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 0.9rem;
            transition: all 0.3s;
            display: block;
            margin: 2rem auto 0;
            width: 200px;
        }
        
        .btn-tontine:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .date-input-group {
            display: flex;
            gap: 20px;
        }
        
        .date-input-group .form-group {
            flex: 1;
        }
        
        @media (max-width: 768px) {
            .date-input-group {
                flex-direction: column;
                gap: 0;
            }
            
            .tontine-container {
                padding: 1.5rem;
            }
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="tontine-container">
                    <h1 class="tontine-header">Gestion des Tontines</h1>
                    
                    <form action="{{ route('tontines.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group mb-4">
                            <label for="nom" class="form-label">Nom de la Tontine</label>
                            <input type="text" class="form-control" id="nom" name="nom" required 
                                   placeholder="Ex: Tontine Mensuelle Famille">
                        </div>
                        
                        <div class="form-group mb-4">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4"
                                      placeholder="Décrivez les objectifs et règles de cette tontine"></textarea>
                        </div>
                        
                        <div class="form-group mb-4">
                            <label for="montant" class="form-label">Montant (FCFA)</label>
                            <div class="input-group">
                                <input type="number" step="0.01" class="form-control" id="montant" 
                                       name="montant" required placeholder="50000">
                                <div class="input-group-append">
                                    <span class="input-group-text">FCFA</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="date-input-group mb-4">
                            <div class="form-group">
                                <label for="date_debut" class="form-label">Date de Début</label>
                                <input type="date" class="form-control" id="date_debut" name="date_debut" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="date_fin" class="form-label">Date de Fin</label>
                                <input type="date" class="form-control" id="date_fin" name="date_fin" required>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-tontine">
                            <i class="fas fa-save mr-2"></i> Créer la Tontine
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endsection