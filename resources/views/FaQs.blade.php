@extends('layouts.app')

@section('content')

<h1 class="text-center" id="popular">{!! __("message.faqs 1") !!}</h1>
<div class="d-lg-flex flex-row row-cols-1 row-cols-sm-2 row-cols-md-2 g-2 align-items-center justify-content-center text-center mb-2 py-5">
    <div class="col align-items-center text-start">
        @foreach (array_combine($titles, $answers) as $title => $answer)
                <div class="dropbox">
                    <div class="dropbox-text d-flex justify-content-between">
                        <p> {{$title}} </p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                        </svg>
                    </div>
                    <div class="dropbox-menu d-flex justify-content-between">
                        <p class="dropbox-body"> {{$answer}} </p>
                    </div>
                    <div><hr class="divider"></div>
                </div>
        @endforeach
    </div>
</div>

@endsection

<style>
    .dropbox-text {
        cursor: pointer;
    }
    .dropbox-body {
        display: none;
        transition: display 0.5s ease;
    }
    .bi-plus {
        display: initial;
        transition: display;
    }

    .bi-dash {
        display: none;
        transition: display 0.5s ease;
    }

    .dropbox-menu {
        display: none;
        transition: display 0.5s ease;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Cacher la dropbox-menu par défaut
        $(".dropbox-body").hide();
        $(".bi-dash").hide();
        $(".bi-plus").show();




        // Gérer le clic sur le texte de la dropbox
        $(".dropbox-text").click(function () {
            // Cibler uniquement les éléments enfants de la dropbox actuelle
            $(this).parent().find(".dropbox-body").slideToggle(500); // 500ms pour l'animation
            $(this).find(".bi-dash").toggle(); // Basculer entre afficher/masquer
            $(this).find(".bi-plus").toggle();  // 500ms pour l'animation
        });
    });
</script>


