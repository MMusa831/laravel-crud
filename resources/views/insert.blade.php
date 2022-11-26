@extends('welcome')
@section('content')
<center>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-success mt-5 fw-bold fs-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add Product
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">CRUD APP</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="insertData" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name" id="">
                        </div>
                        <div class="mb-2">
                            <input type="text" class="form-control" placeholder="Enter Product Price" name="product_price" id="">
                        </div>
                        <div class="mb-2">
                            <input type="file" class="form-control" name="product_image" id="">
                        </div>
                        <button type="submit" class="btn btn-outline-success fw-bold mt-3 fs-4">Add Product</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</center>
<div class="container">
    <table class="table mt-5">
        <thead class="bg-info text-white fw-bold">
            <th class="px-5">Product Num</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Image</th>
        </thead>
        <tbody class="text-success bg-light fw-bold fs-4">
            @foreach($data as $item)
            <tr>
                <td class="pt-4">{{ $item['id'] }}</td>
                <td class="pt-4">{{ $item['product_name'] }}</td>
                <td class="pt-4">{{ $item['product_price'] }}</td>
                <td><img src="images/{{ $item['product_image'] }}" width="70px" height="70px" alt=""></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
