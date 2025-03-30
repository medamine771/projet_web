<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4361ee;
            --primary-hover: #3a56d4;
            --card-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition-speed: 0.3s;
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: background-color var(--transition-speed), color var(--transition-speed);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            padding-top: 2rem;
        }
        
        .card {
            border-radius: 10px;
            border: none;
            box-shadow: var(--card-shadow);
            transition: background-color var(--transition-speed), box-shadow var(--transition-speed);
        }
        
        .card-header {
            background-color: transparent;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding: 1.5rem 1.5rem 0.5rem;
        }
        
        .card-title {
            font-weight: 700;
            font-size: 1.75rem;
            color: #333;
            margin-bottom: 0.5rem;
        }
        
        .card-subtitle {
            color: #6c757d;
            font-size: 0.95rem;
            margin-bottom: 0;
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .form-label {
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
        
        .form-control {
            border-radius: 8px;
            padding: 0.6rem 0.75rem;
            border: 1px solid #ced4da;
            transition: border-color var(--transition-speed), box-shadow var(--transition-speed);
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.25);
        }
        
        .input-group-text {
            background-color: transparent;
            border-left: none;
            cursor: pointer;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            border-radius: 8px;
            padding: 0.6rem 1.5rem;
            font-weight: 500;
            transition: background-color var(--transition-speed), transform var(--transition-speed);
        }
        
        .btn-primary:hover {
            background-color: var(--primary-hover);
            border-color: var(--primary-hover);
            transform: translateY(-1px);
        }
        
        .btn-primary:active {
            transform: translateY(0);
        }
        
        .btn-mode-toggle {
            border-radius: 50%;
            width: 42px;
            height: 42px;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color var(--transition-speed), color var(--transition-speed);
        }
        
        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .forgot-password {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: color var(--transition-speed);
        }
        
        .forgot-password:hover {
            color: var(--primary-hover);
            text-decoration: underline;
        }
        
        .alert {
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1.5rem;
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
            background-color: #121212;
            color: #e0e0e0;
        }
        
        .dark-mode .card {
            background-color: #1e1e1e;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }
        
        .dark-mode .card-header {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .dark-mode .card-title {
            color: #ffffff;
        }
        
        .dark-mode .card-subtitle {
            color: #adb5bd;
        }
        
        .dark-mode .form-control {
            background-color: #2d2d2d;
            color: #e0e0e0;
            border: 1px solid #444;
        }
        
        .dark-mode .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.25);
        }
        
        .dark-mode .form-control::placeholder {
            color: #adb5bd;
        }
        
        .dark-mode .input-group-text {
            background-color: #2d2d2d;
            color: #e0e0e0;
            border-color: #444;
        }
        
        .dark-mode .btn-secondary {
            background-color: #2d2d2d;
            border-color: #444;
        }
        
        .dark-mode .btn-secondary:hover {
            background-color: #3d3d3d;
        }
        
        .dark-mode .form-check-label {
            color: #e0e0e0;
        }
        
        .dark-mode .forgot-password {
            color: #90b3ff;
        }
        
        .dark-mode .forgot-password:hover {
            color: #afc7ff;
        }
        
        /* Responsive */
        @media (max-width: 576px) {
            .card {
                margin: 0 10px;
            }
            
            .card-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="text-end mb-4">
        <button class="btn btn-secondary btn-mode-toggle" onclick="toggleDarkMode()" aria-label="Toggle dark mode">
            <i class="fas fa-moon"></i>
        </button>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7 col-sm-10">
            <div class="card">
                <div class="card-header text-center">
                    <h1 class="card-title">Login</h1>
                    <p class="card-subtitle">Entrez vos identifiants pour vous connecter</p>
                </div>
                <div class="card-body">
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <div class="input-group">
                                <input type="password" name="password" class="form-control" id="password" required>
                                <span class="input-group-text" onclick="togglePassword()">
                                    <i id="passwordToggleIcon" class="fas fa-eye"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Se souvenir de moi -->
                        <div class="mb-4 form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Se souvenir de moi</label>
                        </div>

                        <!-- Bouton de connexion -->
                        <div class="mb-4">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Se connecter</button>
                            </div>
                        </div>
                    </form>

                    <!-- Lien "Mot de passe oublié" -->
                    <div class="text-center">
                        <a href="{{ route('password.request') }}" class="forgot-password">Mot de passe oublié ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function togglePassword() {
    let passwordInput = document.getElementById("password");
    let passwordToggleIcon = document.getElementById("passwordToggleIcon");
    
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggleIcon.classList.remove("fa-eye");
        passwordToggleIcon.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        passwordToggleIcon.classList.remove("fa-eye-slash");
        passwordToggleIcon.classList.add("fa-eye");
    }
}

document.addEventListener("DOMContentLoaded", function () {
    // Vérifier le mode stocké dans localStorage
    if (localStorage.getItem("darkMode") === "enabled") {
        document.body.classList.add("dark-mode");
        updateDarkModeButton(true);
    }
});

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
        updateDarkModeButton(false);
    } else {
        body.classList.add("dark-mode");
        localStorage.setItem("darkMode", "enabled");
        updateDarkModeButton(true);
    }
}

function updateDarkModeButton(isDarkMode) {
    const button = document.querySelector(".btn-mode-toggle i");
    if (isDarkMode) {
        button.classList.remove("fa-moon");
        button.classList.add("fa-sun");
    } else {
        button.classList.remove("fa-sun");
        button.classList.add("fa-moon");
    }
}
</script>

</body>
</html>