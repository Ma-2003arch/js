@extends('layout.main')

@section('banner')
    <!-- Bannière améliorée -->
    <div class="banner">
        <div class="banner-content animated">
            <h1>Découvrez des ustensiles de qualité à moindre coût</h1>
            <p class="lead">Profitez de nos packs exclusifs et économisez sur vos achats</p>
            <a href="#products" class="btn btn-primary btn-lg btn-banner">Voir nos produits</a>
        </div>
    </div>
@endsection

@section('content')
    <style>
        /* Styles personnalisés */
        .banner {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4)), url({{ asset("banniere.jpeg") }}) no-repeat center center;
            background-size: cover;
            height: 60vh;
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin-bottom: 3rem;
        }

        .banner-content {
            text-align: center;
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .banner h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 3.5rem;
            font-weight: 700;
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
            margin-bottom: 1.5rem;
            line-height: 1.3;
        }

        .banner p.lead {
            font-size: 1.5rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
        }

        .btn-banner {
            padding: 0.8rem 2rem;
            font-weight: 600;
            border-radius: 50px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animated {
            animation: fadeInUp 1s ease-out;
        }

        /* Cards */
        .card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 2rem;
            height: 100%;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-title {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #333;
        }

        .card-text {
            color: #666;
            margin-bottom: 1.5rem;
            font-size: 1rem;
            line-height: 1.6;
        }

        .price-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
        }

        .price-cash {
            color: #28a745;
            font-weight: 700;
            font-size: 1.2rem;
        }

        .price-tontine {
            color: #007bff;
            font-weight: 700;
            font-size: 1.2rem;
        }

        .badge-discount {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #ff4757;
            color: white;
            padding: 0.35rem 0.7rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.85rem;
        }

        /* Section title */
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title h2 {
            font-weight: 700;
            color: #333;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .section-title p {
            color: #666;
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .banner h1 {
                font-size: 2.5rem;
            }
            
            .banner p.lead {
                font-size: 1.2rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
        }
    </style>
    
    <!-- Contenu principal amélioré -->
    <div class="container py-5" id="products">
        <div class="section-title">
            <h2>Nos Produits Phares</h2>
            <p>Découvrez notre sélection d'ustensiles de qualité à des prix imbattables</p>
        </div>
        
        <div class="row g-4">
            @foreach([1, 2, 3, 4, 5, 6] as $item)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <span class="badge-discount">-10%</span>
                    <img src="https://source.unsplash.com/random/600x400?kitchen,utensil,{{ $item }}" class="card-img-top" alt="Ustensile de cuisine">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Ustensile Premium {{ $item }}</h5>
                        <p class="card-text">Description détaillée de ce produit haut de gamme. Matériaux de qualité supérieure pour une durabilité exceptionnelle.</p>
                        <div class="price-container mt-auto">
                            <span class="price-cash">50,000 FCFA</span>
                            <span class="price-tontine">45,000 FCFA</span>
                        </div>
                        <div class="d-grid mt-3">
                            <button class="btn btn-outline-primary">Ajouter au panier</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Call to action -->
        <div class="text-center mt-5">
            <h3 class="mb-4">Vous ne trouvez pas ce que vous cherchez ?</h3>
            <a href="{{ route('Contact-create') }}" class="btn btn-primary btn-lg px-4">Contactez-nous</a>
        </div>
    </div>
@endsection