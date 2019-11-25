@extends('layouts.app')
@section('title', 'Lead Entry Form')
@section('content')  

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <span class="float-right text-muted font-13">Last 4 month</span>
                <h5 class="mt-0 mb-3">Leads Details</h5>                                    
                <div id="dashboard_piechart" style="height: 300px; width: 100%;"></div> 
                
            </div>
        </div>
    </div>
    
    <div class="col-md-12 col-lg-6 col-xl-5">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-0 mb-3">Leads</h5>
                <div class="row justify-content-end">                                        
                    <div class="col-md-12 col-xl-12 align-self-center">
                        <ul class="list-unstyled list-inline float-right">
                            <li class="list-inline-item px-3">
                                <h5 class="mt-0">{{ $active_leads }} </h5>
                                <small class="font-14 text-muted">Active Leads</small>
                            </li>
                            <li class="list-inline-item px-3">
                                <h5 class="mb-2">{{ $pending_leads }} </h5>
                                <small class="font-14 text-muted">Pending Leads</small>
                            </li>
                            <li class="list-inline-item px-3">
                                <h5 class="text-danger mb-2"> {{ $total_leads }} </h5>                                                                                
                                <span class="font-14 text-danger">Total Leads</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="area_chart" class="morris-chart project-budget-chart"></div>                                    
                <ul class="list-unstyled text-center text-muted mb-0 mt-2">
                    <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-primary mr-2"></i>Total Leads</li>
                    <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-success mr-2"></i>Active Leads</li>
                    <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-secondary mr-2"></i>Pending Leads</li>
                </ul>
            </div>
        </div>
    </div> 
                                                                  
<!-- </div> --><!--end row-->

<!-- <div class="row"> -->
    <div class="col-md-12 col-lg-6 col-xl-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <div class="icon-info">
                                    <i class="mdi mdi-diamond text-warning"></i>
                                </div> 
                            </div>
                            <div class="col-8 align-self-center text-center">
                                <div class="ml-2 text-right">
                                    <p class="mb-1 text-muted font-13">Admins</p>
                                    <h4 class="mt-0 mb-1 font-20">{{ $admins }}</h4>  
                                </div>
                            </div>                    
                        </div>
                        <div class="progress mt-2" style="height:3px;">
                            <div class="progress-bar progress-animated  bg-warning" role="progressbar" style="max-width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <div class="icon-info">
                                    <i class="mdi mdi-account-multiple text-purple"></i>
                                </div> 
                            </div>
                            <div class="col-8 align-self-center text-center">
                                <div class="ml-2 text-right">
                                    <p class="mb-1 text-muted font-13">Users</p>
                                    <h4 class="mt-0 mb-1 font-20">{{ $users }}</h4>                                                                                                                                           
                                </div>
                            </div>                    
                        </div>
                        <div class="progress mt-2" style="height:3px;">
                            <div class="progress-bar progress-animated  bg-purple" role="progressbar" style="max-width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>                                        
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <div class="icon-info">
                                    <i class="mdi mdi-playlist-check text-success"></i>
                                </div> 
                            </div>
                            <div class="col-8 align-self-center text-center">
                                <div class="ml-2 text-right">
                                    <p class="mb-0 text-muted font-13">Leads</p>
                                    <span class="mt-0 font-20"><strong>{{ $active_leads }}</strong></span>
                                    <span class="badge badge-soft-success mt-1 shadow-none">Active</span>
                                </div>
                            </div>                    
                        </div>
                        <div class="progress mt-2" style="height:3px;">
                            <div class="progress-bar progress-animated  bg-success" role="progressbar" style="max-width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4 col-4 align-self-center">
                                <div class="icon-info">
                                    <i class="mdi mdi-coin text-pink"></i>
                                </div> 
                            </div>
                            <div class="col-sm-8 col-8 align-self-center text-center">
                                <div class="ml-2 text-right">
                                    <p class="mb-1 text-muted font-13">Leads</p>
                                    <span class="mt-0 font-20"><strong>{{ $pending_leads }}</strong></span>
                                    <span class="badge badge-soft-danger mt-1 shadow-none">Pending</span>
                                </div>
                            </div>                    
                        </div>
                        <div class="progress mt-2" style="height:3px;">
                            <div class="progress-bar progress-animated  bg-pink" role="progressbar" style="max-width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>                                        
                </div>
            </div>
        </div>
    </div>
<!-- </div> -->
@endsection
@section('footer_script')
<script type="text/javascript">
$(document).ready(function() {
    var active = "{{ $active_leads }}";
    var pending = "{{ $pending_leads }}";
    var remaining = "{{ $remaining_leads }}";
    var overall = "{{ $total_leads }}";
    var chart = new CanvasJS.Chart("dashboard_piechart", {
        animationEnabled: true,
        title: {
            text: ""
        },
        data: [{
            type: "pie",
            startAngle: 240,
            yValueFormatString: "#00",
            indexLabel: "{label} {y}",
            dataPoints: [
                {y: active, label: "Active"},
                {y: pending, label: "Pending"},
                {y: remaining, label: "Remaining"},
            ]
        }]
    });
    chart.render();

    var Area_chart = Morris.Area({
        element: 'area_chart',
        behaveLikeLine: true,
        parseTime : false,
        data: [{ y: 'Jun 2019', a: 100, b: 90 }, 
            { y: 'Jul 2019', a: 75, b: 65 },
            { y: 'Aug 2019', a: 50, b: 40 },
            { y: 'Sep 2019', a: 75, b: 65 },
            { y: 'Oct 2019', a: 50, b: 40 },
            { y: 'Nov 2019', a: 75, b: 65 },
            { y: 'Dec 2019', a: 100, b: 90 }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Sales', 'Cost'],
        pointFillColors: ['#707F9B'],
        pointStrokeColors: ['#FFAAAB'],
        lineColors: ['#4BA8CE', '#F8D79B', '#39BBAF'],
        redraw: true,
     });



});
</script>
@endsection
