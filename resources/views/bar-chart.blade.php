@extends('layouts.master')
@extends('layouts.navb')
@section('title','Chart')
@section('headcontent')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js"
    integrity="sha512-SuxO9djzjML6b9w9/I07IWnLnQhgyYVSpHZx0JV97kGBfTIsUYlWflyuW4ypnvhBrslz1yJ3R+S14fdCWmSmSA=="
    crossorigin="anonymous"></script>
@endsection
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    new user growth, 2020
                </div>
                <div class="card-body" >
                    <canvas id="barChart">

                    </canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('modal')

@section('add-cdn')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    $(function(){
var datas = <?php echo json_encode($datas); ?>;
var barCanvas= $("#barChart");
var barChart=new Chart(barCanvas,{
    type:'bar',
    data:{
        labels:['jan','feb','mar','apr','mei','jun','jul','ags','sep','okt','nov','des'],
        datasets:[
            {
                data:datas,
                backgroundColor:['red','orange','yellow','green','blue','indigo','violet','purple','pink','silver','gold','brown']
            }
        ]
    },
    options:{
        scales:{
            yAxes:[{
                ticks:{
                    beginAtZero:true
                }
            }]
        }
    }
})

})
</script>
@endsection
