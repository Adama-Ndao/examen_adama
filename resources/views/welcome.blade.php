<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['age', 'age'],
          <?php echo $datas;?>
        ]);

        var options = {
          title : 'Graphe des formations en cours et en attente',
          vAxis: {title: 'formations'},
          hAxis: {title: 'istarted'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color:whitesmoke">
<header class="header">
        <div class="container">
            <div class="row">
                <nav class="nav" style="background:Gainsboro; border-radius:10px;  height:70px">
                <br>
                <a style="display:inline-block; border:px solid; color:white; font-size:14px; background-color:gray;
                    width:50px; height:15px; padding:10px; border-radius:10px
                     " href="{{route('candidat.create')}}">Postuler</a>

                <a style="border:px solid; background-color:gray; border-radius:10px; padding:10px;
                    font-size:14px;marging-bottom:10px; color:white" href="{{ route('candidat.index') }}">
                        Liste des Candidats</a>

                <a style="border:1px solid; background:grey; border-radius:10px; padding:10px;
                    font-size:14px;marging-bottom:10px; color:white" href="{{ route('formation.index') }}">
                         Liste des Formations</a>

                
                    <a style="border:1px solid; background:grey; border-radius:10px; padding:10px;
                    font-size:14px;marging-bottom:10px; color:white" href="{{ route('referentiel.index') }}">
                         Liste des Referentiel</a>

                         <a style="border:1px solid; background:grey; border-radius:10px; padding:10px;
                            font-size:14px;marging-bottom:10px; color:white" href="{{ route('type.index') }}">
                             Liste des Type</a>
                             <a style="display:inline-block;margin-left:10px ; color:white; font-size:14px; background-color:gray;
                                 width:120px; height:15px;margin-left:20px ;padding:10px; border-radius:15px
                                     " href="{{route('graphe')}}">Les tranches d'Age</a>

                        <a style="display:inline-block;margin-left:10px ; color:white; font-size:14px; background-color:gray;
                             width:80px; height:15px;margin-left:15px ;padding:10px; border-radius:15px
                                 " href="{{route('login')}}">Se connecter</a>

                <a style="display:inline-block;margin-left:10px ; color:white; font-size:14px; background-color:gray;
                    width:50px; height:15px;margin-left:20px ;padding:10px; border-radius:15px
                    " href="{{route('register')}}">S'inscrire</a>

                
                </nav>
            </div>

        </div>

    </header>

    <div style="background:#808080; border-radius:10px;padding:px">
        <h1 style="font-size:40px; color:white; text-align:center">Tableau de borne </h1>
        
    </div>
    <center>
        <section style="background:grey; border-radius:10px;padding:5px; width:50%">
            <h2 style="font-size:30px; color:white; text-align:center">Nombre de candidats par formation </h2>      
        </section>
        <br><br>
    @foreach ($formations as $formation)
        <span hidden>{{$cpt = 0}}</span>
        <span hidden>{{$c = "Candidats"}}</span>
        <div style="background:#C0C0C0; border-radius:10px;padding:5px; width:30%">
        <h4>{{$formation->nom}}</h4>
        <div style="background:#A9A9A9; border-radius:10px;padding:5px; width:50%; font-weight:bold">
            @foreach ($formation->candidats as $f)
                <span hidden>{{$cpt = $cpt + 1}}</span>
            @endforeach 
            {{$cpt." ".$c}}       
        </div>
        </div><br><br>
    @endforeach
    <br><br>
    <section style="background:grey; border-radius:10px;padding:5px; width:50%">
        <h2 style="font-size:30px; color:white; text-align:center">Nombre de formations par referentiel </h2>      
    </section>
    <br><br>
    @foreach ($referentiels as $referentiel)
        <span hidden>{{$k = "Formations"}}</span>
        <div style="background:#C0C0C0; border-radius:10px;padding:5px; width:30%">
        <h4>{{$referentiel->libelle}}</h4>
        <div style="background:#A9A9A9; border-radius:10px;padding:5px; width:50%; font-weight:bold">
            @foreach ($referentiel->formations as $f)
                <span hidden>{{$cpt = $cpt + 1}}</span>
            @endforeach 
            {{$cpt." ".$k}}       
        </div>
        </div><br><br>
    @endforeach
    <br><br>
    <section style="background:grey; border-radius:10px;padding:5px; width:50%">
        <h2 style="font-size:30px; color:white; text-align:center">Repartition des formations par type </h2>      
    </section>
    <br><br>
    @foreach ($types as $type)
        <span hidden>{{$c = "Formations"}}</span>
        <div style="background:#C0C0C0; border-radius:10px;padding:5px; width:30%">
        <h4>{{$type->lib}}</h4>
        <div style="background:#A9A9A9; border-radius:10px;padding:5px; width:50%; font-weight:bold">
            @foreach ($type->referentiels as $f)
                @foreach ($f->formations as $t)
                    <ul>
                        <li>{{$t->nom}}</li>
                    </ul>
                @endforeach
            @endforeach 
        </div>
        </div><br>
    @endforeach
    <br><br>
    <section style="background:grey; border-radius:10px;padding:5px; width:50%">
        <h2 style="font-size:30px; color:white; text-align:center">Repartition des candidats par sexe </h2>      
    </section>
    <br><br>
        <span hidden>{{$cpt = 0}}</span>
        <span hidden>{{$for = "Hommes"}}</span>
        <div style="background:#C0C0C0; border-radius:10px;padding:5px; width:30%">
        <h4>Homme</h4>
        <div style="background:#A9A9A9; border-radius:10px;padding:5px; width:50%; font-weight:bold">
            @foreach ($candidats as $candidat)
                @if ($candidat->sexe == "Homme")
                <span hidden>{{$cpt = $cpt + 1}}</span>
                @endif
            @endforeach
            {{$cpt." ".$for}}
            
        </div>
        </div><br><br>

        <span hidden>{{$cpt1 = 0}}</span>
        <span hidden>{{$fore = "Femmes"}}</span>
        <div style="background:#C0C0C0; border-radius:10px;padding:5px; width:30%">
        <h4>Femmes</h4>
        <div style="background:#A9A9A9; border-radius:10px;padding:5px; width:50%; font-weight:bold">
            @foreach ($candidats as $candidat)
                @if ($candidat->sexe == "Femme")
                <span hidden>{{$cpt1 = $cpt1 + 1}}</span>
                @endif
            @endforeach
            {{$cpt1." ".$fore}}
            
        </div>
        </div><br><br>
        <div id="chart_div" style="width: 900px; height: 500px;"></div>
        
    </center>
</body>
</html>