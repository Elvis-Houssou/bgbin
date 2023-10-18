@extends('layouts.app')

@section('content')
<div class="album py-5 bg-black" data-bs-theme="dark">
    <div class="container">
        <div>
            <div class="container">
                <div class="row justify-content-center text-start">
                    <div class="col-lg-4 ">
                        <img class="bd-placeholder-img card-img-top" src="{{asset('images/'.$product->images) }}" alt="" width="200" height="500">

                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div>
                            <h1 class="text-start">{{ $product->categories->gender }}</h1>
                            <p>{{ $product->name }}</p>
                            <br>
                            <div >
                                <label >Taille:</label>
                                <div>
                                    @php
                                        $fill = $product->size;
                                        $new = explode(',', $fill)

                                    @endphp
                                    @foreach ($new as $news)
                                        <div class="radio-buttons form-check-inline col-auto py-3">

                                        <label class="custom-radio">
                                            <input type="checkbox" name="size" value="{{$news}}" />
                                            <a class="btn btn-outline-light check-btn">{{$news}}</a>
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <br>
                            <div class="d-grid gap-2 py-5">
                                <input type="submit" class="btn btn-outline-light" value="Commander">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <br>
                        <br>
                        <h5 >Description : </h5>
                        <small class="text-body-secondary">{{ $product->description }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .custom-radio input {
        display: none;
    }

    .check-btn {
        border-radius: 500px;
        box-shadow: 0 0 20px #c3c3c367;
        cursor: pointer;
    }

    .custom-radio input:checked + .check-btn {
        border: 3px solid #8373e6;
        background-color: white;
        color: black;
    }

    .custom-radio input:checked + .check-btn > i {
        opacity: 1;
        transform: translateX(-50%) scale(1);
    }
</style>

@endsection



{{-- <div class="container">
    <div class="container-fluid">
        <div class="album py-5" data-bs-theme="dark">
            <div class="row g-5 justify-content-between text-center">
                <div class="col-auto">
                    <img class=" card-img-top" src="{{asset('images/'.$product->images) }}" alt="" width="100" height="600">
                </div>
                <div class="col-auto">
                    <div class="text-start">
                        <h1 class="text-start">{{ $product->categories->gender }}</h1>
                        <p>{{ $product->name }}</p>
                        <br>
                        <h2>Taille :</h2>
                        <div>
                            @php
                                $fill = $product->size;
                                $new = explode(',', $fill)

                            @endphp
                            @foreach ($new as $news)
                                <div class="radio-buttons form-check-inline col-auto py-3">

                                <label class="custom-radio">
                                    <input type="checkbox" name="size" value="{{$news}}" />
                                    <a class="btn btn-outline-light check-btn">{{$news}}</a>
                                </label>
                            </div>
                            @endforeach
                        </div>

                        <div class="d-grid gap-2 py-5">
                            <input type="submit" class="btn btn-outline-light" value="Commander">
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-auto py-5">
            <br>
            <h5 >Description : </h5>
            {{-- <p></p> --}}
            {{-- <small class="text-body-secondary">{{ $product->description }}</small>
        </div>
    </div>
</div>

    <style>
        .custom-radio input {
            display: none;
        }

        .check-btn {
            border-radius: 500px;
            box-shadow: 0 0 20px #c3c3c367;
            cursor: pointer;
        }

        .custom-radio input:checked + .check-btn {
            border: 3px solid #8373e6;
            background-color: white;
            color: black;
        }

        .custom-radio input:checked + .check-btn > i {
            opacity: 1;
            transform: translateX(-50%) scale(1);
        }
    </style> --}}
