<?php

namespace App\Http\Controllers;

use App\Collaborateur;
use App\Entreprise;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollaborateursController extends Controller
{

    public function index()
    {
        $collaborateurs = Collaborateur::all();
        return view('collaborateur.index')->with('collaborateurs', $collaborateurs);
    }

    public function create()
    {
        $entreprises = Entreprise::all();
        return view('collaborateur.create')->with('entreprises', $entreprises);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'civilite' => 'required',
            'rue' => 'required',
            'code_postal' => 'required',
            'ville' => 'required',
            'telephone' => 'nullable',
            'email' => 'required',
            'entreprise_id' => 'required'
        ]);

        $collaborateur = new Collaborateur;
        $collaborateur->nom = $request->input('nom');
        $collaborateur->prenom = $request->input('prenom');
        $collaborateur->civilite = $request->input('civilite');
        $collaborateur->rue = $request->input('rue');
        $collaborateur->code_postal = $request->input('code_postal');
        $collaborateur->ville = $request->input('ville');
        $collaborateur->telephone = $request->input('telephone');
        $collaborateur->email = $request->input('email');
        $collaborateur->entreprise_id = $request->input('entreprise_id');
        $collaborateur->save();

        return redirect('/collaborateur');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $collaborateur = Collaborateur::find($id);
        $entreprises = Entreprise::all();
        return view('collaborateur.update')->with('collaborateur', $collaborateur)->with('entreprises', $entreprises);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'nom' => 'required',
        'prenom' => 'required',
        'civilite' => 'required',
        'rue' => 'required',
        'code_postal' => 'required',
        'ville' => 'required',
        'telephone' => 'nullable',
        'email' => 'required',
        'entreprise_id' => 'required'
    ]);

        $collaborateur = Collaborateur::find($id);
        $collaborateur->nom = $request->input('nom');
        $collaborateur->prenom = $request->input('prenom');
        $collaborateur->civilite = $request->input('civilite');
        $collaborateur->rue = $request->input('rue');
        $collaborateur->code_postal = $request->input('code_postal');
        $collaborateur->ville = $request->input('ville');
        $collaborateur->telephone = $request->input('telephone');
        $collaborateur->email = $request->input('email');
        $collaborateur->entreprise_id = $request->input('entreprise_id');
        $collaborateur->save();

        return redirect('/collaborateur');
    }

    public function delete($id)
    {
        $collaborateur = Collaborateur::find($id);
        return view('collaborateur.delete')->with('collaborateur', $collaborateur);
    }

    public function destroy($id)
    {
        $collaborateur = Collaborateur::find($id);
        $collaborateur->delete();

        return redirect('/collaborateur');
    }
}
