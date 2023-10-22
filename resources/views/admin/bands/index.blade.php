@extends('admin.layouts')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="container">

            <div class="row" style="padding-top: 5rem;">
                <div class="col-lg-12 margin-tb text-end">
                    <div class="pull-right">
                        <a href="{{ route('createBands') }}"> <button class="btn btn-success">Create New Product</button></a>
                        {{-- <a class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-white-500 dark:text-gray-400 bg-dark dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150" href=" {{ route('create') }} "> Create New Products</a> --}}
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <br>

            <table class="table table-bordered">
                <tr>
                    <th>titre</th>
                    <th>Images</th>
                    <th>Action</th>
                </tr>
                @foreach ($bands as $band )
                <tr>

                    <td> {{$band->title}} </td>
                    <td> <img src="{{asset('images/'.$band->images)}}" alt="" class="rounded" width="60" height="60"></td>

                    <td>
                        <form action=" {{ route('destroyProduct', $band->id) }} " method="POST">
                                @csrf
                            <span class="edit">
                                <a class="btn btn-primary" href="">Edit</a>
                            </span>
                            @csrf
                            @method('DELETE')
                            <span class="del">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Etes-vous sûre ?')">Delete</button>
                            </span>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>

            {{-- <div class="w-25 p-3">
                {{ $products->links() }}
            </div> --}}
            <div class="d-flex flex-row-reverse">
                {{ $bands->links("pagination::bootstrap-5") }}
            </div>
        </div>
    </div>
@endsection
