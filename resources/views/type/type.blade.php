<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header class="header">
        <div class="container">
            <div class="row">
                <nav class="nav" style="background:Gainsboro; border-radius:10px;  height:70px">
                <br>
                <a style="border:1px solid; background:gray; padding:5px;
                    font-size:15px;border-radius:10px; color:white" href="{{ route('candidat.index') }}">
                        Liste des Candidats</a>

                <a style="display:inline-block;margin-left:10px ; color:white; font-size:14px; background-color:gray;
                    width:120px; height:15px;margin-left:15px ;padding:10px; border-radius:15px
                    " href="{{route('welcome')}}">Tableau de Borne</a>

                <a style="display:inline-block;margin-left:10px ; color:white; font-size:14px; background-color:gray;
                    width:120px; height:15px;margin-left:20px ;padding:10px; border-radius:15px
                    " href="{{route('graphe')}}">Les tranches d'Age</a>
                    <a style="border:1px solid; background:grey; border-radius:10px; padding:10px;
                    font-size:14px;marging-bottom:10px; color:white" href="{{ route('referentiel.index') }}">
                         Liste des Referentiel</a>
                         <a style="border:1px solid; background:grey; border-radius:10px; padding:10px;
                     font-size:14px; color:white" href="{{ route('formation.index') }}">
                     Liste des Formations</a>

                </nav>
            </div>

        </div>
    <center>
    <div style="">
        <h1 style="font-size:50px; color:black">Liste des types</h1>
    </div>
    <br>
        <a style="border:1px solid; background:grey; border-radius:10px; padding:10px;
            font-size:20px;marging-bottom:10px; color:white" href="{{ route('type.create') }}">
            Ajouter un type
        </a>
        <br>
        <br>
        <table>
            <tr style="background-color:grey; color:white; font-size:20px;padding:5px">
                <td>ID</td>
                <td>Libelle</td>
                
            @if ($types->count() > 0)
                        @foreach ($types as $type) 
                            <tr>
                            <td>{{ $type->id }}</td>
                            <td> {{$type->lib }} </td>
                            
                         @endforeach
                @else 
                        <span>Aucun type  dans la base</span>
            @endif 
            <br>
           
        </table>
    </center>
</body>
</html>