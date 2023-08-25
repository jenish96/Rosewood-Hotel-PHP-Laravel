@extends('admin.master.masterpage')

@section('title')
{{Session::get('name')}}- Reports
@endsection

@section('css')
    
@endsection

@section('main')
<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Reports</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="#">Reports</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">View Report</li>
            </ol>
        </div>
    </div>
    <!-- start chart -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-lightblue">
                <div class="card-head">
                    <header>BOOKING CHART</header>
                    <a href="/admin/viewHotel"> <button type="button"
                        class="btn btn-round btn-primary float-right m-2">Back</button></a> 
                </div>
                <div class="card-body " id="chartjs_bar_parent">
                    <div class="row">
                        <canvas id="chartjs_bar"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <!--Chart JS-->
	<script src="{{ URL::to('/')}}/assets/plugins/chart-js/Chart.bundle.js"></script>
	<script src="{{ URL::to('/')}}/assets/plugins/chart-js/utils.js"></script>
	<script>
	
        $(document).ready(function() {
            var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            var config = {
                type: 'line',
                data: {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [{
                        label: "New Students",
                        backgroundColor: window.chartColors.red,
                        borderColor: window.chartColors.red,
                        data: [
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor()
                        ],
                        fill: false,
                    }, {
                        label: "Old Students",
                        fill: false,
                        backgroundColor: window.chartColors.blue,
                        borderColor: window.chartColors.blue,
                        data: [
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor()
                        ],
                    }]
                },
                options: {
                    responsive: true,
                    title:{
                        display:true,
                        text:'Chart Survey'
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Month'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Students'
                            }
                        }]
                    }
                }
            };
            var ctx = document.getElementById("chartjs_line").getContext("2d");
            window.myLine = new Chart(ctx, config);
            });
                
              
        $(document).ready(function() {
            var randomScalingFactor = function() {
                return Math.round(Math.random() * 100);
            };
        
            var config = {
                type: 'pie',
            data: {
                datasets: [{
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                    ],
                    backgroundColor: [
                        window.chartColors.red,
                        window.chartColors.orange,
                        window.chartColors.yellow,
                        window.chartColors.green,
                        window.chartColors.blue,
                    ],
                    label: 'Dataset 1'
                }],
                labels: [
                    "Red",
                    "Orange",
                    "Yellow",
                    "Green",
                    "Blue"
                ]
            },
            options: {
                responsive: true
            }
        };
        
            var ctx = document.getElementById("chartjs_pie").getContext("2d");
            window.myPie = new Chart(ctx, config);
        }); 
        
        $(document).ready(function() {
             var color = Chart.helpers.color;
             var barChartData = {
                 labels: [
                    @foreach($data as $row) 
                    "{{ $row['month'] }}",
                    @endforeach
                ],
                 datasets: [{
                     label: 'New Students',
                     backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                     borderColor: window.chartColors.red,
                     borderWidth: 1,
                     data: [
                        @foreach($data as $row) 
                    {{ $row['totalcount'] }},
                    @endforeach
                     ]
                 },]
        
             };
        
                 var ctx = document.getElementById("chartjs_bar").getContext("2d");
                 window.myBar = new Chart(ctx, {
                     type: 'bar',
                     data: barChartData,
                     options: {
                         responsive: true,
                         legend: {
                             position: 'top',
                         },
                         title: {
                             display: true,
                             text: 'Bar Chart'
                         }
                     }
                 });
        
            });
        
        </script>
@endsection