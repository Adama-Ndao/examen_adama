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
            <div style="background:grey; border-radius:10px;padding:5px">
                <h1 style="font-size:50px; color:black">Formulaire Ajout d'une Formation</h1>
            </div>
            <br>
            <div style="background-color:gray; width:50%">
            <table>
            <div>
            <form method="POST" action="{{ route('formation.store') }}">
                @csrf
                <label for=""> Nom 
                <input type="text" name="nom" placeholder="nom">
                </label>
                <br>
                <br>
                <label for=""> Duree 
                <input type="number" name="duree" placeholder="duree">
                </label>
                <br>
                <br>
                <label for="">Description</label>
                <input type="text" name="description" placeholder="description">
                <br>
                <br>
                <label for="">Is-Started</label>
                <input type="number" name="isStarted" placeholder="isStarted">
                <br>
                <br>
                <label for=""> Date_Debut 
                <input type="date" name="date_debut" placeholder="date_debut">
                </label>
                <br>
                <br>
                <input type="submit" name="" value="Enregistrer">

            </form>
            </div>
            </table>
            </div>
            <br>
            <br>
            <a style="border:1px solid; background:grey; border-radius:10px; padding:10px;
             font-size:20px;marging-bottom:10px; color:black" href="{{ route('formation.index') }}">
             Liste des Formations</a>
        </center>
        
       
    </body>
</html>