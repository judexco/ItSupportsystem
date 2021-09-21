<!-- <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script> -->

<div class="box box-default">
    <div class="box-header with-border">
        <a href="{{ url('admin/tickets') }}" class="btn btn-app {{ Ekko::isActiveRoute('managetickets.index') }}"><span class="badge">{{ $menucount['all'] }}</span><i class="fa fa-ticket"></i>All</a> 
        <a href="{{ url('admin/tickets/open') }}" class="btn btn-app {{ Ekko::isActiveRoute('managetickets.open') }}"><span class="badge bg-aqua">{{ $menucount['open'] }}</span><i class="fa fa-folder-open"></i>Open</a> 
        <a href="{{ url('admin/tickets/inprogress') }}" class="btn btn-app {{ Ekko::isActiveRoute('managetickets.inprogress') }}"><span class="badge bg-yellow">{{ $menucount['inprogress'] }}</span><i class="fa fa-folder"></i>pending</a> 
        <a href="{{ url('admin/tickets/closed') }}" class="btn btn-app {{ Ekko::isActiveRoute('managetickets.closed') }}"><span class="badge bg-green">{{ $menucount['closed'] }}</span><i class="fa fa-check-square"></i>Closed</a> 
        <a href="{{ url('admin/tickets/reopened') }}" class="btn btn-app {{ Ekko::isActiveRoute('managetickets.reopened') }}"><span class="badge bg-red">{{ $menucount['reopened'] }}</span><i class="fa fa-history"></i>Reopend</a> 
    </div>
<!-- 
    <script>
    var data = JSON.parse('{{ $tickets }}');
    
    new Morris.Bar({
        // ID of the element in which to draw the chart.
        element: 'stats-container',
        data: data,
        xkey: 'date',
        ykeys: ['value'],
        labels: ['Tickets']
    });
</script>

<ul class="nav nav-pills">
    <li class="{{ Request::get('days') == 7 || Request::get('days') == '' ? 'active' : ''}}"><a href="{{ url('stats?days=7') }}">7 Days</a></li>
    <li class="{{ Request::get('days') == 30 ? 'active' : ''}}"><a href="{{ url('stats?days=30') }}">30 Days</a></li>
    <li class="{{ Request::get('days') == 60 ? 'active' : ''}}"><a href="{{ url('stats?days=60') }}">60 Days</a></li>
    <li class="{{ Request::get('days') == 90 ? 'active' : ''}}"><a href="{{ url('stats?days=90') }}">90 Days</a></li>
</ul>
      
<div id="stats-container" style="height: 250px;"></div> -->
</div>
