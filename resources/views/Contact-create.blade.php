
<@extends('layout.main')
@section('content')
    <!-- Bootstrap CSS CDN -->
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
            background-color: var(--light-color);
        }
        
        .contact-container {
            max-width: 1000px;
            margin: 3rem auto;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
        }
        
        .contact-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 2.5rem;
            text-align: center;
        }
        
        .contact-header h1 {
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .contact-header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        .contact-body {
            background: white;
            padding: 3rem;
        }
        
        .contact-form .form-control {
            border-radius: 8px;
            padding: 0.75rem 1rem;
            border: 1px solid #e3e6f0;
            transition: all 0.3s;
        }
        
        .contact-form .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
        }
        
        .contact-form label {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
        }
        
        .btn-contact {
            background: var(--primary-color);
            border: none;
            border-radius: 8px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            color: white;
            transition: all 0.3s;
        }
        
        .btn-contact:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }
        
        .contact-info {
            background: #f8f9fc;
            padding: 2rem;
            border-radius: 10px;
            height: 100%;
        }
        
        .contact-item {
            margin-bottom: 1.5rem;
            display: flex;
            align-items: flex-start;
        }
        
        .contact-icon {
            background: var(--primary-color);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            flex-shrink: 0;
        }
        
        .contact-details h4 {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 0.3rem;
        }
        
        .contact-details p {
            color: #6c757d;
            margin-bottom: 0;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 2rem;
        }
        
        .social-links a {
            color: var(--dark-color);
            background: #e3e6f0;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }
        
        @media (max-width: 768px) {
            .contact-body {
                padding: 2rem;
            }
            
            .contact-header {
                padding: 2rem 1.5rem;
            }
        }
    </style>

    <div class="contact-container">
        <div class="contact-header">
            <h1><i class="fas fa-envelope-open-text me-2"></i>Contactez-nous</h1>
            <p>Nous sommes à votre écoute pour toute question ou demande d'information</p>
        </div>
        
        <div class="contact-body">
            <div class="row">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <form class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name">Votre nom</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Entrez votre nom" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email">Votre email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="subject">Sujet</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Objet de votre message" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="message">Votre message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Décrivez votre demande en détail..." required></textarea>
                        </div>
                        
                        <div class="text-end">
                            <button type="submit" class="btn btn-contact">
                                <i class="fas fa-paper-plane me-2"></i> Envoyer le message
                            </button>
                        </div>
                    </form>
                </div>
                
                <div class="col-lg-5">
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-details">
                                <h4>Adresse</h4>
                                <p>123 Avenue des Entreprises<br>Lomé, Togo</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="contact-details">
                                <h4>Téléphone</h4>
                                <p>+228 70 12 34 56<br>+228 22 22 22 22</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <h4>Email</h4>
                                <p>contact@votresociete.com<br>support@votresociete.com</p>
                            </div>
                        </div>
                        
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        // Animation pour les éléments de contact
        $(document).ready(function() {
            $('.contact-item').each(function(i) {
                $(this).delay(100 * i).animate({
                    opacity: 1,
                    left: '0'
                }, 400);
            });
        });
    </script>
@endsection