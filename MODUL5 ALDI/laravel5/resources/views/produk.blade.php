@extends('layout.core')
@section('title','Product')
@section('content')
<!-- code here -->
<div class="container">
    @if($products->count())

    <h4 class="text-center py-4">LIST PRODUCT</h4>

    <a href="/produk/tambah" class="btn btn-dark btn-outline-light mb-3" role="button">Add Product</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($products as $dt)
            <tr>
                <td>{{$i++}}</td>
                <td>{{ $dt->name}}</td>
                <td>$ {{ $dt->price}}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                       <button class="btn btn-sm btn-danger" role="button">Delete</button>
                </td>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    @else
    <div class="text-center">
        There is no Data! <br> <br>
        <a href="/produk/tambah" class="btn btn-dark btn-outline-light mb-3" role="button">Add Product</a>
    </div>
    @endif
</div>
@endsection