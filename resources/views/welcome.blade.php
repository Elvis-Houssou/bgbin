@extends('layouts.app')

@section('content')
    <div id="carouselExampleRide" class="carousel slide carousel-fade" data-bs-ride="true">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/image 1.jpg" class="d-block w-100" alt="..." >
        </div>
        <div class="carousel-item">
            <img src="images/image 2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{url('images/image 3.jpg')}}" class="d-block w-100" alt="...">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
        <audio autoplay>
            <source src="images/Dlala_Regal_Ft_Scotts_Maphuma_-_Umshini_Song_.mp3"><source/>
        </audio>
    </div>

    <div class="card text-bg-dark text-end">
        <img src="images/HW7B0983.png" class="card-img opacity-50" alt="...">
        <div class="card-img-overlay row align-items-center">
            <div id="masthead">
                <h1 class="card-text display-4">{!! __("message.nav_2") !!}</h1>
                <a class="btn btn-outline-light" href="{{route('homme')}}" id="mast">{!! __("message.home 1") !!}</a>
            </div>
        </div>
    </div>

    <div class="card text-bg-dark text-start">
        <img src="images/IMG_0643.jpg" class="card-img opacity-50" alt="...">
        <div class="card-img-overlay row align-items-center">
            <div id="masthead">
                <h5 class="card-text display-4 font-weight-bolder">{!! __("message.nav_3") !!}</h5>
                <a href="{{route('femme')}}" class="btn btn-outline-light" id="mast">{!! __("message.home 1") !!}</a>
            </div>
        </div>
    </div>

    <style>

        #masthead {
            margin-top: -10px;
        }
        #mast {
            font-size: 1rem;
            margin-top: -10px;
        }
    </style>

    <div class="album py-5">
        <h1 class="text-center display-2 p-5" id="popular">{!! __("message.home 2") !!}</h1>
        <div class="album py-5" >
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4  mx-2">
                @foreach ($products as $product )
                        <div class="col">
                            <div class="card text-bg-dark bg-black" data-bs-theme="dark">
                                <a href="{{route('show', $product->id)}}" class="nav-link text-light">
                                    <img class="card-img-top" src="{{asset('images/'.$product->images) }}" alt="" height="350px">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <h6 class="card-title ">{{$product->categories->gender}}</h6>
                                        <h5 class="card-text ">{{$product->name}}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </div>

    <h1 class="text-center display-2" id="popular">@BGBIN</h1>
    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 ">
        <div class="card text-bg-dark text-center mt-5 mx-2">
            <img src="{{url('images/lien 1.jpg')}}" class="card-img opacity-50" alt="...">
            <div class="card-img-overlay row align-items-center">
                <div>
                    <a href="https://www.instagram.com/p/CyY6r2Lra5A/?igshid=MTc4MmM1YmI2Ng==" role="button" class="text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                          </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="card text-bg-dark text-center mt-5 mx-2">
            <img src="{{url('images/lien 3.jpg')}}" class="card-img opacity-50 " alt="...">
            <div class="card-img-overlay row align-items-center">
                <div>
                    <a href="https://youtu.be/Z1gH0gJBjtU?si=qHeXM4VuRmRlBQQW" role="button" class="text-light fs-3">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="30" height="30" viewBox="0 0 1200.000000 1200.000000" preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0.000000,1200.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                            <path d="M6095 10472 c-2 -2 -1 -10 2 -18 4 -12 -10 -14 -81 -13 -48 1 -89 6 -92 10 -3 5 -17 4 -32 -2 -14 -6 -53 -9 -86 -8 -50 2 -60 0 -66 -16 -5 -13 -9 -15 -14 -7 -4 7 -4 12 1 12 4 0 1 5 -7 9 -9 5 -40 5 -73 0 -32 -5 -73 -8 -92 -6 -19 2 -32 0 -29 -4 10 -17 -6 -29 -26 -19 -13 7 -21 7 -25 0 -3 -5 -13 -10 -21 -10 -8 0 -13 4 -9 9 10 17 -16 23 -33 8 -12 -11 -48 -17 -127 -20 -60 -3 -123 -10 -140 -16 -16 -6 -55 -13 -85 -15 -75 -6 -162 -26 -181 -42 -9 -8 -19 -11 -22 -8 -11 11 -154 -16 -217 -42 -67 -27 -85 -30 -74 -11 4 6 -4 2 -18 -11 -19 -17 -27 -20 -30 -10 -4 11 -9 11 -31 -1 -14 -7 -23 -19 -21 -26 3 -7 -2 -15 -10 -18 -10 -4 -13 -1 -9 9 7 18 -10 18 -48 -1 -16 -9 -35 -13 -42 -9 -7 4 -9 4 -5 -1 14 -15 -26 -34 -70 -35 -29 0 -61 -10 -97 -30 -30 -16 -58 -30 -64 -30 -7 0 -70 -26 -114 -48 -4 -2 -6 2 -5 10 4 16 -55 14 -60 -2 -2 -5 -10 -10 -18 -10 -8 0 -14 -6 -14 -14 0 -18 -22 -26 -70 -26 -31 0 -63 -11 -109 -37 -2 -2 1 -9 8 -16 16 -20 -9 -39 -44 -33 -23 4 -25 3 -14 -10 14 -18 5 -29 -33 -38 -17 -4 -28 -2 -31 7 -5 15 -37 -9 -37 -28 0 -7 -7 -16 -16 -19 -8 -3 -12 -2 -9 4 3 6 -2 13 -11 17 -10 4 -19 2 -22 -6 -6 -18 -148 -111 -170 -111 -10 0 -27 -9 -37 -20 -10 -11 -24 -20 -31 -20 -7 0 -17 -6 -21 -14 -11 -18 -131 -118 -162 -133 -13 -7 -30 -13 -37 -13 -8 0 -14 -6 -14 -13 0 -8 -11 -24 -25 -37 -24 -22 -37 -16 -14 7 8 8 7 13 -1 18 -7 4 -16 2 -20 -5 -4 -7 -13 -9 -20 -5 -8 5 -11 4 -7 -2 3 -5 -9 -25 -28 -43 -18 -18 -31 -38 -29 -45 3 -6 -12 -25 -33 -41 -21 -15 -40 -32 -41 -36 -2 -5 -17 -15 -32 -23 -16 -8 -31 -23 -34 -33 -4 -10 -19 -25 -34 -33 -15 -8 -33 -22 -40 -32 -8 -10 -21 -16 -31 -12 -20 6 -85 -57 -79 -77 6 -17 -38 -52 -53 -42 -7 4 -9 3 -6 -3 15 -24 -37 -93 -122 -162 -23 -18 -40 -36 -37 -39 3 -2 -6 -13 -20 -24 -13 -11 -56 -57 -95 -101 -97 -113 -106 -124 -113 -142 -3 -9 -13 -15 -22 -13 -11 2 -26 -13 -43 -44 -33 -59 -40 -66 -52 -48 -14 22 -52 -26 -45 -56 6 -21 -15 -73 -41 -101 -6 -7 -15 -22 -18 -33 -3 -11 -13 -20 -20 -20 -8 0 -17 -11 -21 -25 -7 -27 -19 -33 -27 -12 -4 9 -7 9 -17 0 -11 -10 -11 -15 -1 -27 11 -13 8 -24 -18 -66 -17 -28 -31 -54 -31 -59 0 -5 -6 -14 -14 -21 -8 -6 -12 -18 -10 -25 3 -8 -6 -24 -20 -36 -14 -12 -33 -43 -43 -68 -9 -25 -27 -63 -40 -83 -13 -21 -23 -44 -23 -52 0 -8 -6 -21 -12 -28 -7 -7 -23 -32 -36 -55 -20 -37 -21 -43 -7 -56 18 -19 20 -34 2 -18 -14 11 -37 -3 -37 -23 0 -5 -11 -24 -25 -42 -14 -18 -25 -41 -25 -51 -1 -38 -28 -118 -39 -115 -7 1 -10 -1 -7 -6 3 -5 -1 -20 -8 -34 -7 -14 -16 -41 -20 -62 -4 -20 -16 -52 -27 -71 -12 -19 -18 -35 -14 -35 3 0 -2 -15 -11 -32 -30 -59 -32 -64 -39 -124 -3 -32 -10 -70 -15 -84 -4 -14 -11 -33 -14 -44 -6 -18 -7 -18 -27 0 -18 16 -19 16 -13 1 3 -10 2 -23 -4 -30 -18 -22 -24 -74 -11 -96 10 -14 10 -26 2 -43 -22 -49 -32 -96 -38 -193 -4 -55 -13 -113 -21 -129 -7 -16 -12 -31 -10 -35 2 -3 0 -30 -4 -60 -6 -47 -5 -54 12 -59 13 -3 18 -14 18 -38 0 -19 -4 -34 -9 -34 -5 0 -12 -10 -14 -22 -3 -17 -5 -14 -6 10 -1 41 -31 46 -31 5 0 -16 -4 -35 -10 -43 -5 -8 -5 -19 0 -25 14 -17 5 -104 -12 -118 -13 -10 -14 -25 -7 -92 5 -48 4 -84 -2 -91 -5 -6 -9 -33 -9 -60 0 -27 -1 -134 -1 -239 -1 -188 14 -369 31 -390 5 -7 5 -37 0 -75 -12 -82 -12 -76 3 -92 7 -7 21 -32 31 -55 10 -23 27 -51 37 -62 10 -10 21 -31 25 -45 5 -21 3 -25 -9 -20 -23 9 -34 -40 -14 -61 17 -17 32 -54 24 -62 -3 -2 -8 5 -12 16 -10 32 -37 27 -33 -6 2 -16 8 -27 13 -25 10 3 17 -17 38 -118 7 -30 16 -61 20 -67 7 -12 -3 -17 -25 -14 -3 0 1 -13 9 -29 16 -32 43 -41 43 -13 0 9 3 13 7 10 3 -4 12 -2 20 4 10 9 13 5 13 -20 0 -17 -4 -31 -10 -31 -5 0 -10 -13 -10 -28 0 -15 -5 -33 -12 -40 -9 -9 -9 -12 1 -12 9 0 12 -10 9 -29 -2 -17 -1 -28 4 -25 4 3 11 -2 14 -10 3 -9 12 -16 20 -16 9 0 14 -12 14 -35 0 -24 5 -35 15 -35 14 0 19 12 16 33 -1 9 11 9 27 -2 11 -7 11 -9 -2 -14 -9 -4 -16 -10 -16 -15 0 -11 65 -121 80 -136 6 -6 10 -17 10 -25 0 -8 6 -22 14 -30 19 -21 33 -77 17 -67 -14 9 -15 -28 -1 -55 8 -15 7 -19 -4 -19 -12 0 -13 -5 -5 -30 6 -16 14 -30 19 -30 4 0 10 -17 14 -37 3 -21 16 -54 28 -73 l22 -35 6 25 c6 24 6 24 13 -8 4 -20 14 -36 24 -39 18 -5 38 -40 89 -157 14 -33 48 -97 75 -143 27 -46 49 -88 49 -93 0 -6 5 -10 10 -10 6 0 10 -6 10 -12 0 -7 -13 2 -29 21 -24 30 -29 32 -35 16 -4 -11 -1 -22 6 -27 7 -4 10 -8 6 -8 -4 0 6 -13 22 -29 17 -15 30 -31 30 -36 0 -17 33 -74 40 -70 5 3 23 -15 40 -40 17 -25 35 -45 39 -45 19 0 19 29 0 48 -28 31 -23 39 7 11 21 -19 25 -30 20 -58 -5 -34 14 -70 72 -130 15 -17 19 -27 11 -31 -7 -5 -1 -18 18 -40 29 -32 61 -35 49 -4 -3 8 -1 14 3 14 17 0 19 -25 4 -42 -13 -15 -12 -21 12 -52 15 -20 31 -36 36 -36 12 0 11 37 -1 45 -5 3 -10 11 -10 17 0 7 6 6 15 -2 8 -7 15 -21 15 -32 0 -11 11 -34 24 -51 13 -18 27 -47 31 -65 8 -39 124 -162 152 -162 20 0 123 -132 123 -157 0 -8 5 -11 10 -8 6 3 10 0 10 -8 0 -8 7 -17 15 -21 8 -3 15 -1 15 5 0 6 7 3 16 -6 12 -11 20 -13 27 -6 6 6 16 11 21 11 6 0 6 -4 -1 -11 -6 -6 -9 -18 -6 -27 6 -24 122 -106 147 -105 12 1 16 -1 10 -3 -13 -5 -7 -44 6 -44 17 0 120 -92 114 -101 -7 -13 34 -59 53 -59 7 0 13 -4 13 -9 0 -5 15 -12 33 -16 17 -4 42 -14 55 -22 13 -8 30 -12 38 -9 19 7 44 -3 44 -18 0 -6 17 -20 38 -31 74 -39 113 -66 107 -76 -4 -5 -3 -9 2 -8 4 1 15 1 23 0 13 -1 13 -2 0 -11 -13 -9 -11 -13 10 -30 60 -46 103 -52 64 -9 -11 13 1 8 31 -13 28 -20 65 -43 83 -52 18 -9 30 -21 27 -26 -3 -6 0 -7 8 -5 7 3 29 -6 48 -19 18 -14 44 -30 56 -35 12 -6 39 -21 60 -34 21 -13 52 -29 68 -35 17 -6 23 -11 13 -11 -30 -2 -20 -21 20 -37 79 -32 92 -39 92 -48 0 -4 7 -6 15 -2 8 3 15 1 15 -4 0 -6 7 -10 15 -10 8 0 24 -10 35 -22 18 -19 22 -20 30 -8 6 9 5 17 -3 22 -31 20 21 6 69 -19 38 -19 57 -24 65 -16 7 7 0 16 -26 32 -20 11 -40 21 -46 21 -5 0 -9 5 -9 10 0 6 19 0 41 -12 23 -13 56 -31 73 -40 17 -9 69 -29 116 -44 47 -15 90 -30 95 -33 25 -17 147 -47 172 -42 7 1 10 -4 7 -13 -4 -12 6 -14 56 -15 40 0 68 -5 79 -14 14 -13 78 -27 209 -46 23 -3 41 -10 40 -16 -4 -15 54 -19 62 -4 6 8 16 4 36 -15 16 -14 37 -26 47 -26 10 0 27 -4 37 -10 10 -5 62 -14 116 -20 55 -6 119 -15 144 -20 25 -5 90 -12 145 -15 55 -3 132 -10 170 -16 82 -12 306 -5 351 11 39 14 244 28 250 18 8 -12 82 -9 86 3 2 7 51 15 118 20 133 10 174 19 178 38 2 10 -4 12 -25 7 -24 -5 -25 -5 -10 5 11 6 32 9 48 5 18 -3 45 2 75 15 38 17 48 19 55 8 7 -11 14 -10 39 4 17 10 45 23 61 27 25 8 30 6 25 -5 -7 -20 7 -19 52 4 23 12 48 17 65 14 15 -3 34 0 42 7 8 6 36 12 62 12 28 0 62 8 81 19 18 11 38 19 43 19 5 0 26 7 47 16 20 10 46 16 56 15 10 -2 28 2 40 7 61 28 79 33 86 23 4 -7 24 0 53 19 44 28 47 28 59 11 12 -16 16 -16 46 -4 27 11 31 17 26 37 -5 23 -3 25 35 24 23 0 47 4 54 10 6 5 41 22 77 37 59 24 137 69 150 87 3 3 19 10 35 14 47 11 94 45 95 67 0 14 -26 7 -62 -18 -21 -14 -41 -24 -45 -24 -12 3 -46 -13 -61 -28 -7 -7 -19 -13 -26 -13 -8 0 -19 -7 -26 -15 -7 -8 -25 -15 -41 -15 -16 0 -52 -11 -81 -24 -29 -13 -65 -27 -80 -30 -14 -3 -33 -9 -42 -12 -9 -3 -16 -1 -16 5 0 10 137 81 157 81 6 0 13 9 16 21 3 11 15 23 27 26 16 4 18 8 9 14 -10 6 -5 11 16 19 51 18 82 35 86 45 2 6 10 9 16 9 7 -1 10 2 8 7 -9 13 37 49 77 59 20 6 40 15 43 20 4 6 17 7 31 4 17 -4 34 1 58 20 30 22 35 24 40 9 6 -14 11 -12 36 15 16 18 37 46 47 62 10 17 28 33 40 36 13 4 23 11 23 16 0 6 6 8 14 5 8 -3 16 -3 18 1 4 9 75 62 79 59 2 -1 3 0 1 2 -3 6 45 37 98 63 50 24 69 44 70 71 0 16 12 22 35 17 6 -1 7 2 2 6 -9 9 31 54 49 54 6 0 39 19 73 43 89 60 141 88 153 81 6 -4 8 -2 4 4 -3 6 11 25 33 43 22 17 44 43 50 58 12 31 55 81 71 81 5 0 10 4 10 9 0 5 8 7 18 4 13 -3 30 9 57 41 21 25 46 48 55 51 10 3 20 13 24 23 10 31 133 167 150 166 9 -1 13 2 10 7 -3 5 9 28 27 50 45 58 79 108 79 119 0 26 -32 5 -57 -37 -30 -54 -93 -124 -93 -105 0 24 -28 11 -68 -34 -23 -25 -42 -52 -42 -60 0 -8 -5 -14 -12 -14 -7 0 -21 -11 -33 -25 -11 -15 -33 -28 -50 -30 -16 -2 -31 -4 -32 -6 -2 -1 -7 -2 -12 -3 -6 0 -16 -8 -23 -16 -11 -12 -11 -12 5 -1 9 7 17 10 17 6 0 -4 8 -1 18 6 9 7 6 1 -8 -14 -13 -15 -30 -25 -38 -22 -7 2 -10 1 -7 -5 7 -12 -32 -33 -47 -24 -7 5 -8 3 -3 -6 6 -10 4 -12 -9 -7 -9 4 -15 3 -11 -2 7 -12 -52 -71 -70 -71 -8 0 -17 -5 -20 -11 -4 -6 -13 -8 -21 -5 -8 3 -32 -12 -54 -33 -22 -21 -56 -46 -75 -57 -19 -10 -35 -22 -35 -26 0 -5 -5 -8 -11 -8 -16 0 -6 35 11 36 8 1 20 2 26 3 9 1 61 48 218 199 27 26 50 40 57 36 7 -4 9 -3 6 2 -3 6 25 41 63 79 38 37 67 72 64 77 -4 5 4 20 17 34 12 13 18 24 12 24 -6 0 -14 -7 -17 -16 -3 -8 -10 -13 -14 -10 -12 7 -82 -42 -82 -57 -1 -21 -47 -70 -59 -63 -6 4 -34 -11 -61 -34 -34 -29 -57 -41 -70 -37 -11 3 -20 1 -20 -3 0 -5 -21 -29 -47 -54 -36 -33 -51 -42 -60 -34 -10 8 -21 2 -43 -23 -16 -19 -30 -39 -30 -46 0 -7 -7 -10 -16 -6 -16 6 -67 -35 -58 -48 2 -4 -8 -16 -23 -26 -15 -10 -47 -32 -71 -50 -23 -18 -49 -30 -56 -27 -8 3 -21 -6 -31 -23 -14 -23 -105 -93 -149 -113 -6 -3 -23 -13 -38 -23 -15 -11 -33 -15 -40 -11 -7 4 -10 3 -5 -1 7 -8 -69 -65 -86 -65 -5 0 -29 -12 -55 -28 -26 -15 -64 -28 -84 -29 -37 -1 -70 -23 -81 -55 -4 -10 -16 -18 -28 -18 -16 0 -19 -4 -15 -17 8 -20 -10 -33 -44 -33 -15 0 -32 -6 -39 -13 -11 -10 -12 -8 -7 9 5 15 2 21 -11 21 -10 0 -24 -5 -31 -10 -11 -9 -11 -13 3 -24 16 -11 16 -13 -6 -22 -13 -5 -45 -13 -71 -16 -26 -3 -50 -10 -53 -15 -3 -4 -23 -11 -46 -15 -22 -4 -43 -13 -46 -21 -3 -8 -16 -14 -28 -14 -13 0 -27 -4 -30 -10 -11 -18 -21 -10 -43 35 -27 56 -27 65 -2 58 11 -3 37 7 65 26 26 17 50 29 54 26 9 -5 100 23 118 37 6 5 58 33 115 62 116 60 146 77 168 91 8 5 20 10 26 10 28 0 138 100 140 126 1 15 -3 15 -35 -5 -93 -59 -284 -156 -304 -155 -6 0 13 13 43 27 109 54 269 146 264 153 -2 4 6 11 18 15 13 4 37 17 54 30 17 13 33 21 36 18 3 -3 15 7 27 22 12 15 24 24 27 21 4 -3 17 7 31 24 14 16 53 45 87 64 63 35 109 75 88 75 -7 0 -12 -4 -12 -9 0 -9 -124 -74 -149 -78 -8 -1 -18 -9 -23 -17 -5 -9 -17 -16 -27 -16 -9 0 -26 -7 -37 -15 -10 -8 -27 -15 -37 -15 -11 0 -33 -10 -50 -22 -58 -42 -136 -83 -149 -80 -5 1 -8 -2 -8 -8 0 -5 -6 -10 -14 -10 -8 0 -16 -4 -18 -9 -3 -9 -133 -81 -147 -81 -4 0 -43 -20 -87 -45 -43 -25 -87 -45 -97 -45 -27 0 -12 16 21 23 15 3 56 25 91 48 35 23 71 43 80 44 9 0 28 9 41 18 64 45 162 97 172 91 7 -5 8 -3 3 6 -6 10 -4 12 9 7 9 -4 15 -3 12 2 -3 5 7 17 22 27 15 9 33 26 40 36 7 10 20 18 28 18 8 0 17 7 20 15 5 11 11 12 24 5 15 -8 22 -4 39 23 11 19 32 39 46 45 32 15 48 15 40 2 -10 -16 0 -11 31 15 15 13 25 27 22 30 -4 4 2 14 11 23 10 10 35 33 55 52 21 19 34 28 31 18 -9 -23 25 -28 46 -7 9 9 23 19 30 21 12 4 12 7 1 21 -12 14 -8 19 25 40 21 14 42 21 47 16 13 -11 86 42 86 64 0 24 -12 21 -45 -9 -15 -14 -29 -24 -31 -22 -5 6 77 88 106 107 14 8 29 21 33 28 4 7 13 13 20 13 7 0 22 15 35 34 12 18 63 71 113 117 83 77 152 155 120 134 -9 -5 -12 -3 -9 6 3 8 12 16 22 17 25 5 147 134 144 152 -4 21 44 120 58 120 16 0 41 32 41 51 0 8 19 41 43 72 23 32 41 59 39 60 -2 2 -13 9 -23 17 -16 12 -18 12 -11 1 5 -10 4 -12 -3 -7 -7 4 -12 14 -12 22 0 8 -4 13 -9 9 -14 -8 -41 -65 -41 -86 0 -10 -14 -28 -30 -41 -18 -13 -30 -31 -30 -44 0 -13 -6 -26 -12 -31 -13 -8 -18 -9 -38 -12 -5 0 -10 -7 -10 -15 0 -8 -9 -18 -20 -21 -11 -3 -20 -10 -20 -15 0 -5 -25 -39 -55 -77 -30 -37 -55 -72 -55 -78 -1 -17 -53 -50 -58 -36 -7 20 -32 -8 -32 -35 0 -17 -5 -22 -19 -19 -13 2 -27 -10 -47 -43 -40 -64 -180 -207 -187 -190 -3 8 -28 -10 -70 -52 -66 -67 -70 -70 -87 -70 -5 0 -10 -7 -10 -15 0 -13 -4 -14 -20 -5 -14 7 -20 7 -20 0 0 -5 -11 -10 -24 -10 -14 0 -33 -12 -49 -31 -14 -17 -31 -29 -39 -27 -18 6 -55 -42 -39 -51 14 -9 -15 -36 -76 -75 -48 -29 -61 -33 -44 -12 7 8 8 17 3 20 -9 5 -106 -55 -117 -74 -3 -5 -14 -10 -23 -10 -9 0 -30 -12 -47 -26 -16 -14 -37 -23 -47 -21 -10 3 -16 0 -15 -7 1 -6 -7 -10 -18 -9 -11 1 -22 -2 -25 -6 -3 -4 -23 -20 -45 -36 -27 -20 -34 -23 -22 -9 20 24 22 40 5 50 -7 4 -8 3 -4 -4 4 -7 2 -12 -3 -12 -13 0 -51 -32 -51 -42 0 -5 8 -8 18 -8 9 -1 -1 -10 -23 -21 -22 -10 -44 -24 -49 -29 -16 -16 -30 -11 -16 5 7 8 11 15 9 16 -31 6 -39 6 -39 -2 0 -5 -6 -9 -14 -9 -20 0 -31 -21 -17 -30 16 -9 -46 -47 -94 -56 -19 -3 -35 -9 -35 -13 0 -3 -28 -17 -62 -31 -35 -13 -68 -27 -74 -32 -6 -4 -33 -11 -60 -14 -27 -4 -54 -11 -61 -16 -8 -6 -15 -3 -22 10 -8 16 -7 21 7 25 9 2 26 8 36 13 16 6 18 4 13 -11 -7 -16 -3 -17 29 -12 37 6 64 22 64 39 0 11 -30 7 -64 -7 -17 -8 -17 -6 2 13 12 12 22 27 22 33 0 6 7 9 15 5 8 -3 15 -1 15 4 0 6 8 10 18 10 10 0 28 8 42 17 20 14 23 15 18 1 -6 -13 -2 -14 23 -5 16 6 31 18 34 27 5 15 63 41 101 43 13 1 19 7 17 14 -4 9 5 13 25 13 20 0 42 10 63 30 21 18 37 26 43 21 12 -10 56 20 56 38 0 6 7 11 15 11 8 0 15 3 15 8 0 10 50 32 72 32 9 0 22 9 28 20 6 11 21 20 33 20 12 0 34 12 48 28 42 45 128 102 155 102 21 0 25 4 22 23 -2 15 5 27 25 40 15 9 25 22 22 27 -3 6 3 10 14 10 25 0 28 15 5 24 -10 4 -31 -6 -55 -25 -29 -23 -39 -27 -39 -15 0 19 -5 20 -31 6 -10 -6 -19 -20 -19 -30 0 -15 -7 -20 -25 -20 -14 0 -25 -6 -25 -13 0 -8 -12 -20 -26 -27 -14 -8 -30 -22 -35 -32 -12 -22 -34 -24 -25 -3 3 8 1 15 -5 15 -14 0 -71 -31 -84 -46 -12 -13 -150 -104 -158 -104 -3 0 -36 -20 -74 -45 -37 -25 -88 -52 -113 -61 -57 -21 -127 -51 -164 -71 -18 -10 -30 -12 -35 -5 -10 16 -60 2 -66 -20 -5 -13 -12 -17 -27 -13 -11 4 -26 1 -36 -8 -15 -14 -47 -16 -77 -6 -5 2 -42 -7 -82 -19 -39 -12 -80 -22 -90 -22 -10 0 -23 -4 -28 -9 -6 -5 -32 -14 -60 -19 -27 -6 -84 -18 -125 -27 -156 -35 -319 -56 -590 -75 -137 -9 -206 -9 -404 5 -132 9 -244 19 -248 21 -5 3 -52 12 -106 19 -53 8 -117 19 -142 25 -25 6 -56 12 -70 14 -23 4 -77 17 -190 46 -25 7 -54 15 -65 19 -11 5 -47 16 -80 26 -33 10 -73 24 -90 31 -16 7 -57 22 -90 33 -33 12 -69 26 -80 31 -11 5 -33 14 -48 20 -16 5 -26 14 -23 19 4 5 -2 7 -11 5 -10 -3 -36 4 -58 16 -21 11 -45 20 -51 20 -7 0 -14 3 -16 8 -1 4 -52 33 -113 64 -60 31 -109 62 -107 68 1 6 -2 9 -7 6 -9 -6 -178 87 -191 104 -3 3 -32 24 -65 45 -57 38 -116 81 -160 117 -11 9 -56 45 -100 79 -84 67 -389 366 -467 459 -103 123 -179 230 -172 241 4 7 3 9 -4 5 -9 -5 -163 213 -186 264 -3 8 -14 29 -24 45 -52 85 -92 167 -87 175 3 6 3 10 -2 10 -12 0 -123 228 -123 254 0 7 -4 16 -9 22 -7 7 -88 233 -96 269 -1 6 -5 17 -8 25 -10 24 -48 170 -59 225 -6 28 -14 59 -18 70 -5 11 -13 52 -19 90 -5 39 -14 99 -20 135 -5 36 -15 106 -23 155 -9 60 -13 193 -13 395 0 291 4 351 37 560 5 36 14 91 19 123 14 94 68 305 106 414 8 23 14 44 13 45 -2 5 61 181 81 225 10 23 19 44 19 47 0 23 157 340 225 454 36 61 110 178 116 182 3 3 12 15 18 28 7 13 19 31 26 40 8 9 48 63 90 120 47 63 81 100 88 95 7 -3 9 -3 5 2 -16 17 198 250 375 408 39 34 75 67 81 72 87 80 247 195 260 188 6 -3 8 -3 4 2 -11 11 29 38 44 29 6 -4 8 -3 5 3 -11 18 240 175 398 250 33 15 63 32 66 36 3 5 8 7 10 6 2 -2 24 7 49 18 90 43 156 71 195 83 22 7 46 17 53 23 7 5 15 7 19 4 3 -4 12 -2 18 3 17 14 255 90 282 90 12 0 24 4 27 9 3 4 20 11 38 14 18 4 76 16 128 27 175 39 256 50 570 79 169 16 604 -1 730 -29 25 -5 74 -14 110 -19 68 -11 165 -31 265 -55 33 -8 80 -20 105 -26 25 -5 54 -14 65 -19 11 -5 45 -17 75 -25 30 -9 71 -23 90 -30 19 -8 73 -29 120 -46 121 -46 291 -125 425 -198 412 -224 776 -530 1100 -923 188 -229 501 -753 480 -806 -2 -8 0 -11 5 -8 6 4 17 -11 26 -32 8 -21 19 -47 23 -58 5 -11 16 -40 26 -65 9 -25 23 -60 31 -78 8 -18 14 -41 14 -50 0 -10 4 -22 9 -27 5 -6 18 -44 31 -85 12 -41 25 -86 30 -100 8 -23 23 -83 64 -266 9 -40 16 -83 16 -96 0 -14 4 -38 10 -54 5 -16 14 -72 19 -124 11 -115 30 -190 47 -190 7 0 18 -16 24 -35 9 -29 9 -41 -4 -66 -14 -29 -15 -42 -1 -132 17 -115 20 -250 5 -293 -5 -16 -11 -41 -13 -55 -1 -15 -9 -34 -16 -42 -17 -21 -6 -37 25 -37 29 0 32 -24 7 -52 -14 -16 -15 -23 -5 -38 19 -32 14 -73 -13 -98 -21 -20 -24 -30 -18 -67 3 -24 0 -80 -6 -125 -11 -75 -10 -102 4 -88 3 3 15 61 26 129 14 87 25 128 37 137 14 11 18 10 26 -8 5 -11 16 -20 25 -20 14 0 16 13 13 94 -2 52 1 103 6 113 7 12 7 25 0 37 -8 14 -7 21 3 27 11 6 8 14 -12 36 -30 33 -52 97 -47 138 2 25 9 31 33 35 27 4 30 9 30 40 0 27 5 37 23 45 28 12 28 33 0 44 -12 4 -17 11 -11 14 5 4 18 0 29 -7 14 -11 17 -25 15 -67 -1 -30 -7 -55 -12 -57 -18 -7 -9 -42 10 -42 21 0 36 31 32 67 -1 12 3 32 10 44 9 18 9 25 -2 33 -20 15 -20 48 -2 61 16 12 15 73 -3 245 -4 40 -3 42 7 20 6 -14 13 -47 15 -75 2 -27 9 -79 14 -115 14 -82 37 -240 51 -350 8 -60 18 -92 32 -107 11 -13 23 -21 26 -18 3 3 6 34 8 68 2 34 5 89 8 122 3 33 6 76 6 95 1 19 3 28 5 18 3 -9 11 -19 18 -21 10 -4 12 17 9 96 -4 109 -19 274 -34 372 -20 122 -20 130 -9 119 6 -6 12 -22 14 -35 1 -13 5 -31 8 -39 4 -8 9 -33 13 -55 7 -41 9 -57 20 -180 4 -38 9 -79 12 -90 8 -34 12 -151 13 -337 0 -183 5 -201 38 -147 10 16 10 19 1 13 -9 -5 -10 -2 -5 12 7 18 27 163 39 291 1 12 5 25 10 29 4 4 7 36 7 72 0 57 2 63 15 52 9 -7 13 -21 10 -31 -4 -11 2 -27 14 -41 13 -14 21 -35 21 -58 0 -20 3 -40 7 -44 8 -8 5 -332 -3 -393 -4 -29 -3 -43 5 -43 13 0 6 -103 -11 -175 -5 -22 -11 -62 -14 -90 -3 -27 -10 -75 -15 -105 -6 -30 -14 -108 -18 -173 -6 -83 -13 -122 -24 -135 -16 -19 -24 -66 -33 -214 -6 -95 -6 -98 15 -98 11 0 21 6 21 14 0 8 11 27 23 43 22 25 77 133 77 148 0 4 11 21 25 39 20 27 25 44 25 94 0 33 5 64 10 67 6 4 8 11 5 16 -4 5 1 9 9 9 10 0 16 9 16 24 0 14 4 35 9 48 5 14 14 67 20 119 6 52 16 119 22 149 6 30 13 65 15 78 3 13 8 21 12 18 15 -9 32 60 28 115 -3 43 -2 50 6 32 14 -28 25 -29 33 -3 3 11 11 20 16 20 16 0 10 42 -8 55 -14 11 -17 29 -16 104 1 50 -3 94 -9 97 -5 3 -9 31 -7 63 1 31 -2 64 -6 73 -3 9 -2 25 4 36 7 13 6 26 -3 44 -10 19 -11 29 -3 37 8 8 8 19 0 41 -8 22 -8 39 0 65 8 29 7 42 -6 71 -18 38 -23 84 -8 84 5 0 11 -6 14 -12 4 -10 7 -10 17 -1 11 10 11 18 2 38 -9 19 -9 32 -1 47 8 14 8 23 1 27 -6 4 -11 38 -10 78 0 39 -2 76 -6 81 -3 5 1 13 10 16 12 4 14 13 9 29 -4 12 -9 56 -11 97 -2 41 -6 94 -10 117 -4 29 -2 48 6 58 10 12 10 19 2 27 -7 7 -12 20 -12 30 0 10 -4 26 -10 36 -5 9 -14 42 -19 72 -5 30 -17 80 -27 110 -33 112 -46 156 -52 180 -3 14 -12 30 -21 37 -10 7 -16 27 -17 52 0 31 4 41 19 45 18 4 18 6 3 21 -9 9 -16 20 -16 25 0 5 -3 16 -7 26 -4 12 -3 15 5 10 21 -13 32 3 19 27 -6 12 -15 24 -18 27 -8 7 -22 44 -20 53 0 4 -8 18 -20 30 -11 12 -28 34 -37 50 -9 15 -20 27 -24 27 -4 0 -8 5 -8 10 0 6 6 10 14 10 19 0 -26 95 -48 103 -8 3 -22 21 -29 39 -8 19 -21 40 -29 48 -20 20 -31 80 -15 80 6 0 1 10 -13 23 -27 23 -70 80 -70 92 0 3 7 0 15 -9 8 -8 15 -19 15 -24 0 -5 9 -17 20 -27 16 -14 23 -16 32 -7 9 9 9 12 0 12 -7 0 -12 6 -12 14 0 7 -16 31 -35 52 -20 21 -33 44 -31 51 6 15 -22 73 -35 73 -5 0 -9 5 -9 11 0 5 4 8 9 4 5 -3 12 -1 15 3 7 12 -64 103 -74 97 -13 -8 -5 -33 18 -60 26 -30 27 -32 5 -32 -21 0 -69 52 -93 102 -11 23 -44 65 -72 95 -48 51 -72 90 -45 73 15 -9 59 -61 72 -84 13 -23 95 -93 95 -81 0 5 -11 24 -25 43 -13 19 -29 43 -34 54 -5 11 -30 40 -55 64 -25 24 -43 48 -40 53 3 4 -2 5 -10 2 -9 -3 -16 -13 -16 -22 0 -13 -3 -12 -20 3 -12 10 -18 25 -15 32 2 8 0 11 -5 8 -6 -3 -10 -1 -10 4 0 6 -21 38 -47 71 -25 33 -44 62 -41 65 4 5 20 -13 61 -69 16 -22 39 -13 31 12 -3 9 4 0 15 -22 30 -56 43 -70 52 -55 4 7 3 21 -2 30 -5 10 -9 26 -9 36 0 21 -47 76 -59 68 -5 -2 -30 20 -57 50 -26 30 -53 55 -60 55 -15 0 -12 -46 5 -63 6 -6 11 -15 11 -20 0 -10 -103 94 -104 105 -1 3 -34 39 -74 78 -40 40 -71 74 -68 77 6 6 -3 15 -67 67 -26 21 -46 40 -45 42 7 7 78 -30 78 -41 0 -17 41 -38 52 -27 6 6 -3 24 -26 50 -20 22 -36 46 -36 53 0 8 -18 24 -40 37 -32 18 -40 20 -40 8 0 -26 -24 -8 -53 39 -16 25 -35 45 -43 45 -12 0 -126 74 -184 120 l-25 20 23 0 c25 0 30 18 7 26 -8 4 -12 10 -9 15 3 5 2 8 -3 7 -16 -5 -53 23 -53 40 -1 38 -90 106 -90 68 0 -8 10 -23 23 -33 12 -10 31 -31 41 -48 11 -16 29 -38 40 -49 12 -10 16 -17 9 -15 -23 7 -121 94 -126 111 -3 9 -38 38 -79 65 -62 40 -73 51 -61 61 11 11 18 8 38 -13 14 -14 28 -25 31 -25 3 0 14 -9 26 -20 12 -11 25 -20 30 -20 13 0 9 22 -9 42 -9 11 -11 18 -5 18 7 0 12 7 12 15 0 14 -17 20 -47 16 -10 -1 -123 68 -158 96 -26 22 -87 55 -91 50 -3 -3 7 -17 23 -32 21 -20 9 -15 -47 18 -41 25 -104 61 -140 79 -58 30 -75 50 -45 54 6 1 15 2 20 3 6 1 -3 10 -19 20 -33 22 -64 18 -45 -5 9 -11 8 -14 -5 -14 -9 0 -16 4 -16 10 0 5 -18 13 -40 16 -22 4 -43 11 -46 15 -3 5 -14 9 -25 9 -10 0 -19 4 -19 9 0 4 -29 23 -65 42 -36 18 -65 36 -65 40 0 10 -51 42 -69 43 -9 1 -61 23 -116 50 -55 26 -131 59 -170 74 -38 14 -83 36 -98 49 -16 13 -35 23 -43 23 -8 0 -14 5 -14 10 0 6 -7 6 -18 -1 -14 -9 -25 -8 -50 5 -17 9 -40 16 -50 16 -11 0 -25 7 -32 15 -7 8 -22 14 -34 14 -41 -1 -101 14 -112 29 -7 9 -18 13 -28 9 -20 -8 -75 15 -124 50 -24 18 -36 22 -45 14 -9 -6 -26 -7 -52 0 -22 5 -64 11 -93 14 -29 3 -63 12 -77 21 -21 14 -30 14 -55 4 -22 -9 -37 -9 -61 -1 -18 6 -43 11 -56 11 -13 0 -26 7 -29 15 -5 11 -25 14 -87 15 -137 0 -138 0 -126 21 8 16 6 19 -9 19 -11 0 -25 -7 -32 -15 -13 -16 -72 -16 -67 0 2 6 17 10 34 10 16 0 38 8 47 18 17 16 15 17 -27 17 -24 0 -58 -7 -75 -16 -37 -18 -93 -15 -100 5 -4 11 2 13 26 8 32 -7 46 1 34 20 -6 10 -158 23 -167 15z m82 -68 c-3 -3 -12 -4 -19 -1 -8 3 -5 6 6 6 11 1 17 -2 13 -5z m-2203 -369 c-10 -8 -23 -14 -29 -14 -5 0 -1 6 9 14 11 8 24 15 30 15 5 0 1 -7 -10 -15z m4771 -525 c3 -6 -1 -7 -9 -4 -18 7 -21 14 -7 14 6 0 13 -4 16 -10z m540 -488 c-3 -3 -11 0 -18 7 -9 10 -8 11 6 5 10 -3 15 -9 12 -12z m-7279 -570 c-18 -16 -18 -16 -6 6 6 13 14 21 18 18 3 -4 -2 -14 -12 -24z m7957 -303 c8 -28 2 -24 -38 34 l-38 52 36 -34 c19 -18 37 -42 40 -52z m143 -212 c41 -69 46 -91 6 -27 -48 77 -74 126 -57 105 9 -11 32 -46 51 -78z m48 11 c8 -5 7 -8 0 -8 -7 0 -19 11 -28 25 -21 33 -21 46 1 15 9 -14 22 -28 27 -32z m-8601 -368 c-6 -22 -23 -38 -23 -21 0 17 12 41 20 41 5 0 6 -9 3 -20z m8866 -305 c0 -5 -4 -3 -9 5 -5 8 -9 22 -9 30 0 16 17 -16 18 -35z m-315 -830 c36 -147 40 -168 23 -125 -20 48 -45 138 -52 180 -3 19 -12 48 -20 64 -8 15 -12 33 -9 38 10 15 29 -36 58 -157z m-8967 -467 c-3 -8 -6 -5 -6 6 -1 11 2 17 5 13 3 -3 4 -12 1 -19z m8730 -360 c-3 -7 -5 -2 -5 12 0 14 2 19 5 13 2 -7 2 -19 0 -25z m-8670 -590 c-3 -7 -5 -2 -5 12 0 14 2 19 5 13 2 -7 2 -19 0 -25z m10 -90 c-3 -7 -5 -2 -5 12 0 14 2 19 5 13 2 -7 2 -19 0 -25z m83 -368 c0 -5 -7 -7 -15 -4 -8 4 -12 10 -9 15 6 11 24 2 24 -11z m9 -73 c0 -21 -1 -21 -9 -2 -12 28 -12 37 0 30 6 -3 10 -16 9 -28z m60 -182 c0 -5 -4 -3 -9 5 -5 8 -9 22 -9 30 0 16 17 -16 18 -35z m201 -531 c0 -8 -5 -14 -12 -14 -6 0 -8 3 -5 6 3 4 1 16 -5 28 -10 19 -10 20 5 7 10 -7 17 -20 17 -27z m7671 -527 c-13 -13 -26 -3 -16 12 3 6 11 8 17 5 6 -4 6 -10 -1 -17z m-7340 -81 c5 3 9 -4 9 -16 0 -12 7 -35 16 -53 9 -18 12 -27 6 -22 -16 16 -52 84 -51 98 0 9 2 9 6 -1 2 -6 9 -10 14 -6z m7569 -480 c0 -3 -4 -8 -10 -11 -5 -3 -10 -1 -10 4 0 6 5 11 10 11 6 0 10 -2 10 -4z m-1030 -86 c0 -5 -7 -10 -16 -10 -8 0 -12 5 -9 10 3 6 10 10 16 10 5 0 9 -4 9 -10z m-6057 -103 c-3 -5 -9 -3 -14 4 -4 7 -5 17 -2 22 3 5 9 3 14 -4 4 -7 5 -17 2 -22z m5607 13 c-8 -5 -19 -10 -25 -10 -5 0 -3 5 5 10 8 5 20 10 25 10 6 0 3 -5 -5 -10z m-5540 -55 c19 -19 29 -35 23 -35 -6 0 -23 16 -37 35 -15 19 -25 35 -23 35 1 0 18 -16 37 -35z m6440 -59 c0 -2 -7 -7 -16 -10 -8 -3 -12 -2 -9 4 6 10 25 14 25 6z m-100 -90 c0 -2 -8 -10 -17 -17 -16 -13 -17 -12 -4 4 13 16 21 21 21 13z m-869 -26 c-13 -11 -28 -20 -35 -20 -6 0 3 9 19 19 39 25 46 25 16 1z m1043 5 c-10 -8 -23 -14 -29 -14 -5 0 -1 6 9 14 11 8 24 15 30 15 5 0 1 -7 -10 -15z m-1119 -45 c-3 -5 -12 -10 -18 -10 -7 0 -6 4 3 10 19 12 23 12 15 0z m-5085 -90 c0 -5 -2 -10 -4 -10 -3 0 -8 5 -11 10 -3 6 -1 10 4 10 6 0 11 -4 11 -10z m5900 -62 c-25 -20 -40 -23 -40 -7 0 13 21 34 40 41 24 8 25 -14 0 -34z m-74 -19 c-14 -11 -26 -26 -26 -33 0 -6 -10 -18 -21 -26 -12 -8 -42 -30 -66 -47 -54 -41 -65 -42 -28 -3 16 17 33 30 37 30 5 0 32 22 61 50 29 27 56 50 61 50 5 0 -3 -9 -18 -21z m-5711 -19 c3 -5 2 -10 -4 -10 -5 0 -13 5 -16 10 -3 6 -2 10 4 10 5 0 13 -4 16 -10z m5785 -89 c0 -5 -7 -11 -15 -15 -15 -5 -20 5 -8 17 9 10 23 9 23 -2z m-1030 -25 c0 -2 -7 -7 -16 -10 -8 -3 -12 -2 -9 4 6 10 25 14 25 6z m750 -24 c0 -5 -11 -15 -25 -22 -14 -7 -25 -19 -25 -27 0 -7 -6 -13 -14 -13 -8 0 -23 -3 -33 -6 -11 -4 -9 0 7 12 14 10 27 20 30 24 5 5 53 38 58 39 1 1 2 -3 2 -7z m-5309 -32 c18 -10 18 -12 4 -27 -18 -17 -20 -17 -29 15 -8 25 -4 27 25 12z m78 -36 c2 -2 2 -7 -2 -10 -3 -3 -16 2 -29 11 l-23 17 25 -7 c14 -4 27 -9 29 -11z m91 -46 c0 -12 -6 -9 -26 13 -19 22 -19 22 4 8 12 -8 22 -17 22 -21z m176 -126 c-4 -3 -14 2 -24 12 -16 18 -16 18 6 6 13 -6 21 -14 18 -18z m129 -75 c14 -15 -87 43 -105 60 -8 8 10 0 40 -17 30 -18 60 -37 65 -43z m95 -46 c36 -19 59 -36 53 -38 -7 -3 -25 5 -39 16 -15 12 -32 21 -38 21 -6 0 -22 10 -36 21 -31 26 -21 22 60 -20z m4375 -1 c-3 -5 -14 -10 -23 -9 -14 0 -13 2 3 9 27 11 27 11 20 0z m-4253 -74 c23 -13 44 -29 46 -35 2 -6 -19 3 -47 20 -47 30 -58 39 -46 39 2 0 24 -11 47 -24z m192 -135 c-2 -3 -12 3 -22 13 -16 17 -16 18 5 5 12 -7 20 -15 17 -18z m56 12 c14 -6 34 -14 44 -17 10 -4 16 -9 13 -12 -6 -7 -97 32 -97 41 0 4 3 5 8 3 4 -2 18 -9 32 -15z m2605 -353 c-3 -5 -13 -10 -21 -10 -8 0 -12 5 -9 10 3 6 13 10 21 10 8 0 12 -4 9 -10z"/>
                            <path d="M8495 9720 c3 -5 11 -10 16 -10 6 0 7 5 4 10 -3 6 -11 10 -16 10 -6 0 -7 -4 -4 -10z"/>
                            <path d="M9155 9330 c3 -5 11 -10 16 -10 6 0 7 5 4 10 -3 6 -11 10 -16 10 -6 0 -7 -4 -4 -10z"/>
                            <path d="M9150 9180 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0 -10 -4 -10 -10z"/>
                            <path d="M9540 8786 c0 -9 7 -19 15 -23 25 -9 27 2 5 22 -18 17 -20 17 -20 1z"/>
                            <path d="M5762 7249 c-39 -4 -179 -10 -310 -14 -265 -7 -656 -24 -717 -30 -160 -17 -242 -40 -320 -90 -189 -121 -267 -290 -312 -675 -15 -134 -18 -237 -17 -770 0 -566 2 -628 22 -775 43 -329 87 -451 202 -565 63 -62 174 -130 213 -130 9 0 18 -4 21 -9 18 -29 362 -54 951 -71 630 -17 1195 -12 1915 15 424 16 552 48 690 172 40 36 122 148 126 172 0 3 4 13 7 21 30 73 65 205 77 295 22 161 50 655 50 875 0 192 -24 687 -39 800 -6 41 -13 98 -16 125 -22 174 -96 346 -188 438 -34 34 -61 66 -59 70 1 5 -2 6 -7 3 -5 -3 -29 5 -54 19 -127 71 -241 85 -917 111 -276 10 -1240 19 -1318 13z m61 -939 c4 0 46 -22 94 -49 49 -26 124 -67 168 -91 145 -78 189 -102 243 -131 28 -16 77 -42 107 -59 201 -110 208 -114 199 -123 -3 -3 3 -3 13 -1 11 3 25 -2 32 -10 8 -9 20 -16 27 -16 8 0 22 -8 32 -17 9 -10 22 -18 27 -18 12 -1 88 -37 95 -46 3 -4 16 -10 29 -14 27 -8 26 -8 -199 -127 -63 -34 -149 -81 -192 -104 -42 -24 -82 -45 -89 -46 -7 -2 -21 -11 -32 -21 -10 -11 -27 -17 -38 -14 -10 3 -17 1 -16 -5 1 -5 -38 -31 -88 -57 -208 -111 -379 -204 -409 -222 -17 -10 -34 -19 -38 -19 -4 0 -8 275 -8 612 0 593 0 611 18 595 10 -9 22 -17 25 -17z"/>
                            <path d="M9747 4800 c-5 -25 -18 -80 -28 -124 -11 -43 -18 -83 -16 -90 2 -6 7 5 12 24 4 19 16 56 27 81 13 31 18 63 16 100 l-3 54 -8 -45z"/>
                            <path d="M9621 4426 c-8 -9 -11 -19 -7 -23 9 -9 29 13 24 27 -2 8 -8 7 -17 -4z"/>
                            <path d="M9856 4341 c-4 -7 -5 -15 -2 -18 9 -9 19 4 14 18 -4 11 -6 11 -12 0z"/>
                            <path d="M9805 4215 c-20 -42 -35 -79 -32 -81 3 -3 22 29 43 70 20 42 35 79 32 82 -3 3 -22 -29 -43 -71z"/>
                            <path d="M9745 4090 c-17 -33 -19 -50 -6 -50 5 0 13 18 19 40 12 48 8 51 -13 10z"/>
                            <path d="M1380 4068 c0 -9 5 -20 10 -23 13 -8 13 5 0 25 -8 13 -10 13 -10 -2z"/>
                            <path d="M8905 3250 c-3 -5 -1 -10 4 -10 6 0 11 5 11 10 0 6 -2 10 -4 10 -3 0 -8 -4 -11 -10z"/>
                            <path d="M8659 3007 c-9 -6 -24 -25 -33 -42 -16 -26 -14 -25 18 9 36 38 44 58 15 33z"/>
                            <path d="M8480 2848 c-36 -33 -55 -56 -43 -49 26 13 117 90 121 102 9 21 -18 4 -78 -53z"/>
                            <path d="M9345 2800 c-3 -5 -2 -10 4 -10 5 0 13 5 16 10 3 6 2 10 -4 10 -5 0 -13 -4 -16 -10z"/>
                            <path d="M8400 2782 c0 -7 -9 -12 -19 -12 -11 0 -23 -4 -26 -10 -3 -5 3 -10 13 -10 21 0 49 27 38 37 -3 3 -6 1 -6 -5z"/>
                            <path d="M8720 2495 c-41 -35 -76 -70 -78 -77 -2 -7 5 -4 15 8 10 11 24 23 30 25 15 6 126 109 116 109 -4 -1 -42 -30 -83 -65z"/>
                            <path d="M8472 2314 c-46 -35 -77 -64 -69 -64 8 0 20 6 26 14 6 8 36 29 65 47 48 30 89 71 69 68 -5 -1 -45 -30 -91 -65z"/>
                            <path d="M8281 2179 c-13 -11 -22 -22 -19 -24 2 -3 15 6 28 20 28 30 24 32 -9 4z"/>
                            <path d="M7500 2170 c-11 -8 -7 -10 17 -8 17 1 29 6 27 10 -7 11 -26 10 -44 -2z"/>
                            </g>
                            </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="card text-bg-dark text-center mt-5 mx-2">
            <img src="{{url('images/_MG_0892.png')}}" class="card-img opacity-50" alt="...">
            <div class="card-img-overlay row align-items-center">
                <div>
                    <a href="" role="button" class="text-light fs-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="card text-bg-dark text-center mt-5 mx-2">
            <img src="{{url('images/lien 2.jpg')}}" class="card-img opacity-50" alt="...">
            <div class="card-img-overlay row align-items-center">
                <div>
                    <a href="https://pin.it/110khHF" role="button" class="text-light fs-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pinterest" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
                          </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

<style>
    #popular {
        font-family: 'Colonna MT', sans-serif;
    }
    .card {
        opacity: 0.7;
        transition: all 0.2s;
    }

    .card:hover {
        opacity: 1;
    }
</style>
