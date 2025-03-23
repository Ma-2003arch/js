@extends('layout.main')

@section('content')
<!-- Styles personnalisés pour la barre de navigation -->

    <style>
        /* Supprime les marges et paddings par défaut */
        
        /* Styles pour la barre de navigation */
        .navbar {
            margin: 0 !important;
            padding: 0 !important;
        }
        .banner h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 3rem;
            font-weight: 700;
            color: #ffffff;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
            animation: fadeIn 2s ease-in-out;
        }
        .container-fluid {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        /* Styles pour la bannière */
        .banner {
            background: url({{ asset("banniere.jpeg") }}) no-repeat center center;
            background-size: cover;
            height: 450px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(136, 122, 202);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin: 0;
            padding: 0;
        }
        .banner h1 span {
            background: linear-gradient(45deg, #ebeaee, #e1e0e3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Supprime les marges et paddings des éléments Bootstrap */
        

        
        /* Autres styles personnalisés */
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            height: 150px;
            object-fit: cover;
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 0.75rem;
        }

        .card-text {
            font-size: 0.9rem;
            color: #555;
        }

        .price-cash {
            color: #28a745;
            font-weight: bold;
        }

        .price-tontine {
            color: #007bff;
            font-weight: bold;
        }  
    </style>
    <!-- Bannière -->
    <div class="banner">
        <h1><span>Découvrez des ustensiles de qualité à moindre coût</span>
        
        <span>et bénéficiez de packs exclusifs.</span></h1>
    </div>
   
    
     <!-- Contenu principal -->
     <main class="container my-5">
        <div class="row">
            <!-- Article 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Image de l'article">
                    <div class="card-body">
                        <h5 class="card-title">Article 1</h5>
                        <p class="card-text">Une brève description de l'article. Ce texte est un exemple de description.</p>
                        <p class="price-cash">Prix cash : 50 000 FCFA</p>
                        <p class="price-tontine">Prix tontine : 45 000 FCFA</p>
                    </div>
                </div>
            </div>
            <!-- Article 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Image de l'article">
                    <div class="card-body">
                        <h5 class="card-title">Article 2</h5>
                        <p class="card-text">Une brève description de l'article. Ce texte est un exemple de description.</p>
                        <p class="price-cash">Prix cash : 60 000 FCFA</p>
                        <p class="price-tontine">Prix tontine : 55 000 FCFA</p>
                    </div>
                </div>
            </div>
            <!-- Article 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Image de l'article">
                    <div class="card-body">
                        <h5 class="card-title">Article 3</h5>
                        <p class="card-text">Une brève description de l'article. Ce texte est un exemple de description.</p>
                        <p class="price-cash">Prix cash : 70 000 FCFA</p>
                        <p class="price-tontine">Prix tontine : 65 000 FCFA</p>
                    </div>
                </div>
            </div>
            <!-- Duplication des articles -->
            <!-- Article 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Image de l'article">
                    <div class="card-body">
                        <h5 class="card-title">Article 4</h5>
                        <p class="card-text">Une brève description de l'article. Ce texte est un exemple de description.</p>
                        <p class="price-cash">Prix cash : 80 000 FCFA</p>
                        <p class="price-tontine">Prix tontine : 75 000 FCFA</p>
                    </div>
                </div>
            </div>
            <!-- Article 5 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Image de l'article">
                    <div class="card-body">
                        <h5 class="card-title">Article 5</h5>
                        <p class="card-text">Une brève description de l'article. Ce texte est un exemple de description.</p>
                        <p class="price-cash">Prix cash : 90 000 FCFA</p>
                        <p class="price-tontine">Prix tontine : 85 000 FCFA</p>
                    </div>
                </div>
            </div>
            <!-- Article 6 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Image de l'article">
                    <div class="card-body">
                        <h5 class="card-title">Article 6</h5>
                        <p class="card-text">Une brève description de l'article. Ce texte est un exemple de description.</p>
                        <p class="price-cash">Prix cash : 100 000 FCFA</p>
                        <p class="price-tontine">Prix tontine : 95 000 FCFA</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection