<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entreprise;

class EntreprisesController extends Controller
{
    public function index()
    {
	    $entreprises = Entreprise::all();
        return view('entreprise.index')->with('entreprises', $entreprises);
    }

    public function create()
    {
        return view('entreprise.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'rue' => 'required',
            'code_postal' => 'required',
            'ville' => 'required',
            'telephone' => 'nullable',
            'email' => 'required'
        ]);

        $entreprise = new Entreprise;
        $entreprise->nom = $request->input('nom');
        $entreprise->rue = $request->input('rue');
        $entreprise->code_postal = $request->input('code_postal');
        $entreprise->ville = $request->input('ville');
        $entreprise->telephone = $request->input('telephone');
        $entreprise->email = $request->input('email');
        $entreprise->save();

        return redirect('/entreprise');
    }

    public function show($id)
    {
        $entreprise = Entreprise::find($id);
        return view('entreprise.show')->with('entreprise', $entreprise);
    }

    public function edit($id)
    {
        $entreprise = Entreprise::find($id);
        return view('entreprise.update')->with('entreprise', $entreprise);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nom' => 'required',
            'rue' => 'required',
            'code_postal' => 'required',
            'ville' => 'required',
            'telephone' => 'nullable',
            'email' => 'required'
        ]);

        $entreprise = Entreprise::find($id);
        $entreprise->nom = $request->input('nom');
        $entreprise->rue = $request->input('rue');
        $entreprise->code_postal = $request->input('code_postal');
        $entreprise->ville = $request->input('ville');
        $entreprise->telephone = $request->input('telephone');
        $entreprise->email = $request->input('email');
        $entreprise->save();

        return redirect('/entreprise');
    }

    public function delete($id)
    {
        $entreprise = Entreprise::find($id);
        return view('entreprise.delete')->with('entreprise', $entreprise);
    }

    public function destroy($id)
    {
        $entreprise = Entreprise::find($id);
        $entreprise->delete();

        return redirect('/entreprise');
    }
}
