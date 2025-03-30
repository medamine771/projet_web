<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Inscription - Page d'inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ReCAPTCHA script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
      :root {
        --primary-color: #4361ee;
        --primary-hover: #3a56d4;
        --secondary-color: #f8f9fa;
        --text-color: #333;
        --text-muted: #6c757d;
        --border-color: #dee2e6;
        --card-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        --transition-speed: 0.3s;
      }
      
      body {
        font-family: 'Poppins', sans-serif;
        background-color: var(--secondary-color);
        color: var(--text-color);
        transition: background-color var(--transition-speed), color var(--transition-speed);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        padding: 0;
        margin: 0;
      }
      
      .page-container {
        flex: 1;
        display: flex;
        flex-direction: column;
      }
      
      .header {
        padding: 1rem 0;
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        position: relative;
        z-index: 10;
      }
      
      .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      
      .logo {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--primary-color);
        text-decoration: none;
      }
      
      .logo:hover {
        color: var(--primary-hover);
      }
      
      .theme-toggle {
        background: none;
        border: none;
        font-size: 1.2rem;
        cursor: pointer;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color var(--transition-speed);
      }
      
      .theme-toggle:hover {
        background-color: rgba(0, 0, 0, 0.05);
      }
      
      .main-content {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem 1rem;
      }
      
      .card {
        border: none;
        border-radius: 15px;
        box-shadow: var(--card-shadow);
        overflow: hidden;
        transition: box-shadow var(--transition-speed), background-color var(--transition-speed);
        width: 100%;
        max-width: 500px;
      }
      
      .card:hover {
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
      }
      
      .card-header {
        background-color: #fff;
        border-bottom: 1px solid var(--border-color);
        padding: 1.5rem;
        text-align: center;
      }
      
      .card-title {
        font-size: 1.75rem;
        font-weight: 600;
        color: var(--primary-color);
        margin: 0;
      }
      
      .card-subtitle {
        font-size: 1rem;
        color: var(--text-muted);
        margin-top: 0.5rem;
      }
      
      .card-body {
        padding: 2rem;
      }
      
      .form-label {
        font-weight: 500;
        margin-bottom: 0.5rem;
      }
      
      .form-control, .form-select {
        padding: 0.75rem 1rem;
        border-radius: 10px;
        border: 1px solid var(--border-color);
        transition: border-color var(--transition-speed), box-shadow var(--transition-speed);
      }
      
      .form-control:focus, .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.25);
      }
      
      .btn {
        padding: 0.75rem 1.5rem;
        border-radius: 10px;
        font-weight: 500;
        transition: all var(--transition-speed);
      }
      
      .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
      }
      
      .btn-primary:hover {
        background-color: var(--primary-hover);
        border-color: var(--primary-hover);
        transform: translateY(-2px);
      }
      
      .btn-outline-primary {
        color: var(--primary-color);
        border-color: var(--primary-color);
      }
      
      .btn-outline-primary:hover {
        background-color: var(--primary-color);
        color: white;
        transform: translateY(-2px);
      }
      
      .login-link {
        text-align: center;
        margin-top: 1.5rem;
        font-size: 0.95rem;
      }
      
      .login-link a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 500;
      }
      
      .login-link a:hover {
        text-decoration: underline;
      }
      
      .alert {
        border-radius: 10px;
        padding: 1rem;
      }
      
      .g-recaptcha {
        display: flex;
        justify-content: center;
        margin: 0.5rem 0;
      }
      
      .form-icon {
        position: relative;
      }
      
      .form-icon i {
        position: absolute;
        top: 50%;
        left: 1rem;
        transform: translateY(-50%);
        color: var(--text-muted);
      }
      
      .form-icon .form-control {
        padding-left: 3rem;
      }
      
      .form-icon .form-control:focus + i {
        color: var(--primary-color);
      }
      
      .footer {
        text-align: center;
        padding: 1.5rem;
        background-color: #fff;
        color: var(--text-muted);
        font-size: 0.9rem;
        border-top: 1px solid var(--border-color);
      }
      
      /* Animation pour le changement de mode */
      .theme-transition {
        animation: fadeIn 0.5s;
      }
      
      @keyframes fadeIn {
        from { opacity: 0.7; }
        to { opacity: 1; }
      }
      
      /* Mode sombre */
      .dark-mode {
        --secondary-color: #121212;
        --text-color: #e0e0e0;
        --text-muted: #adb5bd;
        --border-color: #444;
        background-color: var(--secondary-color);
      }
      
      .dark-mode .header {
        background-color: #1e1e1e;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
      }
      
      .dark-mode .card {
        background-color: #1e1e1e;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
      }
      
      .dark-mode .card-header {
        background-color: #1e1e1e;
        border-bottom: 1px solid #444;
      }
      
      .dark-mode .form-control, .dark-mode .form-select {
        background-color: #2d2d2d;
        color: #e0e0e0;
        border: 1px solid #444;
      }
      
      .dark-mode .form-control::placeholder {
        color: #adb5bd;
      }
      
      .dark-mode .theme-toggle {
        color: #e0e0e0;
      }
      
      .dark-mode .theme-toggle:hover {
        background-color: rgba(255, 255, 255, 0.1);
      }
      
      .dark-mode .footer {
        background-color: #1e1e1e;
        border-top: 1px solid #444;
      }
      
      /* Responsive */
      @media (max-width: 576px) {
        .card {
          margin: 0 10px;
        }
        
        .card-title {
          font-size: 1.5rem;
        }
        
        .card-body {
          padding: 1.5rem;
        }
      }
    </style>
  </head>
  <body>
    <div class="page-container">
      <header class="header">
        <div class="container">
          <div class="header-content">
            <a href="#" class="logo">
              <i class="fas fa-graduation-cap me-2"></i>EduPortal
            </a>
            <button class="theme-toggle" onclick="toggleDarkMode()" aria-label="Toggle dark mode">
              <i class="fas fa-moon" id="theme-icon"></i>
            </button>
          </div>
        </div>
      </header>

      <div class="main-content">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h1 class="card-title">Inscription</h1>
                  <p class="card-subtitle">Créez votre compte pour accéder à la plateforme</p>
                </div>
                <div class="card-body">
                  @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                      {{ Session::get('success') }}
                    </div>
                  @endif
                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif
                  <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <!-- Nom -->
                    <div class="mb-3">
                      <label for="name" class="form-label">Nom complet</label>
                      <div class="form-icon">
                        <input type="text" name="name" class="form-control" id="name" placeholder="John Doe" required>
                        <i class="fas fa-user"></i>
                      </div>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                      <label for="email" class="form-label">Adresse email</label>
                      <div class="form-icon">
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                        <i class="fas fa-envelope"></i>
                      </div>
                    </div>

                    <!-- Mot de passe -->
                    <div class="mb-3">
                      <label for="password" class="form-label">Mot de passe</label>
                      <div class="form-icon">
                        <input type="password" name="password" class="form-control" id="password" required>
                        <i class="fas fa-lock"></i>
                      </div>
                      <div class="form-text text-muted mt-1">
                        <small>Le mot de passe doit contenir au moins 8 caractères</small>
                      </div>
                    </div>

                    <!-- Type d'utilisateur -->
                    <div class="mb-3">
                      <label for="user_type" class="form-label">Type d'utilisateur</label>
                      <div class="form-icon">
                        <select name="user_type" id="user_type" class="form-select" required onchange="toggleFields()">
                          <option value="">Sélectionner...</option>
                          <option value="etudiant">Étudiant</option>
                          <option value="professeur">Professeur</option>
                        </select>
                        <i class="fas fa-user-graduate"></i>
                      </div>
                    </div>

                    <!-- Champ CNE (Étudiant) -->
                    <div class="mb-3 d-none" id="cne_field">
                      <label for="cne" class="form-label">CNE</label>
                      <div class="form-icon">
                        <input type="text" name="cne" class="form-control" id="cne" placeholder="CNE de l'étudiant">
                        <i class="fas fa-id-card"></i>
                      </div>
                    </div>

                    <!-- Champ Matricule (Professeur) -->
                    <div class="mb-3 d-none" id="matricule_field">
                      <label for="matricule" class="form-label">Matricule</label>
                      <div class="form-icon">
                        <input type="text" name="matricule" class="form-control" id="matricule" placeholder="Matricule du professeur">
                        <i class="fas fa-id-badge"></i>
                      </div>
                    </div>

                    <!-- reCAPTCHA -->
                    <div class="mb-4">
                      <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.sitekey') }}"></div>
                    </div>

                    <!-- Bouton d'inscription -->
                    <div class="mb-3">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                          <i class="fas fa-user-plus me-2"></i>S'inscrire
                        </button>
                      </div>
                    </div>
                  </form>
                  
                  <div class="login-link">
                    <p>Vous avez déjà un compte? <a href="{{ route('login') }}">Se connecter</a></p>
                  </div>
                  
                  <!-- Bouton pour aller à la page de connexion -->
                  <div class="d-grid mt-3">
                    <a href="{{ route('login') }}" class="btn btn-outline-primary">
                      <i class="fas fa-sign-in-alt me-2"></i>Aller à la page de connexion
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <footer class="footer">
        <div class="container">
          <p class="mb-0">&copy; <span id="current-year"></span> EduPortal. Tous droits réservés.</p>
        </div>
      </footer>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Définir l'année courante dans le footer
        document.getElementById('current-year').textContent = new Date().getFullYear();
        
        // Vérifier le mode stocké dans localStorage
        if (localStorage.getItem("darkMode") === "enabled") {
          document.body.classList.add("dark-mode");
          updateThemeIcon(true);
        }
      });

      function toggleFields() {
        let userType = document.getElementById("user_type").value;
        let cneField = document.getElementById("cne_field");
        let matriculeField = document.getElementById("matricule_field");

        // Cacher les deux champs au début
        cneField.classList.add("d-none");
        matriculeField.classList.add("d-none");

        // Afficher le champ correspondant au type sélectionné
        if (userType === "etudiant") {
          cneField.classList.remove("d-none");
        } else if (userType === "professeur") {
          matriculeField.classList.remove("d-none");
        }
      }

      function toggleDarkMode() {
        let body = document.body;
        
        // Ajouter une classe pour l'animation
        body.classList.add("theme-transition");
        
        // Supprimer la classe d'animation après la fin de l'animation
        setTimeout(() => {
          body.classList.remove("theme-transition");
        }, 500);
        
        if (body.classList.contains("dark-mode")) {
          body.classList.remove("dark-mode");
          localStorage.setItem("darkMode", "disabled");
          updateThemeIcon(false);
        } else {
          body.classList.add("dark-mode");
          localStorage.setItem("darkMode", "enabled");
          updateThemeIcon(true);
        }
      }
      
      function updateThemeIcon(isDarkMode) {
        const themeIcon = document.getElementById('theme-icon');
        if (isDarkMode) {
          themeIcon.classList.remove('fa-moon');
          themeIcon.classList.add('fa-sun');
        } else {
          themeIcon.classList.remove('fa-sun');
          themeIcon.classList.add('fa-moon');
        }
      }
    </script>
  </body>
</html>