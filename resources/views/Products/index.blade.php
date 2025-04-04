@extends('products.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <h2>
                Laravel 10 CRUD – (Nolly Sumobay Jr)
                <a class="btn btn-primary float-end" href="{{ route('products.create') }}"> Create New Product</a>
            </h2>
        </div>
        <div class="card-body">

            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered">

                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th width="280px">Action</th>
                </tr>

                @foreach ($products as $product)
                <tr>
                    <td>{{ ++$id }}</td> {{-- ilisan ug $product -> product_id. Para ma display ang data sa table. --}}
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        {{-- Diri sa buttons ug form, ilisan ang 'id' to 'product_id' --}}
                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>{{-- Adto sa Model/Product --}}
                        </form>
                    </td>
                </tr>
                @endforeach

            </table>

            {!! $products->links() !!}

        </div>
    </div>

@endsection
