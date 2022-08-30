<?php

namespace App\Http\Controllers;

use App\Models\Postes;
use Illuminate\Http\Request;

class PostesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postes = Postes::all();
        response()->json($postes);
        return view("postes.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $poste = new Postes;
        $poste->titre = $request->titre;
        $poste->department = $request->department;
        $poste->add_poste_date = $request->add_poste_date;
        $poste->description = $request->description;
        $poste->save();
        return response()->json([
            "message" => "Poste ajouté."
        ], 201);

        return view("postes.create");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        if (Postes::where('id', $id)->exists()) {
            $poste = Postes::find($id);
            $poste->titre = is_null($request->titre) ? $poste->titre : $request->titre;
            $poste->department = is_null($request->department) ? $poste->department : $request->department;
            $poste->add_poste_date = is_null($request->add_poste_date) ? $poste->add_poste_date : $request->add_poste_date;
            $poste->description = is_null($request->description) ? $poste->description : $request->description;
            $poste->save();
            return response()->json([
                "message" => "Poste mis à jour."
            ], 200);
        }else{
            return response()->json([
                "message" => "Poste Not Found."
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
        if(Postes::where('id', $id)->exists()) {
            $poste = Postes::find($id);
            $poste->delete();

            return response()->json([
              "message" => "Poste supprimé"
            ], 200);
        } else {
            return response()->json([
              "message" => "Poste not found"
            ], 404);
        }
    }
}
