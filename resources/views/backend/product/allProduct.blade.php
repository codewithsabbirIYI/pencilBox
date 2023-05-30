@extends('backend.master')

@section('mainBody')
<div class="row">
    <div class="col-12 mx-auto">
        <div class="card border-top border-0 border-4 border-info">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                        </div>
                        <h5 class="mb-0 text-info">All Product</h5>
                    </div>
                    <hr>
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>#SL </th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Cost Prise</th>
                                <th>Sell Prise</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @if (count($products) > 0)
                            @foreach ($products as $key => $product)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$product->product_code}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->product_desc}}</td>
                                        <td>{{$product->cost_price}}</td>
                                        <td>{{$product->sale_price}}</td>
                                        <td>{{$product->quantity}}</td>
                                        <td>{{$product->status}}</td>
                                        <td>
                                            <a href="{{Route('edit.product', $product->id)}}" class="btn btn-info btn-xm">Edit</a>
                                            <a href="{{Route('delete.product', $product->id)}}" class="btn btn-danger btn-xm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                           @else
                           <tr>
                                <td colspan="9" class="text-center text-danger">No Data To Show</td>

                            </tr>
                           @endif

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#SL </th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Cost Prise</th>
                                <th>Sell Prise</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
