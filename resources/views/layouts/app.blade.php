<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('BGBIN', 'BGBIN') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/colonna-mt" rel="stylesheet">
    <link href="{{asset('css/lightbox.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('favicon.ico')}}">



    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-black text-white">
    <div id="app">
        <nav class="navbar sticky-top navbar-expand-lg bg-black" data-bs-theme="dark" style="z-index:1000;">
            <div class="container container-fluid">

                <img class="navbar-brand order-1" src="{{url('images/FB_IMG_1694522074823.png')}}" alt="" width="70">

                <div class="collapse navbar-collapse order-lg-1 order-3" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fs-4 {{ request()->is('/') ? 'active' : ''}}" id="nav-link" aria-current="page" href="{{route('mostRecent')}}">{{__("message.title")}}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fs-4" id="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{__("message.nav_1")}}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item fs-5" href="{{route('homme')}}">{{__("message.nav_2")}}</a></li>
                                <li><a class="dropdown-item fs-5" href="{{route('femme')}}">{{__("message.nav_3")}}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4 {{ request()->is('bandes') ? 'active' : ''}}" id="nav-link" href="{{route('bandes')}}">{{__("message.nav_4")}}</a>
                        </li>
                    </ul>
                </div>

                <a class="navbar-brand order-1" href="#">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                width="50pt" height="35pt" viewBox="0 0 502.000000 358.000000"
                                preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,358.000000) scale(0.100000,-0.100000)"
                                    fill="#FFFFFF" stroke="none">
                                    <path d="M935 3544 c-194 -38 -321 -165 -375 -375 -37 -140 -20 -323 39 -444
                                    33 -66 79 -117 159 -178 28 -22 52 -45 52 -52 0 -7 -17 -24 -37 -38 -63 -43
                                    -150 -139 -176 -192 -45 -91 -60 -181 -54 -317 6 -137 26 -212 83 -308 66
                                    -111 180 -202 303 -242 62 -20 97 -22 526 -30 504 -9 1039 -7 1051 4 9 9 -153
                                    330 -183 364 l-22 24 -563 0 c-312 0 -589 4 -622 10 -107 17 -178 93 -197 211
                                    -19 116 20 223 99 269 78 47 118 50 584 50 240 0 439 4 442 8 8 13 -151 325
                                    -171 336 -11 7 -160 13 -403 16 -425 6 -424 6 -487 72 -45 47 -63 96 -63 175
                                    0 119 30 184 110 238 l45 30 404 3 c376 3 405 2 423 -15 17 -14 108 -190 108
                                    -207 0 -2 20 -46 43 -98 24 -51 57 -122 73 -158 43 -99 58 -124 85 -137 17 -9
                                    81 -12 229 -10 232 2 229 1 191 80 -12 24 -21 46 -21 50 0 4 -36 81 -80 172
                                    -44 91 -80 167 -80 169 0 3 -25 58 -56 123 -30 65 -69 150 -85 188 -55 130
                                    -102 209 -129 216 -14 4 -284 7 -600 7 -450 0 -590 -3 -645 -14z"/>
                                    <path d="M2475 3546 c-18 -13 -16 -18 30 -112 26 -55 65 -136 86 -181 21 -46
                                    39 -84 41 -85 2 -1 278 -5 613 -8 548 -4 613 -7 641 -22 45 -25 99 -82 114
                                    -120 6 -18 16 -42 20 -54 6 -14 21 -23 47 -27 60 -10 269 -8 297 3 25 9 26 12
                                    20 67 -23 214 -98 354 -237 444 -158 102 -219 109 -1018 109 -522 0 -639 -2
                                    -654 -14z"/>
                                    <path d="M2903 2653 c-20 -7 -16 -22 28 -113 23 -47 52 -110 66 -140 13 -30
                                    34 -65 45 -77 l21 -23 461 0 c273 0 467 -4 476 -10 12 -8 15 -40 15 -187 0
                                    -155 -2 -183 -19 -213 -24 -46 -54 -78 -91 -98 -73 -38 -121 -42 -486 -42
                                    l-356 0 -20 23 c-21 24 -73 114 -73 128 0 4 -27 65 -60 134 -33 69 -60 128
                                    -60 131 0 19 -87 178 -104 190 -16 11 -65 14 -238 14 -142 0 -218 -4 -218 -10
                                    0 -6 18 -49 40 -96 22 -47 40 -88 40 -90 0 -3 18 -43 40 -90 22 -47 40 -87 40
                                    -89 0 -2 18 -42 40 -89 22 -47 40 -88 40 -90 0 -3 27 -62 60 -131 33 -69 60
                                    -128 60 -131 0 -2 18 -42 39 -89 30 -64 46 -86 64 -90 13 -4 291 -5 618 -3
                                    526 4 601 6 653 21 175 51 290 174 343 368 16 57 18 110 17 467 0 302 -4 406
                                    -13 415 -9 9 -183 12 -734 14 -397 1 -728 -1 -734 -4z"/>
                                    <path d="M1444 1150 c-82 -26 -171 -86 -225 -151 -96 -117 -131 -220 -131
                                    -399 0 -112 3 -134 29 -210 62 -183 168 -288 345 -341 58 -18 87 -20 186 -17
                                    128 5 189 21 259 69 23 16 44 29 47 29 3 0 10 -18 16 -40 l11 -41 67 3 67 3 3
                                    265 c1 146 0 275 -3 288 l-5 22 -218 -2 -217 -3 -3 -77 -3 -78 68 0 c37 0 98
                                    -3 136 -7 l67 -6 0 -73 c0 -72 0 -73 -37 -102 -87 -68 -184 -97 -301 -90 -135
                                    8 -227 68 -284 187 -31 63 -33 73 -36 201 -3 118 -1 143 18 200 39 117 103
                                    182 209 214 71 21 180 20 250 -1 72 -23 137 -85 146 -140 11 -64 9 -63 85 -63
                                    116 0 127 15 88 117 -16 43 -38 75 -87 124 -103 103 -201 139 -375 138 -81 0
                                    -128 -5 -172 -19z"/>
                                    <path d="M22 1115 c-9 -19 -12 -157 -11 -528 1 -276 4 -513 8 -527 l7 -25 244
                                    -3 c268 -3 357 8 435 54 115 67 171 193 146 329 -13 72 -45 122 -109 173 l-49
                                    38 43 48 c49 54 64 95 64 182 0 115 -62 197 -192 252 -62 26 -68 26 -319 30
                                    l-255 4 -12 -27z m534 -166 c53 -27 68 -60 62 -134 -8 -99 -40 -114 -265 -122
                                    l-153 -6 0 142 0 141 156 0 c140 0 161 -2 200 -21z m-18 -433 c71 -19 101 -40
                                    119 -84 19 -47 13 -124 -14 -160 -44 -59 -72 -67 -265 -70 l-178 -4 0 129 c0
                                    70 -3 145 -6 166 l-7 37 149 0 c96 0 168 -5 202 -14z"/>
                                    <path d="M2422 1115 c-9 -19 -12 -157 -11 -528 1 -276 4 -513 8 -527 l7 -25
                                    249 -3 c272 -3 348 7 430 54 116 67 174 201 146 335 -15 68 -47 118 -109 167
                                    l-49 38 43 48 c49 54 64 95 64 182 0 115 -62 197 -192 252 -62 26 -68 26 -319
                                    30 l-255 4 -12 -27z m522 -159 c18 -7 43 -26 55 -42 20 -25 22 -38 19 -91 -3
                                    -42 -10 -68 -23 -83 -32 -35 -106 -50 -257 -50 l-138 0 0 140 0 140 155 0
                                    c110 0 165 -4 189 -14z m20 -446 c57 -17 93 -57 101 -114 14 -92 -29 -162
                                    -113 -186 -20 -5 -108 -10 -194 -10 l-158 0 0 158 c0 87 3 162 8 167 10 11
                                    309 -2 356 -15z"/>
                                    <path d="M4148 1118 l-28 -10 0 -537 c0 -404 3 -540 12 -549 14 -14 126 -16
                                    146 -3 11 6 13 78 13 352 0 189 3 362 7 384 l8 40 260 -390 260 -390 73 -3
                                    c45 -2 78 2 87 9 12 10 14 99 14 550 l0 539 -27 11 c-31 12 -119 7 -133 -7 -6
                                    -6 -10 -170 -10 -381 -1 -205 -5 -375 -10 -378 -4 -3 -123 167 -263 378 -187
                                    283 -261 386 -278 390 -34 10 -100 7 -131 -5z"/>
                                    <path d="M3567 1114 c-4 -4 -7 -249 -7 -544 0 -403 3 -539 12 -548 16 -16 140
                                    -16 156 0 9 9 12 135 11 508 0 272 -4 515 -7 540 l-7 45 -75 3 c-42 1 -79 0
                                    -83 -4z"/>
                                </g>
                            </svg>
                </a>
                <button class="navbar-toggler order-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-lg-3 order-4" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link fs-4 {{ request()->is('haute-couture') ? 'active' : ''}}" id="nav-link" aria-current="page" href="{{route('order')}}">{!! __("message.couture 1") !!}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4 {{ request()->is('contact') ? 'active' : ''}}" id="nav-link" href="{{route('contact')}}">{{__("message.nav_6")}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4 {{ request()->is('a-propos') ? 'active' : ''}}" href="{{route('about')}}">{{__("message.nav_7")}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4 {{ request()->is('FaQs') ? 'active' : ''}}" id="nav-link" href="{{route('FaQs')}}">{{__("message.nav_8")}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- {{_("message.title")}} --}}

        <main class="py-4">
            <div class="container">
                <div style="position: fixed; right:0px; top:90px; z-index:2000;" data-bs-theme="dark">
                    <select name="" id="" onchange="changeLanguage(this.value)" class="form-select" id="trans">
                        <option {{session()->has('lang_code') ? (session()->get('lang_code') == 'en' ? 'selected' : '') : ''}} value="en">Anglais</option>
                        <option {{session()->has('lang_code') ? (session()->get('lang_code') == 'fr' ? 'selected' : '') : ''}} value="fr">français</option>
                        <option {{session()->has('lang_code') ? (session()->get('lang_code') == 'de' ? 'selected' : '') : ''}} value="de">Allemand</option>
                    </select>
                </div>
                @yield('content')
            </div>
        </main>

        <div class="container">
            <footer class="py-5">
                <div class="row">

                    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 ">

                        <div class="mx-auto p-2 bg-black text-center" data-bs-theme="dark">
                            <div class="foot_img">
                                <img src=" {{url('images/glob white.png')}} " alt="...">
                            </div>
                            <div class="py-4 my-4">
                              <h5 >{{__("message.info 1")}}</h5>
                              <p >{!! __("message.info 2") !!}</p>
                            </div>
                        </div>
                        <div class="mx-auto p-2 bg-black text-center" data-bs-theme="dark">
                            <div class="foot_img">
                                <img src="{{url('images/mannequin white.png')}}" alt="...">
                            </div>
                            <div class="py-4 my-4">
                              <h5 >{!! __("message.info 3") !!}</h5>
                              <p >{!! __("message.info 4") !!}</p>
                            </div>
                        </div>
                        <div class="mx-auto p-2 bg-black text-center" data-bs-theme="dark">
                            <div class="foot_img">
                                <img src="{{url('images/etiquette white.png')}}" alt="...">
                            </div>
                            <div class="py-4 my-4">
                              <h5 >{!! __("message.info 5") !!}</h5>
                              <p >{!! __("message.info 6") !!}</p>
                            </div>
                        </div>
                        <div class="mx-auto p-2 bg-black text-center" data-bs-theme="dark">
                            <div class="foot_img">
                                <img src="{{url('images/lock white.png')}}" alt="...">
                            </div>
                            <div class="py-4 my-4">
                              <h5 >{!! __("message.info 7") !!}</h5>
                              <p >{!! __("message.info 8") !!}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>{!! __("message.foot 1") !!}</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="{{route('legales')}}" class="nav-link p-0 text-dark-emphasis">{!! __("message.foot 2") !!}</a></li>
                            <li class="nav-item mb-2"><a href="{{route('cgv')}}" class="nav-link p-0 text-dark-emphasis">{!! __("message.foot 3") !!}</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>{!! __("message.foot 4") !!}</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="{{route('mostRecent')}}" class="nav-link p-0 text-dark-emphasis">{!! __("message.foot 5") !!}</a></li>
                            <li class="nav-item mb-2"><a href="{{route('about')}}" class="nav-link p-0 text-dark-emphasis">{!! __("message.foot 7") !!}</a></li>
                            <li class="nav-item mb-2"><a href="{{route('contact')}}" class="nav-link p-0 text-dark-emphasis">{!! __("message.foot 8") !!}</a></li>
                            <li class="nav-item mb-2"><a href="{{route('FaQs')}}" class="nav-link p-0 text-dark-emphasis">{!! __("message.foot 9") !!}</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>{!! __("message.foot 10") !!}</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="{{route('femme')}}" class="nav-link p-0 text-dark-emphasis">{!! __("message.foot 11") !!}</a></li>
                            <li class="nav-item mb-2"><a href="{{route('femme')}}" class="nav-link p-0 text-dark-emphasis">{!! __("message.foot 12") !!}</a></li>
                            <li class="nav-item mb-2"><a href="{{route('femme')}}" class="nav-link p-0 text-dark-emphasis">{!! __("message.foot 13") !!}</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>{!! __("message.foot 14") !!}</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="{{route('homme')}}" class="nav-link p-0 text-dark-emphasis">{!! __("message.foot 12") !!}</a></li>
                            <li class="nav-item mb-2"><a href="{{route('homme')}}" class="nav-link p-0 text-dark-emphasis">{!! __("message.foot 15") !!}</a></li>
                            <li class="nav-item mb-2"><a href="{{route('homme')}}" class="nav-link p-0 text-dark-emphasis">{!! __("message.foot 16") !!}</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>{!! __("message.foot 17") !!}</h5>
                        <ul class="nav d-flex justify-content-between">
                            <li class="nav-item mb-2">
                                <a href="https://x.com/BGBIN2?t=20mp6WHa6bJlW7a6ujhiNw&s=09" class="nav-link p-0 text-dark-emphasis">
                                    <button type="button" class="btn btn-light btn-circle btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                        </svg>
                                    </button>
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="https://www.facebook.com/bgbincreationmode?mibextid=2JQ9oc" class="nav-link p-0 text-dark-emphasis">
                                    <button type="button" class="btn btn-light btn-circle btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                        </svg>
                                    </button>
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="https://instagram.com/bgbin?igshid=OGQ5ZDc2ODk2ZA==" class="nav-link p-0 text-dark-emphasis">
                                    <button type="button" class="btn btn-light btn-circle btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                        </svg>
                                    </button>
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="https://www.tiktok.com/@bgbin22?_t=8gc7B30sXDh&_r=1" class="nav-link p-0 text-dark-emphasis">
                                    <button type="button" class="btn btn-light btn-circle btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                                        </svg>
                                    </button>
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="https://pin.it/4yucpvj" class="nav-link p-0 text-dark-emphasis">
                                    <button type="button" class="btn btn-light btn-circle btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pinterest" viewBox="0 0 16 16">
                                            <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
                                        </svg>
                                    </button>
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="https://youtube.com/@bgbin7463?si=2ovWmDTjG5p6vx2P" class="nav-link p-0 text-dark-emphasis">
                                    <button type="button" class="btn btn-light btn-circle btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                                        </svg>
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p>&copy; 2023 Company, Inc. All rights reserved.</p>
                    <p>Powered by BGBIN</p>
                </div>
            </footer>
          </div>
    </div>

    <script src="{{asset('js/lightbox-plus-jquery.js')}}"></script>
