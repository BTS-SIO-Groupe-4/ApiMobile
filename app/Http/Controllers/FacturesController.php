<?php

namespace App\Http\Controllers;

use App\Models\Factures;
use Illuminate\Http\Request;

class FacturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factures = Factures::all();
        return response()->json([
            "success" => true,
            "message" => "Liste des Factures",
            "data" => $factures

        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'IdCli'=>'required',
            'DateFac'=>'required',
            ]);
    
            $factures = Factures::create($request->all());
    
            return response()->json([
                "success" => true,
                "message" => "Factures crée avec succés",
                "data" => $factures
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $factures = Factures::find($id);
        if (is_null($product)) {
            return $this->sendError('Facture non trouvé.');
        }

        return response()->json([
            "success" => true,
            "message" => "Facture trouvé avec succès.",
            "data" => $factures
        ]);
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
        $request->validate([
            'IdCli'=>'required',
            'DateFac'=>'required',
            ]);
        
            $input = $request->all();
            $factures->id = $input['id'];
            $factures->Idcli = $input['IdCli'];
            $factures->DateFac = $input['DateFac'];
            $factures->save();

            return response()->json([
                "success" => true,
                "message" => "Facture mis à jour avec succès.",
                "data" => $factures
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Factures::destroy($id);
        return response()->json([
            "success" => true,
            "message" => "Facture supprimé avec succès.",
            
        ]);
    }
}
