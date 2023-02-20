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
                      font-size:14px;marging-bottom:10px; color:white" href="{{ route('type.index') }}">
                          Liste des Type</a>
                          <a style="border:1px solid; background:grey; border-radius:10px; padding:10px;
                    font-size:14px;marging-bottom:10px; color:white" href="{{ route('referentiel.index') }}">
                         Liste des Referentiel</a>
                </nav>
            </div>

        </div>

    </header>
<br>
    <center>
    <div style="">
        <h1 style="font-size:50px; color:black">Liste des Formations</h1>
    </div>
    <br>
        <a style="border:1px solid; background:grey; border-radius:10px; padding:10px;
            font-size:20px;marging-bottom:10px; color:white" href="{{ route('formation.create') }}">
            Ajouter un formation
        </a>
        <br>
        <br>
        <table>
            <tr style="background-color:grey; color:white; font-size:20px;padding:5px">
                <td>ID</td>
                <td>Nom</td>
                <td>Duree</td>
                <td>Description</td>
                <td>Is-Started</td>
                <td>Date_Debut</td>
                
                

            @if ($formations->count() > 0)
                        @foreach ($formations as $formation) 
                            <tr>
                            <td>{{ $formation->id }}</td>
                            <td> {{$formation->nom }} </td>
                            <td>{{ $formation->duree }}</td>
                            <td> {{$formation->description }} </td>
                            <td> {{$formation->istarted }} </td>
                            <td> {{$formation->date_debut }} </td>
                            <td>
                            
                                </td>
                            </tr>
                         @endforeach
                @else 
                        <span>Aucun formation  dans la base</span>
            @endif 
            <br>
           
        </table>
    </center>
</body>
</html>