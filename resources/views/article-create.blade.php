@extends('layout.main')

@section('content')
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --success-color: #4cc9f0;
            --light-color: #f8f9fa;
            --dark-color: #212529;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        
        .articles-header {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
            padding-bottom: 1rem;
        }
        
        .articles-header h1 {
            font-weight: 700;
            color: var(--dark-color);
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .articles-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            border-radius: 2px;
        }
        
        .article-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .article-card:hover {
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
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: var(--dark-color);
        }
        
        .card-text {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            line-height: 1.6;
        }
        
        .price-cash {
            color: #28a745;
            font-weight: 700;
            font-size: 1.1rem;
        }
        
        .price-tontine {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.1rem;
        }
        
        .stock-info {
            font-size: 0.9rem;
            color: #6c757d;
            margin-top: 0.5rem;
        }
        
        .stock-low {
            color: #dc3545;
            font-weight: 600;
        }
        
        .no-articles {
            text-align: center;
            padding: 2rem;
            color: #6c757d;
            font-size: 1.1rem;
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
        
        @media (max-width: 768px) {
            .articles-header h1 {
                font-size: 2rem;
            }
            
            .card-img-top {
                height: 180px;
            }
        }
    </style>

    <div class="container py-5">
        <div class="articles-header">
            <h1><i class="fas fa-box-open me-2"></i>Nos Articles</h1>
            <p class="text-muted">Découvrez notre sélection de produits de qualité</p>
        </div>
        
        <div class="row g-4">
            @if($articles->isEmpty())
                <div class="col-12">
                    <div class="no-articles">
                        <i class="fas fa-box-open fa-2x mb-3"></i>
                        <p>Aucun article disponible pour le moment.</p>
                        <a href="#" class="btn btn-primary mt-3">Voir nos promotions</a>
                    </div>
                </div>
            @else
                @foreach($articles as $article)
                <div class="col-lg-4 col-md-6">
                    <div class="article-card">
                        @if($article->discount > 0)
                        <span class="badge-discount">-{{ $article->discount }}%</span>
                        @endif
                        <img src="{{ $article->image_url ?? 'https://source.unsplash.com/random/600x400?product,commerce,'.$article->id }}" class="card-img-top" alt="{{ $article->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->name }}</h5>
                            <p class="card-text">{{ Str::limit($article->description, 100) }}</p>
                            
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p class="price-cash mb-0">
                                    <i class="fas fa-money-bill-wave me-1"></i>
                                    {{ number_format($article->price, 2, ',', ' ') }} FCFA
                                </p>
                                <p class="price-tontine mb-0">
                                    <i class="fas fa-hand-holding-usd me-1"></i>
                                    {{ number_format($article->tontine_price, 2, ',', ' ') }} FCFA
                                </p>
                            </div>
                            
                            <p class="stock-info @if($article->stock < 5) stock-low @endif">
                                <i class="fas fa-cubes me-1"></i>
                                Stock : {{ $article->stock }} disponible(s)
                            </p>
                            
                            <div class="d-grid mt-3">
                                <a href="#" class="btn btn-outline-primary">Voir détails</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection