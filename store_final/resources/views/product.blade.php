@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="GET-HEAD" action="{{ url('/product') }}">
                        {{ csrf_field() }}
                      
                        <div class="box-content">

                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                            
                                </tr>
                                </thead>   
                                    <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->product_id }}</td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>{{ $product->product_price }}</td>
                                            <td>{{ $product->product_description }}</td>
                                            <td>{{ $product->product_img }}</td>
                                            <td><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Delete</button> </td>
                                            <td><button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> Edit</button> </td>
                                        </tr>
                                         
                                        @endforeach   

                                    </tbody>
                                </table> 
                                 @foreach($products as $product)
                                        <div class="col-md-3 col-sm-6 hero-feature">
                                            <div class="thumbnail">
                                                  <img src="{{ $product->p_img }}" class="img-thumbnail" 
         alt="">
                                                <div class="caption">
                                                    <h3>{{$product->product_name }}</h3>
                                                    <p>{{ $product->product_description }}</p>
                                                    <p>{{ $product->product_price }}</p>
                                                    <p>
                                                        <a href="#" class="btn btn-danger">Delete</a>
                                                        <a href="#" class="btn btn-warning">Edit</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                              @endforeach             
                            </div>
                        </div><!--/span-->

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
