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
    <body>
        <center>
            <div style="background:blue; border-radius:10px;padding:5px">
                <h1 style="font-size:50px; color:white">Formulaire Modification Phase</h1>
            </div>
            <br>
            <form method="POST" action="{{ route('candidat.update', ['candidat' =>$candidat->id])}}">
                @csrf
                <input type="text" name="nom"  value="{{$phase->nom}}" placeholder="Nom">
                <input type="text" name="prenom"  value="{{$candidat->nom}}" placeholder="Preom">
                <input type="text" name="email"  value="{{$candidat->email}}" placeholder="email">
                <input type="number" name="age"  value="{{$candidat->age}}" placeholder="age">
                <input type="text" name="niveauEtude"  value="{{$candidat->niveauEtude}}" placeholder="niveauEtude">
                <input type="text" name="sexe"  value="{{$candidat->sexe}}" placeholder="sexe">
                <input type="submit" name="" value="Modifier">

            </form>
        </center>
        
       
    </body>
</html>