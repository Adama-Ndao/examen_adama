<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body style="background-color:whitesmoke">
        <center>

            <div style="background:LightSteelBlue; border-radius:10px;padding:5px;">
                <h1 style="font-size:30px; color:black">Formulaire Ajout d'un Candidat</h1>
            </div>
            <br>
            <div style="background-color:gray; width:50%">
            <table>
            <div >
            <form method="POST" action="{{ route('candidat.store') }}">
                @csrf
                
                <label for=""> Nom 
                <input type="text" name="nom" placeholder="nom">
                </label>
                <br>
                <br>
                <label for=""> Prenom 
                <input type="text" name="prenom" placeholder="prenom">
                </label>
                <br>
                <br>
                <label for="">E-mail</label>
                <input type="text" name="email" placeholder="email">
                <br>
                <br>
                <label for="">Age</label>
                <input type="number" name="age" placeholder="age">
                <br>
                <br>
                <label for=""> NiveauEtude 
                <input type="text" name="niveauEtude" placeholder="niveauEtude">
                </label>
                <br>
                <br>
                <label for=""> Sexe 
                <select name="sexe" id="">
                    <option value="">---------</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
                </label>
                <br>
                <br>
                <label for="">  Formations
                <select name="formations" id="">
                    @foreach($formations as $formation)
                        <option value="{{$formation->id}}">{{$formation->nom}}</option>
                    @endforeach
                </select>
                </label>
                <br>
                <br>
                <label for="">  Referentiels
                <select name="referentiels" id="">
                    @foreach($referentiels as $referentiel)
                        <option value="{{$referentiel->id}}">{{$referentiel->libelle}}</option>
                    @endforeach
                </select>
                </label>
                <br>
                <br>
                <label for="">  Types
                <select name="types" id="">
                    @foreach($types as $type)
                        <option value="{{$type->id}}">{{$type->lib}}</option>
                    @endforeach
                </select>
                </label>
                <br>
                <br>
                <input type="submit" name="" value="Enregistrer">

                <a style="border:1px solid; background:white; padding:5px;
                    font-size:15px;border-radius:10px; color:black" href="{{ route('candidat.index') }}">
                        Liste des Candidats</a>
                
             </div>
            </form>
            </table>
            </div>
           
        </center>
        
       
    </body>
</html>