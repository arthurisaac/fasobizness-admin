<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        // $annonces = Annonce::with('illustrations')->with('personne')->orderByDesc('id_ann')->paginate(10);
        $annonces = Annonce::with('illustrations')
            ->with('personne')
            ->orderByDesc('id_ann')
            ->paginate(10);
        if ($request->ajax()) {
            return response()->json($annonces);
        }
        return view('annonces.index', compact('annonces'));
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     */
    public function offresEnOr(Request $request)
    {
        $annonces = Annonce::with('illustrations')
            ->with('personne')
            ->orderByDesc('id_ann')
            ->where('vip', '=', '1')
            ->paginate(40);

        if ($request->ajax()) {
            return response()->json($annonces);
        }

        return view('annonces.enOr', compact('annonces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $annonce = Annonce::with('illustrations')
            ->with('personne')
            ->find($id);
        return view('annonces.show', compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $annonce = Annonce::with('illustrations')
            ->with('personne')
            ->find($id);
        return view('annonces.edit', compact('annonce'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
