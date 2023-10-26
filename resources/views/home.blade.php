@extends('layouts.app')



@section('main-content')
<div class="jumbotron">

</div>


<div class="container-fluid products_space position-relative">
    <div class="my_btn text-center btn_abs">
        <a href="#">
            <h6>Current series</h6>
        </a>
    </div>
    <div class="content d-flex m-auto">

        <div class="row">
            @foreach($comics as $comic )
            <div class="col-2 single_product">
                <p>
                    {{$comic['title']}}
                </p>
                <img class="img-fluid" src="{{$comic['thumb']}}" alt="">
            </div>
            @endforeach

        </div>

    </div>
    <div class="row justify-content-center">
        <div class="col-2">

            <div class="my_btn text-center">
                <a href="#">
                    <h6>load more</h6>
                </a>
            </div>

        </div>
    </div>

</div>

@endsection