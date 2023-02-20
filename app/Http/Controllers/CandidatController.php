<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Candidat;
use App\Models\Formation;
use App\Models\Referentiel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatController extends Controller
{
   public function __construct(){
     $this->middleware('auth');
   }
    public function index()
    {
        $candidats = Candidat::all();
        $formations = Formation::all();
        $referentiels = Referentiel::all();
        $types = Type::all();
        return view('candidat.candidat', [
            'candidats' =>$candidats,
            'formations' =>$formations,
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
        $formations = Formation::all();
        $candidats = Candidat::all();
        $referentiels = Referentiel::all();
        $types = Type::all();
        return view('candidat.create', ['candidats' => $candidats, 'formations' => $formations, 'referentiels' => $referentiels, 'types' => $types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $candidat = Candidat::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'age' => $request->age,
            'niveauEtude' => $request->niveauEtude,
            'sexe' => $request->sexe,
        ]);
        $candidat->formations()->attach($request->formations);
        $formation = Formation::find($request-> formations);
        $formation->referentiels()->attach($request->referentiels);
        $referentiel = Referentiel::find($request->referentiels);
        Referentiel::create([
            'libelle'=>$referentiel->libelle,
            'validated'=>$referentiel->validated,
            'horaire'=>$referentiel->horaire,
            'type_id'=>$request->types
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
    public function edit($candidat)
    {
        $candidats = Candidat::find($candidat);
        return view('candidat.edit', ['candidats' =>$candidats]);
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
        //$candidats = Candidat::find($candidat);
        //$candidats->nom = $request->nom;
        //$candidats->prenom = $request->prenom;
        //$candidats->email = $request->email;
        //$candidats->age = $request->age;
        //$candidats->niveauEtude = $request->niveauEtude;
        //$candidats->sexe = $request->sexe;

        //$candidats->save();
        //return redirect('/candidat'.'/'.$request->candidat);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidat $candidat)
    {
       // $candidat->delete();
       // return redirect()->back();
    }

    public function static(){
        $result = DB::select(DB::raw("SELECT COUNT(prenom) as Candidats, age as Age FROM candidats GROUP BY age;"));
        $data ="";
        foreach($result as $val){
            $data .= "['".$val->Age."', ".$val->Candidats."],";
        }
        $chartData = $data;
        return view('statics', compact('chartData'));
    } 

    // public function stat(){
    //     $result = DB::select(DB::raw("SELECT COUNT(nom) as Formations, istarted as IsStarted FROM formations GROUP BY istarted;"));
    //     $data ="";
    //     foreach($result as $val){
    //         $data .= "['".$val->IsStarted."', ".$val->Formations."],";
    //     }
    //     $chartData = $data;
    //     return view('statics', compact('chartData'));
    // } 
}
