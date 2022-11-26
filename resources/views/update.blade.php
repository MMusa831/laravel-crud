@extends('welcome')
@section('content')

<div class="col-md-4 m-auto border p-3 mt-3 border-danger">
    <h2 class="text-center text-warning">Update Product</h2>
    <form action="updateData" method="get">
        <div class="mb-2">
            <label for="">Product Name</label>
            <input type="text" class="form-control" name="product_name" value="{{ $product_name }}" id="">
        </div>
        <div class="mb-2">
            <label for="">Product Price</label>
            <input type="text" class="form-control" name="product_price" value="{{ $product_price }}" id="">
        </div>
        <br>
        <input type="hidden" name="id" value="{{ $product_id }}">
        <button type="submit" class="btn btn-outline-warning">Update</button>
    </form>
</div>

@endsection