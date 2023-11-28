@extends('layouts.app')

@section('content')
<div class="album py-5" >
    <h1 class="text-center" id="popular">{!! __("message.bandes 1") !!}</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4 py-5 mx-2">
            @foreach ($bands as $band )
                    <div class="col" >
                        <div class="card text-bg-dark bg-black text-center zoom-effect" data-bs-theme="dark">
                           <a href="{{asset('images/'.$band->images) }}" data-lightbox="image-1" data-title="{{$band->title}}" class="text-white">
                                <img class="card-img" src="{{asset('images/'.$band->images) }}" alt="" height="250" id="bandsHover">
                                <div class="card-img-overlay row align-items-center">
                                    <div>
                                        <h5 class="card-title display-6 font-weight-bolder">{{$band->title}}</h5>
                                    </div>
                                </div>
                           </a>
                        </div>
                    </div>
            @endforeach
            <style>
                /* Add this to your CSS file or style section */
                .zoom-effect {
                    transition: transform 0.3s ease-in-out;
                }

                /* Appliquez l'effet uniquement sur le mode ordinateur (écrans d'une largeur minimale de 768 pixels) */
                @media (min-width: 768px) {
                    .zoom-effect:hover {
                        transform: scale(2);
                        z-index: 2;
                    }
                }
            </style>
    </div>
</div>

@endsection
