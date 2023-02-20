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
                <h1 style="font-size:50px; color:black">Formulaire Ajout d'un Referentiel</h1>
            </div>
            <br>
            <table>
            <div>
            <form method="POST" action="{{ route('referentiel.store') }}">
                @csrf
                <label for=""> Libelle 
                <input type="text" name="libelle" placeholder="libelle">
                </label>
                <br>
                <br>
                <label for=""> Validated 
                <input type="number" name="validated" placeholder="validated">
                </label>
                <br>
                <br>
                <label for="">Horaire</label>
                <input type="number" name="horaire" placeholder="horaire">
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

            </form>
            </div>
            </table>
            <br>
            <br>
            <a style="border:1px solid; background:grey; border-radius:10px; padding:10px;
             font-size:20px;marging-bottom:10px; color:black" href="{{ route('referentiel.index') }}">
             Liste des Referentiel</a>
        </center>
        
       
    </body>
</html>