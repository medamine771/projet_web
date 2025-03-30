<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSIASD - École Nationale Supérieure d'Informatique et Sciences des Données</title>
    <meta name="description" content="ENSIASD - École Nationale Supérieure d'Informatique et Sciences des Données">
    
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS externe -->
    <link rel="stylesheet" href="{{ asset('css/ensiasd.css') }}">
</head>
<body>
    <!-- Toast Container -->
    <div id="toast-container" class="toast-container"></div>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="{{ asset('img/logo.png') }}" alt="ENSIASD Logo" class="logo-img">
                    <h1 class="logo-text">ENSIASD</h1>
                </div>
                
                <!-- Navigation Desktop -->
                <nav class="nav-desktop">
                    <ul class="nav-links">
                        <li><a href="#" class="nav-link active">Accueil</a></li>
                        <li><a href="#" class="nav-link">À propos</a></li>
                        <li><a href="#" class="nav-link">Professeurs</a></li>
                        <li><a href="#" class="nav-link">Départements</a></li>
                        <li><a href="#" class="nav-link">Recherche</a></li>
                        <li><a href="#contact" class="nav-link">Contact</a></li>
                    </ul>
                    <div style="display: flex; gap: 1rem; align-items: center;">
                        <button id="login-button" class="login-btn">
                            <i class="fas fa-user"></i> Connexion
                        </button>
                        
                        <button id="dark-mode-toggle" class="dark-mode-btn" aria-label="Toggle dark mode">
                            <i id="moon-icon" class="fas fa-moon"></i>
                            <i id="sun-icon" class="fas fa-sun hidden"></i>
                        </button>
                    </div>
                </nav>
                
                <!-- Navigation Mobile -->
                <div class="nav-mobile">
                    <button id="login-button-mobile" class="login-btn">
                        <i class="fas fa-user"></i>
                    </button>
                    
                    <button id="dark-mode-toggle-mobile" class="dark-mode-btn" aria-label="Toggle dark mode">
                        <i class="fas fa-moon"></i>
                    </button>
                    <button id="mobile-menu-button" class="mobile-menu-btn" aria-label="Toggle menu">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            
            <!-- Menu Mobile -->
            <nav id="mobile-menu" class="mobile-menu hidden">
                <ul class="mobile-nav-links">
                    <li><a href="#" class="mobile-nav-link active">Accueil</a></li>
                    <li><a href="#" class="mobile-nav-link">À propos</a></li>
                    <li><a href="#" class="mobile-nav-link">Professeurs</a></li>
                    <li><a href="#" class="mobile-nav-link">Départements</a></li>
                    <li><a href="#" class="mobile-nav-link">Recherche</a></li>
                    <li><a href="#contact" class="mobile-nav-link">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1 class="hero-title">ENSIASD</h1>
                        <h2 class="hero-subtitle">École Nationale Supérieure d'Informatique et Sciences des Données</h2>
                        <p class="hero-description">
                            Excellence académique et innovation en informatique, intelligence artificielle et sciences des données
                        </p>
                        <div class="hero-buttons">
                            <a href="#" class="btn btn-primary">Nos Professeurs</a>
                            <a href="#" class="btn btn-outline">Nos Recherches</a>
                        </div>
                    </div>
                    <div class="hero-image">
                        <img src="{{ asset('img/campus.jpg') }}" alt="ENSIASD Campus" class="professor-img">
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Professors Section -->
        <section class="featured-professors section">
            <div class="container">
                <h2 class="section-title">Nos Professeurs Distingués</h2>
                <p class="section-description">
                    Découvrez notre corps professoral d'excellence, composé d'experts reconnus dans leurs domaines respectifs.
                </p>
                
                <div class="professors-grid">
                    <!-- Professor 1 -->
                    <div class="professor-card">
                        <div class="professor-image">
                            <img src="{{ asset('img/professors/john-doe.jpg') }}" alt="Prof. John Doe">
                        </div>
                        <div class="professor-content">
                            <h3 class="professor-name">Prof. John Doe</h3>
                            <p class="professor-title">Intelligence Artificielle</p>
                            <p class="professor-description">
                                Spécialiste en apprentissage automatique et IA explicable avec plus de 15 ans d'expérience.
                            </p>
                            <a href="#" class="btn btn-small btn-primary">Voir le profil</a>
                        </div>
                    </div>
                    
                    <!-- Professor 2 -->
                    <div class="professor-card">
                        <div class="professor-image">
                            <img src="{{ asset('img/professors/jane-smith.jpg') }}" alt="Prof. Jane Smith">
                        </div>
                        <div class="professor-content">
                            <h3 class="professor-name">Prof. Jane Smith</h3>
                            <p class="professor-title">Cybersécurité</p>
                            <p class="professor-description">
                                Experte en sécurité des systèmes d'information et cryptographie avancée.
                            </p>
                            <a href="#" class="btn btn-small btn-primary">Voir le profil</a>
                        </div>
                    </div>
                    
                    <!-- Professor 3 -->
                    <div class="professor-card">
                        <div class="professor-image">
                            <img src="{{ asset('img/professors/ahmed-benali.jpg') }}" alt="Prof. Ahmed Benali">
                        </div>
                        <div class="professor-content">
                            <h3 class="professor-name">Prof. Ahmed Benali</h3>
                            <p class="professor-title">Science des Données</p>
                            <p class="professor-description">
                                Chercheur renommé en analyse de données massives et visualisation de l'information.
                            </p>
                            <a href="#" class="btn btn-small btn-primary">Voir le profil</a>
                        </div>
                    </div>
                </div>
                
                <div class="view-all-professors">
                    <a href="#" class="btn btn-primary">Voir tous les professeurs</a>
                </div>
            </div>
        </section>

        <!-- Research Areas Section -->
        <section class="research-areas section">
            <div class="container">
                <h2 class="section-title">Domaines de Recherche</h2>
                <p class="section-description">
                    Nos équipes de recherche travaillent sur des projets innovants dans plusieurs domaines clés.
                </p>
                
                <div class="research-grid">
                    <!-- Research Area 1 -->
                    <div class="research-item">
                        <div class="research-image">
                            <img src="{{ asset('img/research/ai.jpg') }}" alt="Intelligence Artificielle">
                        </div>
                        <div class="research-content">
                            <h3 class="research-title">Intelligence Artificielle</h3>
                            <p class="research-description">
                                Développement de méthodes avancées en apprentissage profond, IA explicable et systèmes multi-agents.
                            </p>
                            <a href="#" class="research-link">En savoir plus →</a>
                        </div>
                    </div>
                    
                    <!-- Research Area 2 -->
                    <div class="research-item">
                        <div class="research-image">
                            <img src="{{ asset('img/research/cybersecurity.jpg') }}" alt="Cybersécurité">
                        </div>
                        <div class="research-content">
                            <h3 class="research-title">Cybersécurité</h3>
                            <p class="research-description">
                                Protection des systèmes d'information, cryptographie et détection d'intrusions.
                            </p>
                            <a href="#" class="research-link">En savoir plus →</a>
                        </div>
                    </div>
                    
                    <!-- Research Area 3 -->
                    <div class="research-item">
                        <div class="research-image">
                            <img src="{{ asset('img/research/data-science.jpg') }}" alt="Science des Données">
                        </div>
                        <div class="research-content">
                            <h3 class="research-title">Science des Données</h3>
                            <p class="research-description">
                                Analyse de données massives, visualisation et applications dans divers secteurs.
                            </p>
                            <a href="#" class="research-link">En savoir plus →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Latest News Section -->
        <section class="latest-news section">
            <div class="container">
                <h2 class="section-title">Actualités</h2>
                
                <div class="news-grid">
                    <!-- News Item 1 -->
                    <div class="news-item">
                        <div class="news-date">15 Mars 2025</div>
                        <h3 class="news-title">Conférence Internationale sur l'IA à l'ENSIASD</h3>
                        <p class="news-excerpt">
                            L'ENSIASD accueillera la conférence internationale sur l'intelligence artificielle du 10 au 12 avril 2025.
                        </p>
                        <a href="#" class="news-link">Lire la suite →</a>
                    </div>
                    
                    <!-- News Item 2 -->
                    <div class="news-item">
                        <div class="news-date">28 Février 2025</div>
                        <h3 class="news-title">Nouveau partenariat avec Microsoft Research</h3>
                        <p class="news-excerpt">
                            L'ENSIASD et Microsoft Research annoncent un partenariat pour développer des solutions d'IA éthiques.
                        </p>
                        <a href="#" class="news-link">Lire la suite →</a>
                    </div>
                    
                    <!-- News Item 3 -->
                    <div class="news-item">
                        <div class="news-date">10 Février 2025</div>
                        <h3 class="news-title">Publication remarquable de nos chercheurs</h3>
                        <p class="news-excerpt">
                            L'équipe du Prof. Doe publie une recherche révolutionnaire sur l'IA explicable dans Nature.
                        </p>
                        <a href="#" class="news-link">Lire la suite →</a>
                    </div>
                </div>
                
                <div class="view-all-news">
                    <a href="#" class="btn btn-primary">Toutes les actualités</a>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <div class="container">
                <h2 class="section-title">Contact</h2>
                <div class="contact-content">
                    <div class="contact-form">
                        <h3 class="contact-subtitle">Envoyez-nous un message</h3>
                        <form id="contact-form" action="#" method="POST">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Sujet</label>
                                <input type="text" id="subject" name="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer le message</button>
                        </form>
                    </div>
                    
                    <div class="contact-info">
                        <h3 class="contact-subtitle">Informations de contact</h3>
                        <div class="info-group">
                            <h4 class="info-title">Adresse</h4>
                            <p class="info-text">
                                ENSIASD<br>
                                123 Avenue de l'Innovation<br>
                                75013 Paris, France
                            </p>
                        </div>
                        <div class="info-group">
                            <h4 class="info-title">Email</h4>
                            <p class="info-text">contact@ensiasd.fr</p>
                        </div>
                        <div class="info-group">
                            <h4 class="info-title">Téléphone</h4>
                            <p class="info-text">+33 1 23 45 67 89</p>
                        </div>
                        <div class="info-group">
                            <h4 class="info-title">Heures d'ouverture</h4>
                            <p class="info-text">
                                Lundi - Vendredi: 8h30 - 18h00<br>
                                Samedi: 9h00 - 12h00<br>
                                Fermé le dimanche
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                    <div class="footer-logo">
                        <img src="{{ asset('img/logo.png') }}" alt="ENSIASD Logo" class="logo-img">
                        <h3 class="footer-title">ENSIASD</h3>
                    </div>
                    <p class="footer-description">
                        École Nationale Supérieure d'Informatique et Sciences des Données, formant les experts de demain en informatique, IA et analyse de données.
                    </p>
                </div>
                
                <div class="footer-links">
                    <div class="footer-links-group">
                        <h4 class="footer-links-title">Navigation</h4>
                        <ul class="footer-links-list">
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">À propos</a></li>
                            <li><a href="#">Professeurs</a></li>
                            <li><a href="#">Départements</a></li>
                            <li><a href="#">Recherche</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-links-group">
                        <h4 class="footer-links-title">Ressources</h4>
                        <ul class="footer-links-list">
                            <li><a href="#">Bibliothèque</a></li>
                            <li><a href="#">Laboratoires</a></li>
                            <li><a href="#">Projets étudiants</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-links-group">
                        <h4 class="footer-links-title">Suivez-nous</h4>
                        <ul class="footer-links-list">
                            <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i> YouTube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p class="copyright">
                    © <span id="current-year"></span> ENSIASD. Tous droits réservés.
                </p>
                <p class="university">
                    École Nationale Supérieure d'Informatique et Sciences des Données
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('js/ensiasd.js') }}"></script>
</body>
</html>