<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
        return response()->json(
            $client
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
            'NomCli' => 'required',
            'PrenomCli' => 'required',
            'NumCli' => 'required',
            'MailCli' => 'required',
            'VilleCli' => 'required',
            'AdresseCli' => 'required',
            'Prospect' => 'required',
        ]);
        $client = Client::create($request->all());

        return response()->json([
            "success" => true,
            "message" => "Client crée avec succès.",
            "data" => $client
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
        if (is_null($product)) {
            return $this->sendError('Client non trouvé.');
        }

        return response()->json([
            "success" => true,
            "message" => "Client trouvé avec succès.",
            "data" => $client
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
            'NomCli' => 'required',
            'PrenomCli' => 'required',
            'NumCli' => 'required',
            'MailCli' => 'required',
            'VilleCli' => 'required',
            'AdresseCli' => 'required',
            'Prospect' => 'required',
        ]);
        $input = $request->all();
        $client->id = $input['id'];
        $client->NomCli = $input['NomCli'];
        $client->PrenomCli = $input['PrenomCli'];
        $client->NumCli = $input['NumCli'];
        $client->MailCli = $input['MailCli'];
        $client->VilleCli = $input['VilleCli'];
        $client->AdresseCli = $input['AdresseCli'];
        $client->Prospect = $input['Prospect'];
        $client->save();
        
        return response()->json([
            "success" => true,
            "message" => "Client mis à jour avec succès.",
            "data" => $client
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
        Client::destroy($id);
        return response()->json([
        "success" => true,
        "message" => "Client supprimé avec succès.",
        ]);
    }
}
