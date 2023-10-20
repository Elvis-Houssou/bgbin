@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-5 text-center" id="popular">{!! __("message.couture 1") !!}</h2>
        <div class="container-fluid" data-bs-theme="dark">
                <form action=" {{route('saveOrder')}} " method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="mb-3 d-lg-flex flex-row g-3 align-items-center justify-content-between">
                        <div class="col-auto">
                          <label for="inputPassword6" class="col-form-label">{!! __("message.couture 2") !!}</label>
                        </div>
                        <div class="col-auto">
                            <select class="form-select form-select-lg" name="category_id" aria-label="Large select example">
                                <option value="" selected disabled>{!! __("message.couture 3") !!}</option>
                                @foreach ($categories as $categorie)
                                    <option value="{{$categorie->id}}">{{$categorie->gender}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="mb-3 d-lg-flex flex-row g-3 align-items-center justify-content-between">
                        <div class="col-auto">
                          <label for="inputPassword6" class="col-form-label">{!! __("message.couture 4") !!}</label>
                        </div>
                        <div class="col-auto">
                            <select class="form-select form-select-lg" id="categorieSelect" name="sub_category_id" aria-label="Large select example">
                                <option value="" selected disabled>{!! __("message.couture 3") !!}</option>
                                @foreach ($subCategories as $subCategorie)
                                    <option value=" {{$subCategorie->id}} ">{{$subCategorie->type}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-5 d-lg-flex flex-row g-3 align-items-center justify-content-between">
                        <div class="col-auto">
                          <label for="inputPassword6" class="col-form-label" >{!! __("message.couture 5") !!}</label>
                        </div>
                        <div class="col-auto">
                            <div class="">
                                <input class="form-control" type="file" id="formFile" name="images" accept="image/png, image/jpeg">
                              </div>
                        </div>
                    </div>

                <h2 class="mb-5 text-center" id="popular">{!! __("message.couture 6") !!}</h2>

                    <div class="mb-3 d-lg-flex flex-row g-3 align-items-center justify-content-between">
                        <div class="col-auto">
                        <label for="inputPassword6" id="textVal" class="col-form-label">{!! __("message.couture 7") !!}</label>
                        </div>
                        <div class="col-auto">
                        <input type="text" id="inputText" name="mesure[]" class="form-control" aria-describedby="textHelpInline">
                        </div>
                    </div>

                    <div class="mb-3 d-lg-flex flex-row g-3 align-items-center justify-content-between">
                        <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">{!! __("message.couture 8") !!}</label>
                        </div>
                        <div class="col-auto">
                        <input type="text" id="inputText" name="mesure[]" class="form-control" aria-describedby="textHelpInline">
                        </div>
                    </div>

                    <div class="mb-3 d-lg-flex flex-row g-3 align-items-center justify-content-between">
                        <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">{!! __("message.couture 9") !!}</label>
                        </div>
                        <div class="col-auto">
                        <input type="text" id="inputText" name="mesure[]" class="form-control" aria-describedby="textHelpInline">
                        </div>
                    </div>

                    <div class="mb-3 d-lg-flex flex-row g-3 align-items-center justify-content-between">
                        <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">{!! __("message.couture 10") !!}</label>
                        </div>
                        <div class="col-auto">
                        <input type="text" id="inputText" name="mesure[]" class="form-control" aria-describedby="textHelpInline">
                        </div>
                    </div>

                    <div class="mb-3 d-lg-flex flex-row g-3 align-items-center justify-content-between">
                        <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">{!! __("message.couture 11") !!}</label>
                        </div>
                        <div class="col-auto">
                        <input type="text" id="inputText" name="mesure[]" class="form-control" aria-describedby="textHelpInline">
                        </div>
                    </div>

                    <div class="mb-3 d-lg-flex flex-row g-3 align-items-center justify-content-between">
                        <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">{!! __("message.couture 12") !!}</label>
                        </div>
                        <div class="col-auto">
                        <input type="text" id="inputText" name="mesure[]" class="form-control" aria-describedby="textHelpInline">
                        </div>
                    </div>

                    {{-- bas --}}

                    <div class="mb-3 d-lg-flex flex-row g-3 align-items-center justify-content-between" id="pantsForm">
                        <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">{!! __("message.couture 13") !!}</label>
                        </div>
                        <div class="col-auto">
                        <input type="text" id="inputText" name="mesure[]" class="form-control" aria-describedby="textHelpInline">
                        </div>
                    </div>

                    <div class="mb-3 d-lg-flex flex-row g-3 align-items-center justify-content-between">
                        <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">{!! __("message.couture 14") !!}</label>
                        </div>
                        <div class="col-auto">
                        <input type="text" id="inputText" name="mesure[]" class="form-control" aria-describedby="textHelpInline">
                        </div>
                    </div>

                    <div class="mb-3 d-lg-flex flex-row g-3 align-items-center justify-content-between">
                        <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">{!! __("message.couture 15") !!}</label>
                        </div>
                        <div class="col-auto">
                        <input type="text" id="inputText" name="mesure[]" class="form-control" aria-describedby="textHelpInline">
                        </div>
                    </div>

                    <div class="mb-3 d-lg-flex flex-row g-3 align-items-center justify-content-between">
                        <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">{!! __("message.couture 16") !!}</label>
                        </div>
                        <div class="col-auto">
                        <input type="text" id="inputText" name="mesure[]" class="form-control" aria-describedby="textHelpInline">
                        </div>
                    </div>

                    <div class="mb-3 d-lg-flex flex-row g-3 align-items-center justify-content-between">
                        <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">{!! __("message.couture 17") !!}</label>
                        </div>
                        <div class="col-auto">
                        <input type="text" id="inputText" name="mesure[]" class="form-control" aria-describedby="textHelpInline">
                        </div>
                    </div>

                    <div class="mb-3 d-lg-flex flex-row g-3 align-items-center justify-content-between">
                        <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">{!! __("message.couture 18") !!}</label>
                        </div>
                        <div class="col-auto">
                        <input type="text" id="inputText" name="mesure[]" class="form-control" aria-describedby="textHelpInline">
                        </div>
                    </div>

                    <h2 class="text-center mt-5" id="popular">{!! __("message.couture 19") !!}</h2>
                    <br>
                    <div class="d-flex align-items-center overflow-x-scroll">
                        @foreach ($bands as $band )
                            <div class="radio-buttons form-check-inline col-auto">
                                <label class="custom-radio">
                                    <input type="radio" name="band_id" value="{{$band->id}}" />
                                    <span class="radio-btn">
                                        <div class="hobbies-icon">
                                            <img src="{{asset('images/'.$band->images) }}" class="rounded" alt="" width="100" height="100">
                                        </div>
                                    </span>
                                </label>
                            </div>

                            {{-- <img src="{{asset('images/'.$band->images) }}" class="rounded" alt="" style="margin: auto 2% " width="100" height="100"> --}}

                        @endforeach
                    </div>

                        <br><br>
                    <div class="mb-3 g-5 align-items-center justify-content-center text-center">
                        <h4 class="text-center" id="popular">{!! __("message.couture 20") !!}</h4>
                         <br>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="doublure" id="inlineRadio1" value="Satinée">
                            <label class="form-check-label" for="inlineRadio1">{!! __("message.couture 21") !!}</label>
                        </div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="doublure" id="inlineRadio2" value="Coton">
                            <label class="form-check-label" for="inlineRadio2">{!! __("message.couture 22") !!}</label>
                        </div>
                    </div>
                    <br><br>


                    <h2 class="text-center " id="popular">{!! __("message.couture 23") !!}</h2>
                    <div class="mb-3 form-floating">
                        <textarea class="form-control" placeholder="Description input" id="description" name="description" style="height: 150px"></textarea>
                        <label for="floatingTextarea">{!! __("message.couture 24") !!}</label>
                        @if ($errors->has('description'))
                            <span class="text-danger"> {{$errors->first('description')}} </span>
                        @endif
                    </div>




                    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                    <div class="align-items-center justify-content-center text-center">
                        <input type="submit" class="btn btn-outline-light" value="{!! __("message.contact 6") !!}">
                    </div>
                </form>
        </div>
    </div>
@endsection


<style>
    .custom-radio input {
        display: none;
    }

    .radio-btn {
        margin: 10px;
        border: 3px solid transparent;
        display: flex;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 0 20px #c3c3c367;
        cursor: pointer;
    }

    .custom-radio input:checked + .radio-btn {
        border: 3px solid #8373e6;
    }

    .custom-radio input:checked + .radio-btn > i {
        opacity: 1;
        transform: translateX(-50%) scale(1);
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Mettre à jour le texte de l'étiquette initial
        updateLabel();

        // Mettre à jour le texte de l'étiquette lorsqu'une nouvelle catégorie est sélectionnée
        $("#categorieSelect").change(updateLabel);
        // $("#pantsForm").show();


        // Mettre à jour le champ de mesure initial
        $("#textVal").text(categorieSelectionnee);

        function updateLabel() {
            var nouvelleCategorie = $("#categorieSelect option:selected").text();
            if (nouvelleCategorie === "Sélectionnez une catégorie") {
                $("#textVal").text("Longueur du haut :");
                $("#pantsForm").show();
            } else if (nouvelleCategorie === "pantalon") {
                $("#textVal").text(`Longueur ${nouvelleCategorie}`);
                $("#pantsForm").hide();
            } else {
                $("#textVal").text(`Longueur ${nouvelleCategorie}`);
                $("#pantsForm").show();
            }
        }
    });
</script>

