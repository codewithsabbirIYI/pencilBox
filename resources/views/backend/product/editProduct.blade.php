@extends('backend/master')
@section('mainBody')
<div class="row">
    <div class="col-xl-9 mx-auto">
        <div class="card border-top border-0 border-4 border-info">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                        </div>
                        <h5 class="mb-0 text-info">Add Product</h5>
                    </div>
                    <hr>
                    <form action="{{ Route('update.product', $product->id) }}" method="post">
                        @csrf
                    <div class="row mb-3">
                        <label for="product_code" class="col-sm-3 col-form-label">Product Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="product_code" placeholder="Enter Product Code" name="product_code" value="{{$product->product_code}}">

                            @error('product_code')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="product_name" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="product_name" placeholder="Enter Product Name" name="product_name" value="{{$product->product_name}}">

                            @error('product_name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="product_desc" class="col-sm-3 col-form-label">Product Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="product_desc" rows="3" placeholder="Enter Product Description" name="product_desc" >{{$product->product_desc}}</textarea>

                            @error('product_desc')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="cost_price" class="col-sm-3 col-form-label">Product Cost Prise</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cost_price" placeholder="Enter Product Cost Prise" name="cost_price" value="{{$product->cost_price}}">

                            @error('cost_price')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="sale_price" class="col-sm-3 col-form-label">Product Sale Prise</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="sale_price" placeholder="Enter Product Sale Prise" name="sale_price" value="{{$product->sale_price}}">

                            @error('sale_price')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="quantity" class="col-sm-3 col-form-label">Product Qunatity</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="quantity" placeholder="Enter Product Quantity" name="quantity" value="{{$product->quantity}}">

                            @error('quantity')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-info px-5" name="product_add">Update</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
