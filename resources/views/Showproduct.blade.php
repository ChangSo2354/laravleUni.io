@extends('layout')
@section('title', 'Show Product')
@section('section')

<div class="card">
    <div class="card-header bg-primary text-light">
        <h3>Product List</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $index => $product)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $product->pcode }}</td>
                    <td>{{ $product->pname }}</td>
                    <td>${{ $product->price }}</td>
                    <td>{{ $product->desc }}</td>

                    <td>
                        <img src="{{ asset('images/' . $product->image) }}" width="60">
                    </td>

                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection