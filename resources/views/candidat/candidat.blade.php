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
                <a style="border:1px solid; background:gray; border-radius:15px; padding:10px;
                    font-size:14px;marging-bottom:10px; color:white" href="{{ route('candidat.create') }}">
                            Ajouter un candidat
                 </a>

                <a style="display:inline-block;margin-left:10px ; color:white; font-size:14px; background-color:gray;
                    width:120px; height:15px;margin-left:15px ;padding:10px; border-radius:15px
                    " href="{{route('welcome')}}">Tableau de Borne</a>

                <a style="display:inline-block;margin-left:10px ; color:white; font-size:14px; background-color:gray;
                    width:120px; height:15px;margin-left:20px ;padding:10px; border-radius:15px
                    " href="{{route('graphe')}}">Les tranches d'Age</a>

                <a style="border:1px solid; background:grey; border-radius:10px; padding:10px;
                     font-size:14px; color:white" href="{{ route('formation.index') }}">
                     Liste des Formations</a>

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
<div style="background:Gainsboro; border-radius:10px;padding:5px; width:50%; ">
    <div style="">
        <h1 style="font-size:50px; color:black">Liste des candidats</h1>
    </div>
    
        <table>
            <tr style="background-color:gray; color:white; font-size:20px;padding:5px">
                <td>ID</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>E-mail</td>
                <td>Age</td>
                <td>Niveau Etude</td>
                <td>Sexe</td>
                <!--<td>Action</td>-->
                

            @if ($candidats->count() > 0)
                        @foreach ($candidats as $candidat) 
                            <tr>
                            <td>{{ $candidat->id }}</td>
                            <td> {{$candidat->nom }} </td>
                            <td>{{ $candidat->prenom }}</td>
                            <td> {{$candidat->email }} </td>
                            <td> {{$candidat->age }} </td>
                            <td> {{$candidat->niveauEtude }} </td>
                            <td> {{$candidat->sexe }} </td>
                           <!-- <td>
                                <form method="POST" action="{{route('candidat.destroy', $candidat)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button style="color:red" type="submit">Sup🗑</button>
                                </form>
                                <a href="{{route('candidat.edit', ['candidat' =>$candidat->id])}}">Mod✏</a>
                                </td>
                            </tr>-->
                         @endforeach
                @else 
                        <span>Aucun candidat  dans la base</span>
            @endif 
            <br>
           
        </table>
        </div>
    </center>
</body>
</html>