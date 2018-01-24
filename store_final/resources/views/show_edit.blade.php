@extends('layouts.app')

@section('content')

<div class="panel-heading" >Edditing page</div>
   
	 {{ Form::model($html_var, array('action' => array('testcontroller@update', $html_var->id))) }}  
   <!--  <form class="form-horizontal" role="form" method="POST" action="{{ url('/update.{{$html_var->id}') }}"> -->
	
  
   
	 {{ Form::text('test_id',$html_var->test_id, array_merge(['class' => 'form-control'])) }}

	 {{ Form::text('test_text',$html_var->test_text, array_merge(['class' => 'form-control'])) }}
     
				

					   <div style="margin-left: 100px;">

					   	    {{Form::submit('Save changes',['class'=>'btn btn-success btn-md'])}}
					   	    <a href="">
					   	    <button class="btn btn-warning btn-md"><span class="glyphicon glyphicon-cancel"></span>Cancel </button> </a>
					   </div>

			   
				


			</div>

   
    {!! Form::close() !!}

			
</form>
	


                                            
                                            



@endsection