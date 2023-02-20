<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Formation;
use App\Models\Referentiel;
use Illuminate\Http\Request;

class ReferentielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $referentiels = Referentiel::all();
        $types = Type::all();
            return view('referentiel.referentiel', [
                'referentiels' =>$referentiels,
                'types' =>$types,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$formations = Formation::all();
        $types = Type::all();
        return view('referentiel.create', ['types' => $types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $referentiel = Referentiel::create([
            'libelle' => $request->libelle,
            'validated' => $request->validated,
            'horaire' => $request->horaire,
            'type_id' =>$request->types
            
        ]);
        return redirect()->back();
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
       // $referentiels = Referentiel::find($referentiel);
       // return view('referentiel.edit', ['referentiels' =>$referentiels]);
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
    }
}
