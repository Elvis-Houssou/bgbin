@extends('layouts.app')

@section('content')
    <h1 class="text-center" id="popular">{!! __("message.contact 1") !!}</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-2 align-items-center justify-content-center text-center mb-2 py-5" data-bs-theme="dark">
        <div class="col align-items-center text-start">
            <div class="input-group mb-3">
                <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                    </svg>
                </span>
                <div class="form-floating">
                <input type="email" class="form-control bg-black border border-light" id="floatingInputGroup1" placeholder="Email">
                <label for="floatingInputGroup1">{!! __("message.contact 2") !!}</label>
                </div>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                    </svg>
                </span>
                <div class="form-floating">
                <input type="text" class="form-control bg-black border border-light" id="floatingInputGroup1" placeholder="Nom et Prenom ">
                <label for="floatingInputGroup1">{!! __("message.contact 3") !!} </label>
                </div>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                </span>
                <div class="form-floating">
                <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control bg-black border border-light" id="floatingInputGroup1" placeholder="Numéro de téléphone">
                <label for="floatingInputGroup1">{!! __("message.contact 4") !!}</label>
                </div>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                    </svg>
                </span>
                <div class="form-floating">
                <textarea class="form-control bg-black border border-light" placeholder="Message" id="description" name="description" style="height: 100px"></textarea>
                <label for="floatingInputGroup1">{!! __("message.contact 5") !!}</label>
                </div>
            </div>

            <div class="d-grid gap-2 text-center">
                <input type="submit" class="btn btn-outline-light" value="{!! __("message.contact 6") !!}">
            </div>
        </div>
    </div>
@endsection
