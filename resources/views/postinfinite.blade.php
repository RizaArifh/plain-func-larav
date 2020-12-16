@extends('layouts.master')
@extends('layouts.navb')
@section('title',' Posts Infinite')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            Post Infinite
        </div>
        <div class="col-md-12" id="post-data">

            @include('data')
        </div>
    </div>
</div>

<div class="ajax-load text-center" style="display: none">
    <p>
        <img src="{{asset('images/loader.gif')}}" alt="">
        Loading More Post
    </p>
</div>



<script>

var page = 1;
$(window).scroll(function(){
    if($(window).scrollTop() + $(window).height() >= $(document).height()){
        page++;
        loadMoreData(page);
    }
})

    function loadMoreData(page){
    $.ajax({
        url:'?page=' + page,
        type:'get',
        beforeSend:function(){
            $(".ajax-load").show();
        }
    })
    .done(function(data){
        if(data.html==" "){
            $(".ajax-load").html('no more record');
            return;
        }
        $(".ajax-load").hide();
        $("#post-data").append(data.html);
    })
    .fail(function(jqXHR,ajaxOptions,thrownError){
        alert("server not responding...");
    })
}


</script>

@endsection