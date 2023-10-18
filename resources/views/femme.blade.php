@extends('layouts.app')

@section('content')
<div class="album py-5" >
    <h1 class="text-center" id="popular">{!! __("message.nav_3") !!}</h1>
    <h3 class="text-end py-5" id="popular">{!! __("message.foot 12") !!}</h3>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            @foreach ($products as $product )
                @if ($product->sub_category_id == 6)
                    <div class="col">
                        <div class="card text-bg-dark bg-black" data-bs-theme="dark">
                            <img class="card-img-top" src="{{asset('images/'.$product->images) }}" alt="" height="250px">
                            <a href="{{route('show', $product->id)}}" class="nav-link text-light">
                                <div class="card-body ">
                                    <h5 class="card-title ">{{$product->categories->gender}}</h5>
                                    <div class=" d-flex justify-content-between align-items-center">
                                        <h3 class="card-text"> {{$product->sub_categories->type}} </h3>
                                        <h5 class="card-text ">{{$product->name}}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach
    </div>
</div>


<div class="album py-5" >
    <h3 class="py-5" id="popular">{!! __("message.foot 11") !!}</h3>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            @foreach ($products as $product )
                @if ($product->sub_category_id == 4)
                    <div class="col">
                        <div class="card text-bg-dark bg-black" data-bs-theme="dark">
                            <img class="card-img-top" src="{{asset('images/'.$product->images) }}" alt="" height="250px">
                            <a href="{{route('show', $product->id)}}" class="nav-link text-light">
                                <div class="card-body ">
                                    <h5 class="card-title ">{{$product->categories->gender}}</h5>
                                    <div class=" d-flex justify-content-between align-items-center">
                                        <h3 class="card-text"> {{$product->sub_categories->type}} </h3>
                                        <h5 class="card-text ">{{$product->name}}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach
    </div>
</div>

<div class="album py-5" >
    <h3 class="text-end py-5" id="popular">{!! __("message.foot 13") !!}</h3>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            @foreach ($products as $product )
                @if ($product->sub_category_id == 5)
                    <div class="col">
                        <div class="card text-bg-dark bg-black" data-bs-theme="dark">
                            <img class="card-img-top" src="{{asset('images/'.$product->images) }}" alt="" height="250px">
                            <a href="{{route('show', $product->id)}}" class="nav-link text-light">
                                <div class="card-body ">
                                    <h5 class="card-title ">{{$product->categories->gender}}</h5>
                                    <div class=" d-flex justify-content-between align-items-center">
                                        <h3 class="card-text"> {{$product->sub_categories->type}} </h3>
                                        <h5 class="card-text ">{{$product->name}}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach
    </div>
</div>

@endsection

