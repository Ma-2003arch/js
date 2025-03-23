@extends('layout.main')
@section('content')
    <title>Formulaire de Paiement</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .payment-form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .payment-form h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .payment-form label {
            font-weight: bold;
        }
        .payment-form .form-group {
            margin-bottom: 15px;
        }
        .payment-form .btn-primary {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="payment-form">
                    <h2>Formulaire de Paiement</h2>
                    <form action="/process-payment" method="POST">
                        <!-- Champ pour le montant -->
                        <div class="form-group">
                            <label for="montant">Montant</label>
                            <input type="number" class="form-control" id="montant" name="montant" placeholder="Entrez le montant" required>
                        </div>

                        <!-- Champ pour la date de paiement -->
                        <div class="form-group">
                            <label for="date_paiement">Date de Paiement</label>
                            <input type="date" class="form-control" id="date_paiement" name="date_paiement" required>
                        </div>

                        <!-- Sélection du mode de paiement -->
                        <div class="form-group">
                            <label for="mode_paiement">Mode de Paiement</label>
                            <select class="form-control" id="mode_paiement" name="mode_paiement" required>
                                <option value="">Sélectionnez un mode de paiement</option>
                                <option value="mixx_by_yas">Mixx by Yas</option>
                                <option value="moovmoney_pro">MoovMoney Professionnel</option>
                            </select>
                        </div>

                        <!-- Champ pour le numéro de téléphone (si applicable) -->
                        <div class="form-group" id="phone-field" style="display: none;">
                            <label for="phone">Numéro de Téléphone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Entrez votre numéro de téléphone">
                        </div>

                        

                        <!-- Bouton de soumission -->
                        <button type="submit" class="btn btn-primary">Payer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS et dépendances CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <!-- Script pour afficher/masquer les champs en fonction du mode de paiement -->
    <script>
        document.getElementById('mode_paiement').addEventListener('change', function() {
            const modePaiement = this.value;
            const phoneField = document.getElementById('phone-field');
            const transactionField = document.getElementById('transaction-field');

            if (modePaiement === 'mixx_by_yas' || modePaiement === 'moovmoney_pro') {
                phoneField.style.display = 'block';
                transactionField.style.display = 'block';
            } else {
                phoneField.style.display = 'none';
                transactionField.style.display = 'none';
            }
        });
    </script>
    @endsection
