<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    function index(Request $request) {
        $personnes = Personne::paginate(50);
        $search = $request->get("q");
        if (!empty($search)) {
            $personnes = Personne::where("nom", "LIKE", $search)
                ->orWhere("prenom", "LIKE", $search)
                ->orWhere("nom_pers", "LIKE", $search)
                ->orWhere("email", "LIKE", $search)
                ->orWhere("sect_activite", "LIKE", $search)
                ->paginate(50);
        }
        $personnes->setCollection($personnes->getCollection()->makeVisible(['mdp'])->makeHidden(['gcm_registration_id']));
        return view('personnes.index', compact('personnes'));
    }
}
