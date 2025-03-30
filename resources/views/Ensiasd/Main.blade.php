<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSIASD - École Nationale Supérieure d'Intelligence Artificielle et Science des Données</title>
    <meta name="description" content="École Nationale Supérieure d'Intelligence Artificielle et Science des Données - Formation d'excellence en IA et Data Science">
    
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- CSS principal - Assurez-vous que le chemin est correct -->
    <link rel="stylesheet" href="{{ asset('css/ensiasd.css') }}">

</head>
<body>
    <!-- Header (Layout Component) -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="public/img/logo-ensiasd.jpg" alt="Logo ENSIASD" class="logo-img">
                    <h1 class="logo-text">ENSIASD</h1>
                </div>
                
                <!-- Navigation Desktop -->
                <nav class="nav-desktop">
                    <ul class="nav-links">
                        <li><a href="#about" class="nav-link">À propos</a></li>
                        <li><a href="#formations" class="nav-link">Formations</a></li>
                        <li><a href="#contact" class="nav-link">Contact</a></li>
                    </ul>
                    <div class="nav-actions">
                        
                        <button id="signin-button" class="btn btn-outline-primary">
                            <i class="fas fa-sign-in-alt"></i> Se connecter
                        </button>
                        <button id="signup-button" class="btn btn-primary">
                            <i class="fas fa-user-plus"></i> S'inscrire
                        </button>
                        <button id="theme-toggle" class="theme-toggle" aria-label="Changer de thème">
                            <i class="fas fa-sun"></i>
                        </button>
                    </div>
                </nav>
                
                <!-- Navigation Mobile -->
                <div class="nav-mobile">
                    <button id="mobile-menu-button" class="mobile-menu-btn" aria-label="Ouvrir le menu">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            
            <!-- Menu Mobile -->
            <nav id="mobile-menu" class="mobile-menu hidden">
                <ul class="mobile-nav-links">
                    <li><a href="#about" class="mobile-nav-link"><i class="fas fa-info-circle"></i> À propos</a></li>
                    <li><a href="#formations" class="mobile-nav-link"><i class="fas fa-graduation-cap"></i> Formations</a></li>
                    <li><a href="#contact" class="mobile-nav-link"><i class="fas fa-envelope"></i> Contact</a></li>
                    <li><a href="#" id="theme-toggle-mobile" class="mobile-nav-link"><i class="fas fa-sun"></i> Changer de thème</a></li>
                    <li><a href="#" id="signin-mobile" class="mobile-nav-link"><i class="fas fa-sign-in-alt"></i> Se connecter</a></li>
                    <li><a href="#" id="signup-mobile" class="mobile-nav-link highlight"><i class="fas fa-user-plus"></i> S'inscrire</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1 class="hero-title">ENSIASD</h1>
                        <h2 class="hero-subtitle">École Nationale Supérieure d'Intelligence Artificielle et Science des Données</h2>
                        <p class="hero-description">
                            Former les experts de demain dans les domaines de l'Intelligence Artificielle et de la Science des Données
                        </p>
                        <div class="hero-buttons">
                            <a href="#formations" class="btn btn-outline"><i class="fas fa-graduation-cap"></i> Découvrir nos formations</a>
                            <a href="#contact" class="btn btn-outline"><i class="fas fa-envelope"></i> Nous contacter</a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container">
                <h2 class="section-title">À propos de l'ENSIASD</h2>
                <div class="about-content">
                    <div class="about-text">
                        <p>
                        L'École Nationale Supérieure de l'Intelligence Artificielle et Sciences des Données (ENSIASD) est un établissement d'enseignement supérieur spécialisé dans la formation des ingénieurs en intelligence artificielle, data science et ingénierie logicielle. Située à Taroudant, l'école vise à préparer une nouvelle génération d'ingénieurs capables de relever les défis technologiques et numériques de demain.                        </p>
                        <p>
                        Grâce à un programme axé sur l'innovation, la recherche et les nouvelles technologies, l'ENSIASD offre une formation de haut niveau combinant théorie et pratique. Les étudiants développent des compétences en apprentissage automatique, big data, cybersécurité, développement logiciel et systèmes intelligents, tout en étant encouragés à entreprendre et à innover.                        </p>
                        <div class="about-stats">
                            <div class="stat-item">
                                <span class="stat-number">300+</span>
                                <span class="stat-label">Étudiants</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">25</span>
                                <span class="stat-label">Professeurs</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">95%</span>
                                <span class="stat-label">Taux d'insertion</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">3</span>
                                <span class="stat-label">Partenaires</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Formations Section -->
        <section id="formations" class="formations section">
            <div class="container">
                <h2 class="section-title">Nos Formations</h2>
                <p class="section-description">
                    Découvrez nos programmes d'études conçus pour vous préparer aux métiers d'avenir dans l'IA et la Data Science.
                </p>
                <div class="formations-grid">
                    <!-- Formation 1 -->
                    <div class="formation-item">
                        <div class="formation-image">
                            <img src="public/img/formation-ia.jpg" alt="Ingénieur en IA">
                            <div class="formation-level">Bac+5</div>
                        </div>
                        <div class="formation-content">
                            <h3 class="formation-title">Diplôme d'Ingénieur en Intelligence Artificielle</h3>
                            <p class="formation-description">
                                Formation d'excellence en 5 ans pour devenir ingénieur spécialisé en conception et déploiement de systèmes d'IA.
                            </p>
                            <a href="#" class="btn btn-small btn-primary"><i class="fas fa-info-circle"></i> En savoir plus</a>
                        </div>
                    </div>
                    
                    <!-- Formation 2 -->
                    <div class="formation-item">
                        <div class="formation-image">
                            <img src="public/img/formation-data.jpg" alt="Master Data Science">
                            <div class="formation-level">Bac+5</div>
                        </div>
                        <div class="formation-content">
                            <h3 class="formation-title">Master Science des Données</h3>
                            <p class="formation-description">
                                Master spécialisé en analyse et valorisation des données massives, avec parcours recherche ou professionnel.
                            </p>
                            <a href="#" class="btn btn-small btn-primary"><i class="fas fa-info-circle"></i> En savoir plus</a>
                        </div>
                    </div>
                    
                    <!-- Formation 3 -->
                    <div class="formation-item">
                        <div class="formation-image">
                            <img src="public/img/formation-doctorat.jpg" alt="Doctorat">
                            <div class="formation-level">Bac+8</div>
                        </div>
                        <div class="formation-content">
                            <h3 class="formation-title">Doctorat en IA et Science des Données</h3>
                            <p class="formation-description">
                                Programme doctoral pour former les futurs chercheurs et experts de haut niveau en IA et Data Science.
                            </p>
                            <a href="#" class="btn btn-small btn-primary"><i class="fas fa-info-circle"></i> En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <div class="container">
                <h2 class="section-title">Contact</h2>
                <div class="contact-content">
                    <div class="contact-form">
                        <h3 class="contact-subtitle">Nous contacter</h3>
                        <form id="contact-form">
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
                            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Envoyer le message</button>
                        </form>
                    </div>
                    
                    <div class="contact-info">
                        <h3 class="contact-subtitle">Informations de contact</h3>
                        <div class="info-group">
                            <h4 class="info-title"><i class="fas fa-map-marker-alt"></i> Adresse</h4>
                            <p class="info-text">
                            ENSIASD Taroudant – Lastah - BP: 264
                            </p>
                        </div>
                        <div class="info-group">
                            <h4 class="info-title"><i class="fas fa-envelope"></i> Email</h4>
                            <p class="info-text">contact@uiz.ac.ma</p>
                        </div>
                        <div class="info-group">
                            <h4 class="info-title"><i class="fas fa-phone"></i> Téléphone</h4>
                            <p class="info-text">+212525971682                            </p>
                        </div>
                        <div class="info-group">
                            <h4 class="info-title"><i class="fas fa-clock"></i> Horaires d'ouverture</h4>
                            <p class="info-text">
                                Lundi - Vendredi: 8h30 - 18h15<br>
                                Samedi: 9h00 - 12h00<br>
                                Fermé le dimanche
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer (Layout Component) -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                    <div class="footer-logo">
                        <img src="public/img/logo-ensiasd.jpg" alt="Logo ENSIASD" class="logo-img">
                        <h3 class="footer-title">ENSIASD</h3>
                    </div>
                    <p class="footer-description">
                        École Nationale Supérieure d'Intelligence Artificielle et Science des Données - Former les experts de demain dans les domaines de l'IA et de la Data Science.
                    </p>
                </div>
                
                <div class="footer-links">
                    <div class="footer-links-group">
                        <h4 class="footer-links-title">Navigation</h4>
                        <ul class="footer-links-list">
                            <li><a href="#about"><i class="fas fa-info-circle"></i> À propos</a></li>
                            <li><a href="#formations"><i class="fas fa-graduation-cap"></i> Formations</a></li>
                            <li><a href="#contact"><i class="fas fa-envelope"></i> Contact</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-links-group">
                        <h4 class="footer-links-title">Ressources</h4>
                        <ul class="footer-links-list">
                            <li><a href="#"><i class="fas fa-book"></i> Bibliothèque</a></li>
                            <li><a href="#"><i class="fas fa-flask"></i> Laboratoires</a></li>
                            <li><a href="#"><i class="fas fa-project-diagram"></i> Projets étudiants</a></li>
                            <li><a href="#"><i class="fas fa-question-circle"></i> FAQ</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-links-group">
                        <h4 class="footer-links-title">Suivez-nous</h4>
                        <ul class="footer-links-list">
                            <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p class="copyright">
                    © <span id="current-year"></span> ENSIASD. Tous droits réservés.
                </p>
                
            </div>
        </div>
    </footer>

    <!-- Modals -->
    <!-- Sign In Modal -->
    <div id="signin-modal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Connexion</h2>
            <form id="signin-form">
                <div class="form-group">
                    <label for="signin-email">Email</label>
                    <input type="email" id="signin-email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="signin-password">Mot de passe</label>
                    <input type="password" id="signin-password" name="password" required>
                    <a href="#" class="forgot-password">Mot de passe oublié?</a>
                </div>
                <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> Se connecter</button>
            </form>
            <div class="modal-footer">
                <p>Pas encore de compte? <a href="#" id="switch-to-signup">S'inscrire</a></p>
            </div>
        </div>
    </div>

    <!-- Sign Up Modal -->
    <div id="signup-modal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Inscription</h2>
            <form id="signup-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="signup-firstname">Prénom</label>
                        <input type="text" id="signup-firstname" name="firstname" required>
                    </div>
                    <div class="form-group">
                        <label for="signup-lastname">Nom</label>
                        <input type="text" id="signup-lastname" name="lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="signup-email">Email</label>
                    <input type="email" id="signup-email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="signup-password">Mot de passe</label>
                    <input type="password" id="signup-password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="signup-confirm-password">Confirmer le mot de passe</label>
                    <input type="password" id="signup-confirm-password" name="confirm-password" required>
                </div>
                <div class="form-group checkbox">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">J'accepte les <a href="#">conditions d'utilisation</a> et la <a href="#">politique de confidentialité</a></label>
                </div>
                <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-user-plus"></i> S'inscrire</button>
            </form>
            <div class="modal-footer">
                <p>Déjà inscrit? <a href="#" id="switch-to-signin">Se connecter</a></p>
            </div>
        </div>
    </div>

    <!-- Toast Notifications -->
    <div id="toast-container" class="toast-container"></div>

    <!-- JavaScript -->
    <script src="{{ asset('js/ensiasd.js') }}"></script>
</body>
</html>