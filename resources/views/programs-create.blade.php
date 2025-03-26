@extends("layout.main")
@section('content')
    <title>Formulaire de Programme</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --light-color: #f8f9fa;
            --dark-color: #212529;
        }
        
        .programme-card {
            background: #fff;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin-top: 3rem;
            margin-bottom: 3rem;
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .programme-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 2.5rem;
            position: relative;
            padding-bottom: 1rem;
        }
        
        .form-header h2 {
            color: var(--dark-color);
            font-weight: 700;
            font-size: 2rem;
        }
        
        .form-header::after {
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
            display: block;
        }
        
        .form-control {
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            padding: 0.75rem 1.25rem;
            transition: all 0.3s;
            height: auto;
        }
        
        .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.25rem rgba(72, 149, 239, 0.25);
        }
        
        .form-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
        }
        
        .btn-submit {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 8px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            color: white;
            transition: all 0.3s;
            width: 100%;
            margin-top: 1.5rem;
        }
        
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.3);
        }
        
        .date-group {
            display: flex;
            gap: 20px;
        }
        
        .date-group .form-group {
            flex: 1;
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
            .date-group {
                flex-direction: column;
                gap: 0;
            }
            
            .programme-card {
                padding: 1.5rem;
            }
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="programme-card">
                    <div class="form-header">
                        <h2><i class="fas fa-calendar-plus me-2"></i>Créer un Programme</h2>
                    </div>
                    
                    <form action="/process-programme" method="POST">
                        @csrf
                        
                        <!-- Champ pour le nom du programme -->
                        <div class="form-group mb-4">
                            <label for="nom" class="form-label">Nom du Programme</label>
                            <div class="input-icon">
                                <input type="text" class="form-control" id="nom" name="nom" 
                                       placeholder="Entrez le nom du programme" required>
                                <i class="fas fa-heading"></i>
                            </div>
                        </div>

                        <!-- Champ pour la description du programme -->
                        <div class="form-group mb-4">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4"
                                      placeholder="Décrivez les objectifs de ce programme"></textarea>
                        </div>

                        <!-- Groupe de dates -->
                        <div class="date-group mb-4">
                            <!-- Champ pour la date de début -->
                            <div class="form-group">
                                <label for="date_debut" class="form-label">Date de Début</label>
                                <div class="input-icon">
                                    <input type="date" class="form-control" id="date_debut" name="date_debut" required>
                                    <i class="fas fa-calendar-day"></i>
                                </div>
                            </div>

                            <!-- Champ pour la date de fin -->
                            <div class="form-group">
                                <label for="date_fin" class="form-label">Date de Fin</label>
                                <div class="input-icon">
                                    <input type="date" class="form-control" id="date_fin" name="date_fin" required>
                                    <i class="fas fa-calendar-week"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Champ pour sélectionner la tontine -->
                        <div class="form-group mb-4">
                            <label for="tontine_id" class="form-label">Tontine Associée</label>
                            <select class="form-control form-select" id="tontine_id" name="tontine_id" required>
                                <option value="" selected disabled>Sélectionnez une tontine</option>
                                @foreach($tontines as $tontine)
                                    <option value="{{ $tontine->id }}">{{ $tontine->nom }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Champ pour sélectionner l'utilisateur -->
                        <div class="form-group mb-4">
                            <label for="user_id" class="form-label">Responsable</label>
                            <select class="form-control form-select" id="user_id" name="user_id" required>
                                <option value="" selected disabled>Sélectionnez un responsable</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Bouton de soumission -->
                        <button type="submit" class="btn btn-submit">
                            <i class="fas fa-save me-2"></i> Créer le Programme
                        </button>
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