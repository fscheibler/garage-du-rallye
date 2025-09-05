<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GarageController extends Controller
{
    /**
     * Affiche la page de présentation du garage
     */
    public function index()
    {
        return view('pages.garage.index');
    }
}
