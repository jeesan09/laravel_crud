@extends('layouts.app')

@section('content')
  
                      
                        <div class="box-content">

                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th></th>
                                    <th></th>
                                  
                                            
                                </tr>
                                </thead>   
                                    <tbody>
                                        @foreach($html_index_var as $html_index_var)
                                        <tr>
                                            <td>{{ $html_index_var->test_id }}</td>
                                            <td>{{ $html_index_var->test_text }}</td>
                                           
                                            <td><a href="{{ route('test.edit',$html_index_var->test_id) }}"><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Delete</button> </a> </td>
                                            <td><a href="{{ route('test.edit',$html_index_var->test_id) }}"><button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> Edit</button></a> </td>
                                        </tr>
                                         
                                        @endforeach   

                                    </tbody>
                                </table> 
                                         


@endsection