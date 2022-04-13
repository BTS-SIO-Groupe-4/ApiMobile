<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RdvComCli;

class RdvComCliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rdvcomcli = RdvComCli::all();
        return response()->json(
            $rdvcomcli
        );
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
            'employe_id'=>'required',
            'client_id'=>'required',
            'DateRdv'=>'required',
            ]);
    
            $rdvcomcli = RdvComCli::create($request->all());
    
            return response()->json([
                "success" => true,
                "message" => "Rendez-vous Com/Cli crée avec succés",
                "data" => $rdvcomcli
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
        $rdvcomcli = RdvComCli::find($id);
        if (is_null($rdvcomcli)) {
            return $this->sendError('Rendez-vous non trouvé.');
        }

        return response()->json([
            "success" => true,
            "message" => "Rendez-vous trouvé avec succès.",
            "data" => $rdvcomcli
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
                
        $rdv=RdvComCli::find($id);
        $rdv->update($request->all());

        return response()->json([
            "success" => true,
            "message" => "Rendez-Vous mis à jour avec succès.",
            "data" => $rdv
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
        RdvComCli::destroy($id);
        return response()->json([
            "success" => true,
            "message" => "Rendez-Vous supprimé avec succès.",            
        ]);
    }
}
