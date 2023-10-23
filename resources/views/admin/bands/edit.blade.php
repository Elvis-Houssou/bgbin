@extends('admin.layouts')

@section('content')
<div class="container">
    <form action=" {{route('updateBand', $band)}} " method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 form-floating">
            <input type="text" class="form-control" placeholder="Name input" value="{{$band->title}}"  id="title" name="title">
            <label for="floatingInput">Nom</label>
            @if ($errors->has('name'))
                <span class="text-danger"> {{$errors->first('name')}} </span>
            @endif
        </div>

        <div class="mb-3">
            <label for="formFileLg" class="form-label">Image du produit</label>
            <input class="form-control form-control-lg" type="file" name="images" accept="image/png, image/jpeg">
            @if ($errors->has('images'))
                <span class="text-danger"> {{$errors->first('images')}} </span>
            @endif
        </div>

        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
        <div>
            <input type="submit" class="btn btn-primary" value="Soumettre">
        </div>
    </form>
</div>
@endsection

