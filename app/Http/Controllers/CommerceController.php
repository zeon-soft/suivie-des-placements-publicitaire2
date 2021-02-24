<?php

namespace App\Http\Controllers;

use App\Commerce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommerceController extends Controller
{

    public function index()
    {
        $commerces = Commerce::all();
        return view('commerce.index', compact('commerces'));
    }


    public function create()
    {
        return view('commerce.create');
    }


    public function store(Request $request)
    {



        //dd($Jours_de_fermeture);
        //  foreach($Jours_de_fermeture as $Jours_de_fermeture){
      //      echo $Jours_de_fermeture;
            //}
      //  dd($request->Entreprise);
        $input = $request->except('_token','Jours_de_fermeture','Mois_de_fermeture','num_client_commerce');
        $commerce = Commerce::create($input);


      //  $id = DB::getPdo()->lastInsertId();
        $commerce1 = Commerce::findOrFail($commerce->id);


        $Jours_de_fermeture = $request->input('Jours_de_fermeture');
        $Mois_de_fermeture = $request->input('Mois_de_fermeture');


        foreach($Jours_de_fermeture as &$value){
            $value = "$value";
        }

        foreach($Mois_de_fermeture as &$value1){
            $value1 = "$value1";
        }
        $separated1 = implode("/", $Jours_de_fermeture);
        $separated2 = implode("/", $Mois_de_fermeture);

        $commerce1->Jours_de_fermeture=$separated1;
        $commerce1->Mois_de_fermeture=$separated2;
        $commerce1->num_client_commerce=$commerce->id+10000;
        $commerce1->save();


        //   session::flash('flash_message', 'Commerce successfully added!');
        return redirect()->back();
    }


    public function show($id)
    {
        $commerce = Commerce::findOrFail($id);
        return view('commerce.show', compact(['commerce']));
    }


    public function edit($id)
    {
        $commerce = Commerce::findOrFail($id);
        return view('commerce.edit', compact(['commerce']));
    }


    public function update(Request $request, $id)
    {
        $commerce = Commerce::findOrFail($id);
        //  $input = $request->all();
        $commerce->fill($request->except('_token'))->save();
        //  Session::flash('flash_message', 'Commerce successfully updated!');
        return redirect()->back();
    }


    public function destroy($id)
    {
        $commerce = Commerce::findOrFail($id);
        $commerce->delete();
        return redirect()->back();
    }
}
