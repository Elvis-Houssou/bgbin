@extends('layouts.app')

@section('content')
<div class="album py-5" >
    <h1 class="text-center" id="popular">{!! __("message.bandes 1") !!}</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 py-5">
            @foreach ($bands as $band )
                    <div class="col">
                        <div class="card text-bg-dark bg-black text-center" data-bs-theme="dark">
                            <img class="card-img" src="{{asset('images/'.$band->images) }}" alt="" height="300">
                            <div class="card-img-overlay row align-items-center">
                                <div>
                                    <h5 class="card-title display-5 font-weight-bolder">{{$band->title}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
    </div>
</div>

@endsection
