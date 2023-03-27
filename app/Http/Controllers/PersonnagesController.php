<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnages;

class PersonnagesController extends Controller
{
    public function index()
    {
        $personnages=Personnages::all();
        return view('personnages.index',compact('personnages'));
    }
    public function show($id)
    {
        $personne=Personnages::findOrFail($id);
        return view('personnages.show',compact('personne'));
    }
    public function add()
    {
        return view('personnages.Ajouter');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'company' => 'required',
            'fortune' => 'required',
            'detail' => 'required',
        ]);
        Personnages::create([
            'nom' => $request->nom,
            'company' => $request->company,
            'fortune' => $request->fortune,
            'detail' => $request->detail,
        ]);
        return redirect('/')->with('secces','Personne Has Been Added Seccufely !');
    }

    public function destroy($id)
    {
        Personnages::findOrFail($id)->delete();
        return back()->with('secces', 'Personne Has Been Deleted Succesfuly !');
    }
    public function edit($id)
    {
        $personne=Personnages::findOrFail($id);
        return view('personnages.edit',compact('personne'));
    }
    public function update($id,Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'company' => 'required',
            'fortune' => 'required',
            'detail' => 'required',
        ]);
        
        $personne=Personnages::findOrFail($id);
        $personne->nom=$request->nom;
        $personne->company=$request->company;
        $personne->fortune=$request->fortune;
        $personne->detail=$request->detail;
        $personne->save();
        return redirect('/')->with('secces',"Personne Has Been Updated Sacccefuly");
    }
}
