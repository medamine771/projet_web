<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller{
    /**
     * Affiche la liste des professeurs
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('professors');
    }
}