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
                <form action="updatedelete">
                    <td class="pt-4"><input type="hidden" name="id" value="{{ $item['id'] }}">{{ $item['id'] }}</td>
                    <td class="pt-4"><input type="hidden" name="product_name" value="{{ $item['product_name'] }}">{{ $item['product_name'] }}</td>
                    <td class="pt-4"><input type="hidden" name="product_price" value="{{ $item['product_price'] }}">{{ $item['product_price'] }}</td>
                    <td><img src="images/{{ $item['product_image'] }}" width="70px" height="70px" alt=""></td>
                    <td><button type="submit" class='btn' name='update' value="Edite"><i class='fa-solid fa-pencil' style='color: green;'></i></button></td>
                    <td><button type="submit" class='btn' name='delete' value="remove"><i class='fa-solid fa-trash-can' style='color: red;'></i></button></td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection