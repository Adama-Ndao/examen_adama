<html>
  <head>
  <header class="header">
        <div class="container">
            <div class="row">
                <nav class="nav" style="background:Gainsboro; border-radius:10px;  height:70px">
                <br>
                <a style="border:px solid; background-color:gray; border-radius:10px; padding:10px;
                    font-size:14px;marging-bottom:10px; color:white" href="{{ route('candidat.index') }}">
                        Liste des Candidats</a>

                <a style="display:inline-block;margin-left:10px ; color:white; font-size:14px; background-color:gray;
                    width:120px; height:15px;margin-left:15px ;padding:10px; border-radius:15px
                    " href="{{route('welcome')}}">Tableau de Borne</a>

                <a style="border:1px solid; background:grey; border-radius:10px; padding:10px;
                    font-size:14px;marging-bottom:10px; color:white" href="{{ route('formation.index') }}">
                        Liste des Formations</a>

                <a style="border:1px solid; background:grey; border-radius:10px; padding:10px;
                      font-size:14px;marging-bottom:10px; color:white" href="{{ route('type.index') }}">
                          Liste des Type</a>
                </nav>
            </div>

        </div>

    </header>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['age', 'age'],
          <?php echo $chartData;?>
        ]);

        var options = {
          title : 'Graphe des tranches d\'age',
          vAxis: {title: 'candidats'},
          hAxis: {title: 'age'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

<!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['age', 'age'],
          <?php echo $chartData;?>
        ]);

        var options = {
          title : 'Graphe des tranches d\'age',
          vAxis: {title: 'formations'},
          hAxis: {title: 'istarted'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script> -->

  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
