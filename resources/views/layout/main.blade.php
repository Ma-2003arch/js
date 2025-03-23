<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Projet Laravel</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN pour les icônes -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Supprime les marges et paddings par défaut */
        body, html {
            margin: 0;
            padding: 0;
        }
        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 40px 0;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .footer-section {
            margin: 10px 0;
        }

        .footer-section h3 {
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin: 8px 0;
        }

        .footer-section ul li a {
            color: #ecf0f1;
            text-decoration: none;
        }

        .footer-section ul li a:hover {
            color: #3498db;
        }

        .partner-logos img {
            height: 50px;
            margin: 0 10px;
        }

        .footer-bottom {
            margin-top: 20px;
            border-top: 1px solid #444;
            padding-top: 10px;
            text-align: center;
        }
        .footer-content {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .footer-section {
            margin: 10px 0;
        }

        .footer-section h3 {
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin: 8px 0;
        }

        .footer-section ul li a {
            color: #ecf0f1;
            text-decoration: none;
        }

        .footer-section ul li a:hover {
            color: #3498db;
        }

        .partner-logos img {
            height: 50px;
            margin: 0 10px;
        }

        .footer-bottom {
            margin-top: 20px;
            border-top: 1px solid #444;
            padding-top: 10px;
            text-align: center;
        }  
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('logo.jpeg') }}" alt="Logo" width="80" height="50">
            </a>
    
            <!-- Bouton toggler pour les écrans mobiles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- Liens de navigation -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('article-create') ? 'active' : '' }}" href="{{ route('article-create') }}">Nos articles</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   
   
    
    <!-- Contenu principal -->
    <div class="container my-5">
        @yield("content")
    </div>

    <!-- Boutons d'action -->
    <div class="container my-4">
        <div class="row g-3">
            <div class="col-md-4">
                <a class="btn btn-primary w-100 {{ request()->routeIs('comment-create') ? 'active' : '' }}" href="{{ route('comment-create') }}">
                    <i class="fas fa-comment"></i> Commentaire
                </a>
            </div>
            <div class="col-md-4">
                <a class="btn btn-success w-100 {{ request()->routeIs('payment-create') ? 'active' : '' }}" href="{{ route('payment-create') }}">
                    <i class="fas fa-credit-card"></i> Paiement
                </a>
            </div>
            <div class="col-md-4">
                <a class="btn btn-info w-100 {{ request()->routeIs('programs-create') ? 'active' : '' }}" href="{{ route('programs-create') }}">
                    <i class="fas fa-calendar-alt"></i> Programme
                </a>
            </div>
            <div class="col-md-4">
                <a class="btn btn-warning w-100 {{ request()->routeIs('tontine-create') ? 'active' : '' }}" href="{{ route('tontine-create') }}">
                    <i class="fas fa-hand-holding-usd"></i> Tontine
                </a>
            </div>
            <div class="col-md-4">
                <a class="btn btn-danger w-100 {{ request()->routeIs('participant-create') ? 'active' : '' }}" href="{{ route('participant-create') }}">
                    <i class="fas fa-users"></i> Participation
                </a>
            </div>
            <div class="col-md-4">
                <a class="btn btn-warning w-100 {{ request()->routeIs('user-create') ? 'active' : '' }}" href="{{ route('user-create') }}">
                    <i class="fas fa-user"></i> Mon compte
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Liens utiles</h3>
                    <ul>
                        <li><a href="#">Politique de confidentialité</a></li>
                        <li><a href="#">Aide et FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Email: gddjame@gmail.com</p>
                    <p>Téléphone: +228 70 38 68 06 <br>+228 99 68 54 26</p>
                </div>
                <div class="footer-section">
                    <h3>Partenaires</h3>
                    <div class="partner-logos">
                        <img src="logo1.jpeg" alt="Partenaire 1">
                        <img src="logo2.jpeg" alt="Partenaire 2">
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 VotreSite. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS CDN (avec Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>