@extends('layouts.app')

@section('content')
<h1 class="text-center" id="popular">{!! __("message.nav_2") !!}</h1>

@if ($existsSubCategory1)
    <div class="album py-5" >
        <h3 class="text-end py-5" id="popular">{!! __("message.foot 12") !!}</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4  mx-2">
                @foreach ($products as $product )
                    @if ($product->sub_category_id == 1)
                        <div class="col">
                            <div class="card text-bg-dark bg-black" data-bs-theme="dark">
                                <img class="card-img-top" src="{{asset('images/'.$product->images) }}" alt="" height="350px">
                                <a href="{{route('show', $product->id)}}" class="nav-link text-light">
                                    <div class="card-body ">
                                        <div class=" d-flex justify-content-between align-items-center">
                                            <h6 class="card-title ">{{$product->categories->gender}}</h6>
                                            <h6 class="card-text">{{$product->sub_categories->type}}</h6>
                                        </div>
                                            <h5 class="card-text ">{{$product->name}}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
        </div>
    </div>
@else
@endif


@if ($existsSubCategory2)
    <div class="album py-5" >
        <h3 class="text-end py-5" id="popular">{!! __("message.foot 15") !!}</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4  mx-2">
                @foreach ($products as $product )
                    @if ($product->sub_category_id == 2)
                        <div class="col">
                            <div class="card text-bg-dark bg-black" data-bs-theme="dark">
                                <img class="card-img-top" src="{{asset('images/'.$product->images) }}" alt="" height="350px">
                                <a href="{{route('show', $product->id)}}" class="nav-link text-light">
                                    <div class="card-body ">
                                        <div class=" d-flex justify-content-between align-items-center">
                                            <h6 class="card-title ">{{$product->categories->gender}}</h6>
                                            <h6 class="card-text">{{$product->sub_categories->type}}</h6>
                                        </div>
                                            <h5 class="card-text ">{{$product->name}}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
        </div>
    </div>
@else
@endif


@if ($existsSubCategory3)
    <div class="album py-5" >
        <h3 class="text-end py-5" id="popular">{!! __("message.foot 16") !!}</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4  mx-2">
                @foreach ($products as $product )
                    @if ($product->sub_category_id == 3)
                        <div class="col">
                            <div class="card text-bg-dark bg-black" data-bs-theme="dark">
                                <img class="card-img-top" src="{{asset('images/'.$product->images) }}" alt="" height="350px">
                                <a href="{{route('show', $product->id)}}" class="nav-link text-light">
                                    <div class="card-body ">
                                        <div class=" d-flex justify-content-between align-items-center">
                                            <h6 class="card-title ">{{$product->categories->gender}}</h6>
                                            <h6 class="card-text">{{$product->sub_categories->type}}</h6>
                                        </div>
                                            <h5 class="card-text ">{{$product->name}}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
        </div>
    </div>
@else
@endif

@endsection

