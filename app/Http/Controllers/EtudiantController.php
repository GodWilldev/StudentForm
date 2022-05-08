<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use DB;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Récupération des données de la table
		$list = Etudiant::all();
		
		//renvoie à la vue
		return view('affiche', compact('list'));
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('ajout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		$etudiant = new \App\Models\Etudiant;
		$etudiant->nom = $request->nom;
		$etudiant->prenom = $request->prenom;
		$etudiant->cne = $request->cne;
		$etudiant->email = $request->email;
		$etudiant->tel = $request->tel;
		$etudiant->ville = $request->ville;
		$etudiant->save();
		return "C'est bien enregistré !";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
		$etudiant = Etudiant::find($id);
        $etudiant->nom = $request->nom;
		$etudiant->save();
		return "Modification réeussie !";
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
		Etudiant::destroy($id);
    }
}
