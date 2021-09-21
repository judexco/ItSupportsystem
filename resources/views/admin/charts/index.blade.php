@extends('admin.layouts.master')

@section('content')

   <div class="content-wrapper">
        <section class="content-header">
        
         @permission('chart-report')

         <div class="col-sm-6">
                   <div class="panel panel-primary">
                     <div class="panel-heading">
                       <h4 class="text-capitalize">
                         Report
                       </h4>
                     </div>
                     <div class="panel-body">
                     
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Department', 'Request'],
          @foreach($chart_dept as $chart_depts)
          ['{{$chart_depts->name}}', {{$chart_depts->issue_count}}],
          @endforeach
       
        ]);

        var options = {
          title: 'Visual Representation of All Requests by Departments'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  
    <div id="piechart" style="width: 500px; height: 300px;"></div>

     </div>
                       

    </div>
   </div>
     @endpermission    

    @permission('chart-report')

         <div class="col-sm-6">
                   <div class="panel panel-primary">
                     <div class="panel-heading">
                       <h4 class="text-capitalize">
                         Report
                       </h4>
                     </div>
                     <div class="panel-body">
                     
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Location', 'Request'],
          @foreach($chart_location as $chart_locations)
          ['{{$chart_locations->name}}', {{$chart_locations->request_count}}],
          @endforeach
       
        ]);

        var options = {
          title: 'visual Representation of All Requests by Locations'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

        chart.draw(data, options);
      }
    </script>
  
  
    <div id="piechart1" style="width: 500px; height: 300px;"></div>

  </div>               
   </div>
 </div>
@endpermission


@permission('chart-report')

          <div class="col-sm-6">
                   <div class="panel panel-primary">
                     <div class="panel-heading">
                       <h4 class="text-capitalize">
                         Report
                       </h4>
                     </div>
                     <div class="panel-body">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Assigned', 'Request'],
          @foreach($chart_assign as $chart_assigns)
          ['{{$chart_assigns->fullname}}', {{$chart_assigns->count_assigned}}],
          @endforeach
       
        ]);

        var options = {
          title: 'visual Representation of All Assigned Requests'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }
    </script>
  
  
    <div id="piechart2" style="width: 450px; height: 300px;"></div>

   </div>

  </div>
  </div>
 @endpermission  


       @permission('chart-report')

          <div class="col-sm-6">
                   <div class="panel panel-primary">
                     <div class="panel-heading">
                       <h4 class="text-capitalize">
                         Report
                       </h4>
                     </div>
                     <div class="panel-body">
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Status', 'Request'],
          @foreach($chart_resolve as $chart_resolves)
          ['{{$chart_resolves->name}}', {{$chart_resolves->count_resolved}}],
          @endforeach
       
        ]);

        var options = {
          title: 'visual Representation of All Requests Status'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

        chart.draw(data, options);
      }
    </script>
  
  
    <div id="piechart3" style="width: 450px; height: 300px;"></div>

                       </div>

                     </div>
                     </div>
       @endpermission          

        @permission('chart-report')

          <div class="col-sm-6">
                   <div class="panel panel-primary">
                     <div class="panel-heading">
                       <h4 class="text-capitalize">
                         Report
                       </h4>
                     </div>
                     <div class="panel-body">
                     
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Resolved", "Requests", { role: "style" } ],
       @foreach($chart_support as $chart_supports)
          ['{{$chart_supports->fullname}}', {{$chart_supports->resolved_count}}, "#008000"],
          @endforeach
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: " Request Resolved By Support Admin",
        width: 300,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 300px; height: 400px;"></div>
     </div>

    </div>
    </div>
  @endpermission         


       @permission('chart-report')

          <div class="col-sm-6">
                   <div class="panel panel-primary">
                     <div class="panel-heading">
                       <h4 class="text-capitalize">
                         Report
                       </h4>
                     </div>
                     <div class="panel-body">
                     
                      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Pending", "Requests", { role: "style" } ],
       @foreach($pending_request as $pending_requests)
          ['{{$pending_requests->fullname}}', {{$pending_requests->pending_count}}, "#FFA500"],
          @endforeach
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: " Request Pending for Support Admin",
        width: 300,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values1"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values1" style="width: 300px; height: 400px;"></div>
                       </div>

                     </div>
                     </div>
       @endpermission         

</section>

@stop