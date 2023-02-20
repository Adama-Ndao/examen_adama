<?php

use App\Models\Type;
use App\Models\Candidat;
use App\Models\Formation;
use App\Models\Referentiel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ReferentielController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $r = DB::select(DB::raw("SELECT COUNT(*) as formations, istarted  FROM formations GROUP BY istarted;"));
    $d = "";
    $at= [];
    foreach($r as $v) {
        if ($v->istarted == 0){
            $at [] = 'en attente';
        }else{
            $at []= 'en cours';
        }
        foreach($at as $atte)
        $d .= "['".$atte."', ".$v->formations."],";
    }

    $datas = $d;

    $candidats=Candidat::all();
    $formations=Formation::all();
    $referentiels=Referentiel::all()->only([1,2,3]);
    $types=Type::all();
    return view('welcome',['candidats' =>$candidats, 'formations'=>$formations, 
    'referentiels'=>$referentiels, 'types'=>$types, 'datas'=>$datas]);
})->name('welcome');

Route::get('/graphe', [CandidatController::class, 'static'])->name('graphe');

Route::resource('candidat',CandidatController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('formation',FormationController::class);
Route::resource('referentiel',ReferentielController::class);
Route::resource('type',TypeController::class);

