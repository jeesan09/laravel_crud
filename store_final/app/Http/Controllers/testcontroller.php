<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Collective\Html\Eloquent\FormAccessible;


use App\Http\Requests;
use App\testmodel;

//use Illuminate\Support\Facades\Redirect;
//use DB;
//use App\Http\Controllers\Controller;


class testcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $table = testmodel::all();
        return view('show_all',['html_index_var' => $table]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test_page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $table= new testmodel;
        // $table = testmodel::where('test_id', '=', $id)->first();
        $table->test_text=$request->input('test_text');
    
        $table->save();
         
     // return view('show',['html_var' => $table]);
    
    
      return Redirect()->route('test.show',$table->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // $table= new testmodel; 
      // $table = testmodel::find(1);
      $table = testmodel::where('test_id', '=', $id)->first();
       // $table=testmodel::find($id);
       return view ('show')->with("html_var",$table);
      
   //  return view('show',['html_var' => $table]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
      $table = testmodel::where('test_id', '=', $id)->first();
       // $table=testmodel::find($id);
       return view ('show_edit')->with("html_var",$table);
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //

         //$table= new testmodel;
      //   $table = request()->all();
       $table = testmodel::where('test_id', '=', $id)->first();
      //  $table= testmodel::where('test_id', '=', $id)->update($table);
        // $table = testmodel::where('test_id', $id)->first();
     //   $table=testmodel::find($id);
      //  $table->update($request->all());
       // $table->test_id=$request->id;
        $table->test_text=$request->input('test_text');
    
        $table->save();

       // testmodel::find($id)->update($request->all());
        

       // return view ('show')->with("html_var",$table);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
