@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-2">
      <form class="form-horizontal" role="form" action="{{ route('test.store') }}" method="POST">
                
        <fieldset>
          <!-- Form Name -->
          <legend>Test Page view</legend>
      
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
            {{Form::label('test_text','Test Text')}}
            {{Form::text('test_text',null,['class'=>'form-control', 'placeholder' => 'Product Name'])}}
            </div>
          </div>
          
                
          
          
          
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
