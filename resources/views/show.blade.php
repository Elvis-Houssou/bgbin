@extends('layouts.app')

@section('content')
<div class="album py-5 bg-black" data-bs-theme="dark">
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <div>
            <div class="container">
                <div class="row justify-content-center text-start">
                    {{-- @php
                        if () {
                            <div></div>
                        }
                    @endphp --}}

                    <div class="col-lg-4 ">
                        <img class="bd-placeholder-img card-img-top" src="{{asset('images/'.$product->images) }}" name="images" alt="" width="200" height="500">
                        <input type="file" name="images" value="{{$product->images}}" hidden>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div>
                            <h1 class="text-start">{{ $product->categories->gender }}</h1>
                            <input type="hidden" name="category_id" value="{{ $product->categories->gender }}">
                            <p>{{ $product->name }}</p>
                            <input type="hidden" value="{{ $product->name }}" name="title">

                            <br>
                            <div class="col-lg-10">
                                <h5 >{!! __("message.show 1") !!} </h5>
                                <small class="text-body-secondary">{{ $product->description }}</small>
                                <input type="hidden" value="{{ $product->description }}" name="description">
                            </div>
                            <br>
                            <div class="d-grid gap-2 py-5" >
                                <input type="submit" class="btn btn-outline-light" id="champ-initial" value="{!! __("message.show 2") !!}" onclick="afficherChamps()">
                            </div>

                            <!-- Ajoutez ces champs dans votre formulaire -->
                            <form id="champs-supplementaires1" style="display: none;" action=" {{ route('StandardOrder', ['id' => $product->id]) }} " method="POST" enctype="multipart/form-data">
                            <div id="champs-supplementaires" class="justify-content-between" style="display: none;">
                                <div  class="px-1">
                                    <label for="email">{!! __("message.show 3") !!}</label>
                                    <input type="email" name="email" id="email" required>
                                </div>
                                <div >
                                    <label for="phone">{!! __("message.show 4") !!}</label>
                                    <input type="number" name="phone" id="phone" required>
                                </div>
                            </div>
                                @csrf
                                <div class="d-grid gap-2 py-5" >
                                    <input type="submit" class="btn btn-outline-light" value="{!! __("message.show 5") !!}" onclick="afficherChamps()">
                                </div>
                            </form>

                        </div>
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

    .hidden {
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

<script>
    function afficherChamps() {
        var champsSupplementaires = document.getElementById('champs-supplementaires');
        var champInitial = document.getElementById('champ-initial');
        var champsSupplementaires1 = document.getElementById('champs-supplementaires1');
        champInitial.classList.add('hidden');
        champsSupplementaires.style.display = 'flex';
        champsSupplementaires1.style.display = 'block';
    }
</script>

@endsection
