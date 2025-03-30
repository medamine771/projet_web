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
    
    <!-- CSS principal -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Toast Container -->
    <div id="toast-container" class="toast-container"></div>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="img/logo-ensiasd.jpg" alt="Logo ENSIASD" class="logo-img">
                    <h1 class="logo-text">ENSIASD</h1>
                </div>
                
                <!-- Navigation Desktop -->
                <nav class="nav-desktop">
                    <ul class="nav-links">
                        <li><a href="#about" class="nav-link">À propos</a></li>
                        <li><a href="#formations" class="nav-link">Formations</a></li>
                        <li><a href="#recherche" class="nav-link">Recherche</a></li>
                        <li><a href="professeurs.html" class="nav-link">Professeurs</a></li>
                        <li><a href="#international" class="nav-link">International</a></li>
                        <li><a href="#contact" class="nav-link">Contact</a></li>
                    </ul>
                    <div class="nav-actions">
                        <!-- Bouton de connexion (visible quand non connecté) -->
                        <button id="login-button" class="login-btn">
                            <i class="fas fa-user"></i> Espace étudiant
                        </button>
                        
                        <!-- Menu utilisateur (visible quand connecté) -->
                        <div id="user-menu" class="user-menu hidden">
                            <button id="user-menu-button" class="user-menu-btn">
                                <i class="fas fa-user-circle"></i> Mon compte
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div id="user-dropdown" class="user-dropdown">
                                <a href="#" class="user-dropdown-item">
                                    <i class="fas fa-user"></i> Profil
                                </a>
                                <a href="#" class="user-dropdown-item">
                                    <i class="fas fa-graduation-cap"></i> Mes cours
                                </a>
                                <div class="user-dropdown-divider"></div>
                                <a href="#" id="logout-button" class="user-dropdown-item">
                                    <i class="fas fa-sign-out-alt"></i> Déconnexion
                                </a>
                            </div>
                        </div>
                        
                        <button id="dark-mode-toggle" class="dark-mode-btn" aria-label="Basculer en mode sombre">
                            <i id="moon-icon" class="fas fa-moon"></i>
                            <i id="sun-icon" class="fas fa-sun hidden"></i>
                        </button>
                    </div>
                </nav>
                
                <!-- Navigation Mobile -->
                <div class="nav-mobile">
                    <!-- Bouton de connexion mobile (visible quand non connecté) -->
                    <button id="login-button-mobile" class="login-btn">
                        <i class="fas fa-user"></i>
                    </button>
                    
                    <!-- Bouton utilisateur mobile (visible quand connecté) -->
                    <button id="user-menu-button-mobile" class="user-menu-btn hidden">
                        <i class="fas fa-user-circle"></i>
                    </button>
                    
                    <button id="dark-mode-toggle-mobile" class="dark-mode-btn" aria-label="Basculer en mode sombre">
                        <i class="fas fa-moon"></i>
                    </button>
                    <button id="mobile-menu-button" class="mobile-menu-btn" aria-label="Ouvrir le menu">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            
            <!-- Menu Mobile -->
            <nav id="mobile-menu" class="mobile-menu hidden">
                <ul class="mobile-nav-links">
                    <li><a href="#about" class="mobile-nav-link">À propos</a></li>
                    <li><a href="#formations" class="mobile-nav-link">Formations</a></li>
                    <li><a href="#recherche" class="mobile-nav-link">Recherche</a></li>
                    <li><a href="professeurs.html" class="mobile-nav-link">Professeurs</a></li>
                    <li><a href="#international" class="mobile-nav-link">International</a></li>
                    <li><a href="#contact" class="mobile-nav-link">Contact</a></li>
                    <!-- Option de déconnexion (visible quand connecté) -->
                    <li id="logout-mobile" class="hidden">
                        <a href="#" class="mobile-nav-link logout-link">
                            <i class="fas fa-sign-out-alt"></i> Déconnexion
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Login Modal -->
    <div id="login-modal" class="modal-overlay">
        <div class="modal">
            <button id="modal-close" class="modal-close">
                <i class="fas fa-times"></i>
            </button>
            <h2 class="modal-title">Connexion Espace Étudiant</h2>
            <form id="login-form" class="modal-form">
                <div class="form-group">
                    <label for="email-login">Email académique</label>
                    <input type="email" id="email-login" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                    <a href="#" class="forgot-password">Mot de passe oublié?</a>
                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
            <div class="modal-footer">
                <p>Nouveau à l'ENSIASD? <a href="#">Activer votre compte</a></p>
            </div>
        </div>
    </div>

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
                            <a href="#formations" class="btn btn-primary">Découvrir nos formations</a>
                            <a href="#contact" class="btn btn-outline">Nous contacter</a>
                        </div>
                    </div>
                    <div class="hero-image">
                        <img src="img/campus-ensiasd.jpg" alt="Campus ENSIASD" class="campus-img">
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container">
                <h2 class="section-title">À propos de l'ENSIASD</h2>
                <div class="about-content">
                    <div class="about-image">
                        <img src="img/about-ensiasd.jpg" alt="Campus ENSIASD" class="about-img">
                    </div>
                    <div class="about-text">
                        <p>
                            Fondée en 2015, l'École Nationale Supérieure d'Intelligence Artificielle et Science des Données (ENSIASD) est un établissement d'enseignement supérieur dédié à la formation d'excellence dans les domaines de l'IA et de la Data Science.
                        </p>
                        <p>
                            Notre mission est de former des ingénieurs et chercheurs de haut niveau, capables de relever les défis technologiques et éthiques posés par l'intelligence artificielle et l'analyse des données massives. Nous proposons des programmes de formation innovants, en étroite collaboration avec les entreprises et les laboratoires de recherche internationaux.
                        </p>
                        <div class="about-stats">
                            <div class="stat-item">
                                <span class="stat-number">1200+</span>
                                <span class="stat-label">Étudiants</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">85</span>
                                <span class="stat-label">Professeurs</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">95%</span>
                                <span class="stat-label">Taux d'insertion</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">120+</span>
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
                            <img src="img/formation-ia.jpg" alt="Ingénieur en IA">
                            <div class="formation-level">Bac+5</div>
                        </div>
                        <div class="formation-content">
                            <h3 class="formation-title">Diplôme d'Ingénieur en Intelligence Artificielle</h3>
                            <p class="formation-description">
                                Formation d'excellence en 5 ans pour devenir ingénieur spécialisé en conception et déploiement de systèmes d'IA.
                            </p>
                            <a href="#" class="btn btn-small btn-primary">En savoir plus</a>
                        </div>
                    </div>
                    
                    <!-- Formation 2 -->
                    <div class="formation-item">
                        <div class="formation-image">
                            <img src="img/formation-data.jpg" alt="Master Data Science">
                            <div class="formation-level">Bac+5</div>
                        </div>
                        <div class="formation-content">
                            <h3 class="formation-title">Master Science des Données</h3>
                            <p class="formation-description">
                                Master spécialisé en analyse et valorisation des données massives, avec parcours recherche ou professionnel.
                            </p>
                            <a href="#" class="btn btn-small btn-primary">En savoir plus</a>
                        </div>
                    </div>
                    
                    <!-- Formation 3 -->
                    <div class="formation-item">
                        <div class="formation-image">
                            <img src="img/formation-doctorat.jpg" alt="Doctorat">
                            <div class="formation-level">Bac+8</div>
                        </div>
                        <div class="formation-content">
                            <h3 class="formation-title">Doctorat en IA et Science des Données</h3>
                            <p class="formation-description">
                                Programme doctoral pour former les futurs chercheurs et experts de haut niveau en IA et Data Science.
                            </p>
                            <a href="#" class="btn btn-small btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recherche Section -->
        <section id="recherche" class="research section">
            <div class="container">
                <h2 class="section-title">Recherche</h2>
                <p class="section-description">
                    Nos laboratoires de recherche travaillent sur des projets innovants dans différents domaines de l'IA et de la Science des Données.
                </p>
                <div class="research-grid">
                    <!-- Research Item 1 -->
                    <div class="research-item">
                        <div class="research-image">
                            <img src="img/research-xai.jpg" alt="IA Explicable">
                        </div>
                        <div class="research-content">
                            <h3 class="research-title">IA Explicable et Éthique</h3>
                            <p class="research-description">
                                Développement de méthodes pour rendre les systèmes d'IA plus transparents, interprétables et éthiques.
                            </p>
                            <a href="#" class="research-link">En savoir plus →</a>
                        </div>
                    </div>
                    
                    <!-- Research Item 2 -->
                    <div class="research-item">
                        <div class="research-image">
                            <img src="img/research-health.jpg" alt="IA pour la Santé">
                        </div>
                        <div class="research-content">
                            <h3 class="research-title">IA pour la Santé</h3>
                            <p class="research-description">
                                Applications de l'IA et de l'analyse de données pour le diagnostic médical, la découverte de médicaments et la médecine personnalisée.
                            </p>
                            <a href="#" class="research-link">En savoir plus →</a>
                        </div>
                    </div>
                    
                    <!-- Research Item 3 -->
                    <div class="research-item">
                        <div class="research-image">
                            <img src="img/research-nlp.jpg" alt="Traitement du Langage Naturel">
                        </div>
                        <div class="research-content">
                            <h3 class="research-title">Traitement du Langage Naturel</h3>
                            <p class="research-description">
                                Recherche avancée en NLP, modèles de langage, traduction automatique et analyse sémantique.
                            </p>
                            <a href="#" class="research-link">En savoir plus →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Professors Section -->
        <section id="professors" class="professors section">
            <div class="container">
                <h2 class="section-title">Notre Corps Professoral</h2>
                <p class="section-description">
                    Découvrez nos professeurs d'excellence, experts reconnus dans leurs domaines respectifs.
                </p>
                <div class="professors-preview">
                    <div class="professors-grid">
                        <!-- Professor 1 -->
                        <div class="professor-card">
                            <div class="professor-image">
                                <img src="img/prof-john-doe.jpg" alt="Prof. John Doe">
                            </div>
                            <div class="professor-content">
                                <h3 class="professor-name">Prof. John Doe</h3>
                                <p class="professor-title">Intelligence Artificielle</p>
                                <p class="professor-description">Spécialiste en apprentissage automatique et IA explicable.</p>
                                <a href="prof-john-doe.html" class="btn btn-small btn-primary">Voir le profil</a>
                            </div>
                        </div>
                        
                        <!-- Professor 2 -->
                        <div class="professor-card">
                            <div class="professor-image">
                                <img src="img/prof-jane-smith.jpg" alt="Prof. Jane Smith">
                            </div>
                            <div class="professor-content">
                                <h3 class="professor-name">Prof. Jane Smith</h3>
                                <p class="professor-title">Cybersécurité</p>
                                <p class="professor-description">Experte en sécurité des systèmes d'information et cryptographie.</p>
                                <a href="#" class="btn btn-small btn-primary">Voir le profil</a>
                            </div>
                        </div>
                        
                        <!-- Professor 3 -->
                        <div class="professor-card">
                            <div class="professor-image">
                                <img src="img/prof-ahmed-benali.jpg" alt="Prof. Ahmed Benali">
                            </div>
                            <div class="professor-content">
                                <h3 class="professor-name">Prof. Ahmed Benali</h3>
                                <p class="professor-title">Science des Données</p>
                                <p class="professor-description">Chercheur en analyse de données massives et visualisation.</p>
                                <a href="#" class="btn btn-small btn-primary">Voir le profil</a>
                            </div>
                        </div>
                    </div>
                    <div class="professors-more">
                        <a href="professeurs.html" class="btn btn-primary">Voir tous les professeurs</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- International Section -->
        <section id="international" class="international section">
            <div class="container">
                <h2 class="section-title">Relations Internationales</h2>
                <p class="section-description">
                    L'ENSIASD entretient des partenariats avec des universités et entreprises du monde entier.
                </p>
                <div class="international-content">
                    <div class="international-map">
                        <img src="img/world-map.jpg" alt="Carte des partenariats internationaux">
                    </div>
                    <div class="international-stats">
                        <div class="int-stat-item">
                            <span class="int-stat-number">45+</span>
                            <span class="int-stat-label">Universités partenaires</span>
                        </div>
                        <div class="int-stat-item">
                            <span class="int-stat-number">28</span>
                            <span class="int-stat-label">Pays représentés</span>
                        </div>
                        <div class="int-stat-item">
                            <span class="int-stat-number">200+</span>
                            <span class="int-stat-label">Étudiants internationaux</span>
                        </div>
                        <div class="int-stat-item">
                            <span class="int-stat-number">75+</span>
                            <span class="int-stat-label">Programmes d'échange</span>
                        </div>
                    </div>
                </div>
                <div class="partners-logos">
                    <div class="partner-logo">
                        <img src="img/partner-mit.jpg" alt="MIT">
                    </div>
                    <div class="partner-logo">
                        <img src="img/partner-stanford.jpg" alt="Stanford">
                    </div>
                    <div class="partner-logo">
                        <img src="img/partner-oxford.jpg" alt="Oxford">
                    </div>
                    <div class="partner-logo">
                        <img src="img/partner-tokyo.jpg" alt="University of Tokyo">
                    </div>
                    <div class="partner-logo">
                        <img src="img/partner-eth.jpg" alt="ETH Zurich">
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
                            <h4 class="info-title">Horaires d'ouverture</h4>
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
                        <img src="img/logo-ensiasd.jpg" alt="Logo ENSIASD" class="logo-img">
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
                            <li><a href="#about">À propos</a></li>
                            <li><a href="#formations">Formations</a></li>
                            <li><a href="#recherche">Recherche</a></li>
                            <li><a href="professeurs.html">Professeurs</a></li>
                            <li><a href="#international">International</a></li>
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
                            <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p class="copyright">
                    © <span id="current-year"></span> ENSIASD. Tous droits réservés.
                </p>
                <p class="legal-links">
                    <a href="#">Mentions légales</a> | 
                    <a href="#">Politique de confidentialité</a> | 
                    <a href="#">Accessibilité</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/main.js"></script>
</body>
</html>