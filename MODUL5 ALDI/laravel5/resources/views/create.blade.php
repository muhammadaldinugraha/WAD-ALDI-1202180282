@extends('layout.core')
@section('title','Input Product')
@section('content')
<!-- insert code below -->
<div class="container col-md-8 py-3">
    <h4 class="text-center">INPUT PRODUCT</h4>
    <form class="mt-5" action="/produk/simpan" method="post">
    @csrf
        <div class="form-group">
            <label for="namaP">Product Name</label>
            <input type="text" class="form-control" id="namaproduk" name="namaproduk">
        </div>
        <label for="harga">Price</label>
        <div class=" input-group ">
            <div class=" input-group-prepend">
            <div class="input-group-text">$ USD</div>
</div>
<input type="number" class="form-control" id="harga" name="price">
</div>
<div class="form-group mt-2">
    <label for="deskripsi">Deskripsi</label>
    <textarea class="form-control" id="deskripsi" rows="3" name="desk"></textarea>
</div>
<div class="form-group">
    <label for="stock">Stock</label>
    <input type="text" class="form-control col-4" id="stock" name="stock">
</div>
<div class="form-group">
    <label for="gambar">Image File</label>
    <input type="file" class="form-control-file" id="gambar" name="gambar">
</div>
<button type="submit" id="submit" name="submit" class="btn btn-dark btn-outline-light">SUBMIT</button>
</form>
</div>
@endsection