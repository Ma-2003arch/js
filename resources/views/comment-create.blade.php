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
        --light-color: #f8f9fa;
        --dark-color: #212529;
    }
    
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f5f7fa;
    }
    
    .comment-container {
        max-width: 800px;
        margin: 2rem auto;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        padding: 2.5rem;
    }
    
    .comment-header {
        text-align: center;
        margin-bottom: 2.5rem;
        position: relative;
        padding-bottom: 1rem;
    }
    
    .comment-header h1 {
        font-weight: 700;
        color: var(--dark-color);
        font-size: 2.2rem;
    }
    
    .comment-header::after {
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
        box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.25);
    }
    
    .form-select {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23212529' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 0.75rem center;
        background-size: 16px 12px;
    }
    
    textarea.form-control {
        min-height: 150px;
        resize: vertical;
    }
    
    .btn-comment {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        border: none;
        border-radius: 8px;
        padding: 0.75rem 2rem;
        font-weight: 600;
        font-size: 1rem;
        letter-spacing: 0.5px;
        color: white;
        transition: all 0.3s;
        margin-top: 1.5rem;
        text-transform: uppercase;
    }
    
    .btn-comment:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(67, 97, 238, 0.3);
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
        .comment-container {
            padding: 1.5rem;
        }
        
        .comment-header h1 {
            font-size: 1.8rem;
        }
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="comment-container">
                <div class="comment-header">
                    <h1><i class="fas fa-comment me-2"></i>Ajouter un commentaire</h1>
                </div>
                
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                <form action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    
                    <div class="form-group mb-4">
                        <label for="contenu" class="form-label">Contenu du commentaire</label>
                        <textarea name="contenu" id="contenu" class="form-control" 
                                  placeholder="Saisissez votre commentaire ici..." required></textarea>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="user_id" class="form-label">Utilisateur</label>
                                <div class="input-icon">
                                    <select name="user_id" id="user_id" class="form-select" required>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="article_id" class="form-label">Article</label>
                                <div class="input-icon">
                                    <select name="article_id" id="article_id" class="form-select" required>
                                        @foreach ($articles as $article)
                                            <option value="{{ $article->id }}">{{ $article->title }}</option>
                                        @endforeach
                                    </select>
                                    <i class="fas fa-newspaper"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-comment">
                            <i class="fas fa-paper-plane me-2"></i> Publier le commentaire
                        </button>
                    </div>
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
    // Initialisation du textarea avec un éditeur simple
    $(document).ready(function() {
        // Vous pourriez intégrer un éditeur WYSIWYG ici comme TinyMCE ou CKEditor
        $('#contenu').on('focus', function() {
            $(this).css('border-color', '#4361ee');
        });
    });
</script>
@endsection