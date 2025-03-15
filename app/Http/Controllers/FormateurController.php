<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormateurController extends Controller
{
    public function FormateurDashboard(){
        return view('formateur.index');
    } // End Mehtod
}
