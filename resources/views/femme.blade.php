@extends('layouts.app')

@section('content')
<h1 class="text-center" id="popular">{!! __("message.nav_3") !!}</h1>

@if ($existsSubCategory6)
    <div class="album py-5" >
        <h3 class="text-end py-5" id="popular">{!! __("message.foot 12") !!}</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4  mx-2">
                @foreach ($products as $product )
                    @if ($product->sub_category_id == 6)
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

@if ($existsSubCategory4)
    <div class="album py-5" >
        <h3 class="text-end py-5" id="popular">{!! __("message.foot 11") !!}</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4  mx-2">
                @foreach ($products as $product )
                    @if ($product->sub_category_id == 4)
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

@if ($existsSubCategory5)
    <div class="album py-5" >
        <h3 class="text-end py-5" id="popular">{!! __("message.foot 13") !!}</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4  mx-2">
                @foreach ($products as $product )
                    @if ($product->sub_category_id == 5)
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

@if ($existsSubCategory7)
    <div class="album py-5" >
        <h3 class="text-end py-5" id="popular">{!! __("message.best") !!}</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4  mx-2">
                @foreach ($products as $product )
                    @if ($product->sub_category_id == 7)
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

