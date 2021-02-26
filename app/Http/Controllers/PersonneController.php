<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    function index() {
        $personnes = Personne::paginate(10);
        $personnes->setCollection($personnes->getCollection()->makeVisible(['mdp'])->makeHidden(['gcm_registration_id']));
        return view('personnes.index', compact('personnes'));
    }
}
