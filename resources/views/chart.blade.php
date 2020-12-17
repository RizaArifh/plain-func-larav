@extends('layouts.master')
@extends('layouts.navb')
@section('title','Chart')
@section('headcontent')
@endsection
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
<div id="chart-container">

</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo json_encode($datas) ?>
@endsection
@section('modal')

@section('add-cdn')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
var datas = <?php echo json_encode($datas) ?>

Highcharts.chart('chart-container',{
    title:{
        text:'New User Growth 2020'
    },
    subtitle:{
        text:'Source:riza'
    },
    xAxis:{
        categories:['jan','feb','mar','apr','mei','jun','jul','ags','sep','okt','nov','des']
    },
    yAxis:{
        title:{
            text:'number of new user'
        }
    },
    legend:{
        layout:'vertikal',
        align:'right',
        verticalAlign:'middle'
    },
    plotOptions:{
        series:{
            allowPointSelect:true
        }
    },
    series:[{
        name:'new user',
        data:datas
    }],
    responsive:{
        rules:[{
            condition:{
                maxWidth:500
            },
            chartOptions:{
                legend:{
                    layout:'horizontal',
                    align:'center',
                    verticalAlign:'bottom'
                }
            }
        }]
    }
})

</script>
@endsection
