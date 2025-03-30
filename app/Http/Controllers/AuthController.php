<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http; // Importation pour les requêtes HTTP

class AuthController extends Controller
{
    // Afficher le formulaire d'inscription
    public function register()
    {
        return view('register');
    }

    // Traiter le formulaire d'inscription
    public function registerPost(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'user_type' => 'required|in:etudiant,professeur',
            'cne' => 'required_if:user_type,etudiant|nullable|string|max:20',
            'matricule' => 'required_if:user_type,professeur|nullable|string|max:20',
            'g-recaptcha-response' => 'required', // On vérifie qu'il est fourni
        ]);

        // Vérification reCAPTCHA avec désactivation de SSL
        $response = Http::timeout(30)->withoutVerifying()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);
        
        

        // Vérifier si la réponse est valide
        if (!$response->json('success')) {
            return back()->withErrors(['g-recaptcha-response' => 'La vérification reCAPTCHA a échoué.']);
        }

        // Création de l'utilisateur
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Hash du mot de passe
        $user->user_type = $request->user_type;

        // Ajouter CNE ou Matricule selon le type d'utilisateur
        if ($request->user_type == 'etudiant') {
            $user->cne = $request->cne;
        } else {
            $user->matricule = $request->matricule;
        }

        // Sauvegarde de l'utilisateur
        $user->save();

        // Retour à la vue avec un message de succès
        return back()->with('success', 'Inscription réussie !');
    }

    // Afficher le formulaire de connexion
    public function login()
    {
        return view('login');
    }

    // Traiter le formulaire de connexion
    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Vérifie si "Se souvenir de moi" est coché
        $remember = $request->has('remember');

        // Tentative d'authentification
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('/home')->with('success', 'Login réussi');
        }

        return back()->with('error', 'Erreur Email ou Mot de passe');
    }

    // Déconnexion
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
