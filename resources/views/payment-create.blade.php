@extends('layout.main')
@section('content')
    <title>Formulaire de Paiement</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --success-color: #4cc9f0;
            --light-color: #f8f9fa;
            --dark-color: #212529;
        }
        
        .payment-card {
            background: #fff;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin-top: 3rem;
            margin-bottom: 3rem;
            border: none;
            transition: transform 0.3s ease;
            max-width: 600px;
        }
        
        .payment-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }
        
        .payment-header {
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 1rem;
        }
        
        .payment-header h2 {
            color: var(--dark-color);
            font-weight: 700;
            font-size: 2rem;
        }
        
        .payment-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
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
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.25);
        }
        
        .input-group-text {
            background-color: #f8f9fa;
            border-radius: 8px 0 0 8px;
        }
        
        .btn-payment {
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
            margin-top: 1rem;
            text-transform: uppercase;
        }
        
        .btn-payment:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.3);
        }
        
        .payment-method-icon {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            object-fit: contain;
        }
        
        .form-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
        }
        
        @media (max-width: 768px) {
            .payment-card {
                padding: 1.5rem;
            }
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="payment-card mx-auto">
                    <div class="payment-header">
                        <h2><i class="fas fa-credit-card me-2"></i>Formulaire de Paiement</h2>
                    </div>
                    
                    <form action="/process-payment" method="POST">
                        @csrf
                        
                        <!-- Champ pour le montant -->
                        <div class="form-group mb-4">
                            <label for="montant" class="form-label">Montant (FCFA)</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                                <input type="number" class="form-control" id="montant" name="montant" 
                                       placeholder="Entrez le montant" required step="0.01">
                                <span class="input-group-text">FCFA</span>
                            </div>
                        </div>

                        <!-- Champ pour la date de paiement -->
                        <div class="form-group mb-4">
                            <label for="date_paiement" class="form-label">Date de Paiement</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
                                <input type="date" class="form-control" id="date_paiement" name="date_paiement" required>
                            </div>
                        </div>

                        <!-- Sélection du mode de paiement -->
                        <div class="form-group mb-4">
                            <label for="mode_paiement" class="form-label">Mode de Paiement</label>
                            <select class="form-select" id="mode_paiement" name="mode_paiement" required>
                                <option value="" selected disabled>Sélectionnez un mode de paiement</option>
                                <option value="mixx_by_yas">
                                    <img src="https://via.placeholder.com/30x30?text=M" class="payment-method-icon"> Mixx by Yas
                                </option>
                                <option value="moovmoney_pro">
                                    <img src="https://via.placeholder.com/30x30?text=MM" class="payment-method-icon"> MoovMoney Professionnel
                                </option>
                                <option value="especes">
                                    <img src="https://via.placeholder.com/30x30?text=C" class="payment-method-icon"> Espèces
                                </option>
                            </select>
                        </div>

                        <!-- Champ pour le numéro de téléphone (conditionnel) -->
                        <div class="form-group mb-4" id="phone-field" style="display: none;">
                            <label for="phone" class="form-label">Numéro de Téléphone</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                <input type="tel" class="form-control" id="phone" name="phone" 
                                       placeholder="Ex: 07 12 34 56 78" pattern="[0-9]{10}">
                            </div>
                            <small class="text-muted">Format: 10 chiffres sans espaces</small>
                        </div>

                        <!-- Champ pour la référence de transaction (conditionnel) -->
                        <div class="form-group mb-4" id="transaction-field" style="display: none;">
                            <label for="transaction_ref" class="form-label">Référence de Transaction</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-receipt"></i></span>
                                <input type="text" class="form-control" id="transaction_ref" name="transaction_ref" 
                                       placeholder="Entrez la référence de transaction">
                            </div>
                        </div>

                        <!-- Bouton de soumission -->
                        <button type="submit" class="btn btn-payment">
                            <i class="fas fa-paper-plane me-2"></i> Effectuer le Paiement
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

    <!-- Script amélioré pour la gestion des champs conditionnels -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modePaiement = document.getElementById('mode_paiement');
            const phoneField = document.getElementById('phone-field');
            const transactionField = document.getElementById('transaction-field');
            
            function toggleFields() {
                const selectedMode = modePaiement.value;
                
                if (selectedMode === 'mixx_by_yas' || selectedMode === 'moovmoney_pro') {
                    phoneField.style.display = 'block';
                    transactionField.style.display = 'block';
                    document.getElementById('phone').setAttribute('required', '');
                    document.getElementById('transaction_ref').setAttribute('required', '');
                } else {
                    phoneField.style.display = 'none';
                    transactionField.style.display = 'none';
                    document.getElementById('phone').removeAttribute('required');
                    document.getElementById('transaction_ref').removeAttribute('required');
                }
            }
            
            modePaiement.addEventListener('change', toggleFields);
            
            // Initialisation au chargement
            toggleFields();
        });
    </script>
@endsection