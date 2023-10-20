@extends('admin.layouts')

@section('content')
<div class="container">
    <form action=" {{route('updateProduct', $product)}} " method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 form-floating">
            <input type="text" class="form-control" placeholder="Name input" value="{{ $product->name }}"  id="name" name="name">
            <label for="floatingInput">First Name</label>
            @if ($errors->has('name'))
                <span class="text-danger"> {{$errors->first('name')}} </span>
            @endif
        </div>

        <div class="mb-3 form-floating">
            <textarea class="form-control" placeholder="Description input" id="description" name="description" style="height: 100px"> {{ $product->description }}</textarea>
            <label for="floatingTextarea">Description</label>
            @if ($errors->has('description'))
                <span class="text-danger"> {{$errors->first('description')}} </span>
            @endif
        </div>

        <div class="mb-3">
            <select name="category_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
                <option selected>Catégorie</option>
                @foreach ($categories as $categorie)
                    <option value=" {{$categorie->id}} " {{ $categorie->id == $product->category_id ? 'selected' : "" }}>{{$categorie->gender}} </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <select name="sub_category_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
                <option selected>Sous Catégorie</option>
                @foreach ($subCategories as $subCategorie)
                    <option value=" {{$subCategorie->id}} " {{ $subCategorie->id == $product->sub_category_id ? 'selected' : "" }}>{{$subCategorie->type }} </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="formFileLg" class="form-label">Image du produit</label>
            <input class="form-control form-control-lg" type="file" name="images" accept="image/png, image/jpeg" value="{{ $product->images }}">
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


<script>
    $(document).ready(function () {
        // Au changement de la catégorie
        $('#category_id').change(function () {
            var categoryId = $(this).val();

            // Vérifiez si la catégorie sélectionnée est égale à 1
            if (categoryId == 1) {
                // Effectuez une requête AJAX pour obtenir les sous-catégories en fonction de la catégorie sélectionnée
                $.ajax({
                    url: '{{ url('/get-sub-categories') }}',
                    method: 'GET',
                    data: {category_id: categoryId},
                    success: function (data) {
                        // Mettez à jour le deuxième select avec les nouvelles options
                        $('#sub_category_id').empty();
                        $('#sub_category_id').append('<option selected disabled>Sous Catégorie</option>');
                        $.each(data, function (key, value) {
                            $('#sub_category_id').append('<option value="' + value.id + '">' + value.type + '</option>');
                        });
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            } else {
                // Si la catégorie n'est pas égale à 1, réinitialisez le deuxième select
                $('#sub_category_id').empty();
                $('#sub_category_id').append('<option selected disabled>Sous Catégorie</option>');
            }
        });
    });
</script>
