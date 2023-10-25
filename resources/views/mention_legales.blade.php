@extends('layouts.app')

@section('content')
<div>
    <h1 class="text-center">{!! __("message.mention 1") !!}</h1>
    <p class="text-center">{!! __("message.mention 2") !!}</p>

    <div class="album py-5" >
        <div class="row row-cols-1 align-items-center">
            <div class="col">
                <p>
                    {!! __("message.mention 3") !!}
                    <h3 class="text-start">
                        {!! __("message.mention 4") !!}
                    </h3>

                    {!! __("message.mention 5") !!}

                    <br><br>
                    <h3 class="text-start">
                        {!! __("message.mention 6") !!}
                    </h3>

                    {!! __("message.mention 7") !!}

                    <br><br>
                    <h3 class="text-start">
                        {!! __("message.mention 8") !!}
                    </h3>

                    {!! __("message.mention 9") !!}

                    <br><br>
                    <h3 class="text-start">
                        {!! __("message.mention 10") !!}
                    </h3>

                    {!! __("message.mention 11") !!}
                    </p>
            </div>
        </div>
    </div>
</div>

@endsection