</body>
</html>




<style>
    @import url('https://fonts.cdnfonts.com/css/colonna-mt');
    @import url('https://db.onlinewebfonts.com/c/8e1f2a0617863e3914ef2ccdab13480c?family=Mt+Centaur');

    nav {
        font-family: 'Colonna MT', sans-serif;
    }
    .card{
        font-family: 'Colonna MT', sans-serif;
    }

    .card .btn{
        font-family: 'Mt Centaur';
    }

    .foot_img {
        width: 8rem;
        height: 8rem;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        margin: 0 auto;
        box-shadow: 0px 0px 20px rgb(255, 252, 252);
    }

    #popular {
        font-family: 'Colonna MT', sans-serif;
    }

    .foot_img img {
        width: 50%;
    }

    #nav-link {
        transition: all 0.2s;
        position: relative;
    }

    .nav-link {
        color: gray;
    }

    #nav-link:hover {
        color: white;
    }
    .active{
        color: white;
    }

    #nav-link::after {
        content: '';
        opacity: 0;
        transition: all 0.2s;
        height: 2px;
        width: 100%;
        position: absolute;
        background-color: white;
        bottom: 0;
        left: 0;
    }

    #nav-link:hover::after {
        opacity: 1;
    }

    .btn-circle.btn-sm {
            width: 30px;
            height: 30px;
            padding: 6px 0px;
            border-radius: 15px;
            font-size: 8px;
            text-align: center;
        }
        .btn-circle.btn-md {
            width: 50px;
            height: 50px;
            padding: 7px 10px;
            border-radius: 25px;
            font-size: 10px;
            text-align: center;
        }
        .btn-circle.btn-xl {
            width: 70px;
            height: 70px;
            padding: 10px 16px;
            border-radius: 35px;
            font-size: 12px;
            text-align: center;
        }

        img {
            object-fit: cover;
        }
</style>

<script>
    function changeLanguage(lang) {
        window.location = '{{ url("change-language") }}/'+lang;
    }
</script>
