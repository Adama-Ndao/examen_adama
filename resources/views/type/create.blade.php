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
                <h1 style="font-size:50px; color:black">Formulaire Ajout d'un Type</h1>
            </div>
            <br>
            <table>
            <div>
            <form method="POST" action="{{ route('type.store') }}">
                @csrf
                <label for=""> Libelle 
                <input type="text" name="lib" placeholder="libelle">
                </label>
                <br>
                <br>
                <input type="submit" name="" value="Enregistrer">

            </form>
            </div>
            </table>
            <br>
            <br>
            <a style="border:1px solid; background:grey; border-radius:10px; padding:10px;
             font-size:20px;marging-bottom:10px; color:black" href="{{ route('type.index') }}">
             Liste des Type</a>
        </center>
        
       
    </body>
</html>