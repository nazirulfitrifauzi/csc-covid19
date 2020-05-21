<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Visitor;


class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $this->validate($request,[
        'name' => 'required',
        'designation' => 'required',
        'company' => 'required',
        'visitingwho' => 'required',
        'quest1' => 'required',
        'quest2' => 'required',
        'quest3' => 'required',
        'quest4' => 'required',
        'quest5' => 'required',
        'quest6' => 'required',

        ],

        [
        'name.required'          => 'The full name field is required',
        'designation.required'   => 'The designation field is required',
        'company.required'       => 'The company field is required.',
        'visitingwho.required'   => 'The visiting who field is required.',
        'quest1.required'        => 'Please answer questions 1',
        'quest2.required'        => 'Please answer questions 2',
        'quest3.required'        => 'Please answer questions 3',
        'quest4.required'        => 'Please answer questions 4',
        'quest5.required'        => 'Please answer questions 5',
        'quest6.required'        => 'Please answer questions 6',
        
 
        ]);  


        Visitor::create($request->all());
        return redirect()->back()->with('success','Thank your for your time!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
