<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    public function StagiaireDashboard(){
        return view('stagiaire.index');
    } // End Mehtod
}
