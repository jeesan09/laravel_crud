@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-2">
      <form class="form-horizontal" role="form" action="{{ url('/store') }}" method="POST">
                
        <fieldset>
          <!-- Form Name -->
          <legend>Product Details</legend>
      
          <hr class="colorgraph">

          <!-- Text input
          <div class="form-group">
            <div class="col-sm-4">
            {{Form::label('p_id','Product Id')}}
            {{Form::text('p_id',null,['class' => 'form-control', 'placeholder' => 'Product Id'])}}
            </div>
          </div>-->

          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-8">
            {{Form::label('p_name','Product Name')}}
            {{Form::text('p_name',null,['class'=>'form-control', 'placeholder' => 'Product Name'])}}
            </div>
          </div>
          
          <!-- Text input-->
          <div class="form-group">
          <div class="col-sm-8">
            {{Form::label('p_price','Price')}}
             {{Form::text('p_price',null,['class'=>'form-control', 'placeholder' => 'Price'])}}
            </div>
          </div>          
          
          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-8">
            {{Form::label('p_description','Description')}}
            {{Form::textarea('p_description',null,['class' => 'form-control', 'placeholder' => 'Description'])}}
            </div>
          </div>
          
          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-8">
            {{Form::label('p_img','Image')}}
            {{Form::file('p_img',null,['class' => 'form-control', 'placeholder' => 'Image', 'accept' => 'image/*'])}}
            </div>
          </div>
          <!-- Text input
          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Price</label>
            <div class="col-sm-4">
              <input type="text" placeholder="Price" class="form-control" name="price">
            </div>
          </div>-->

          <hr class="colorgraph">
          
<input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <div class="col-sm-offset-8 col-sm-4">
            {{Form::submit('Add Product', array('class' => 'btn btn-primary btn-block'))}}
              </div>
            </div>
          </div>

        </fieldset>               
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->

@endsection
