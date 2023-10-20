@extends('layouts.app')

@section('content')
<div>
    <div class="card text-bg-dark text-center border border-black">
        <img src="{{url('images/image 1.jpg')}}" class="card-img " alt="...">
        <div class="card-img-overlay row align-items-center">
            <div>
                <h5 class="card-title display-1 font-weight-bolder">{!! __("message.about 1") !!}</h5>
            </div>
        </div>
    </div>

    <div class="album py-5" >
        <div class="d-lg-flex flex-row  row-cols-1 row-cols-sm-2 row-cols-md-2 g-2 align-items-center">
            <div class="col">
                <h1 id="popular">
                    {!! __("message.about 2") !!}
                </h1>
                <p>{!! __("message.about 3") !!}</p>
            </div>
            <div class="col">
                <img src="{{url('images/IMG_174655.jpg')}}" class="card-img " alt="...">
            </div>
        </div>
    </div>
</div>

@endsection

