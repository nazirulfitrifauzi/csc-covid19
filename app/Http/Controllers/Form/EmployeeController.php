<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
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
        'nric' => 'required',
        'department' => 'required',
        'temperature' => 'required',
        'quest1' => 'required',
        'quest2' => 'required',
        'quest3' => 'required',
        'quest4' => 'required',
        'quest5' => 'required',
        'quest6' => 'required',
        'quest7' => 'required',
        'quest8' => 'required',
        'quest9' => 'required',
        'quest10' => 'required',
        ],

        [
        'name.required'   => 'The full name field is required',
        'nric.required'   => 'The staff NRIC field is required',
        'department.required'   => 'The department field is required.',
        'temperature.required'   => 'The temperature field is required.',
        'quest1.required' => 'Please answer questions 1',
        'quest2.required' => 'Please answer questions 2',
        'quest3.required' => 'Please answer questions 3',
        'quest4.required' => 'Please answer questions 4',
        'quest5.required' => 'Please answer questions 4.1',
        'quest6.required' => 'Please answer questions 4.2',
        'quest7.required' => 'Please answer questions 4.3',
        'quest8.required' => 'Please answer questions 4.4',
        'quest9.required' => 'Please answer questions 4.5',
        'quest10.required' =>'Please answer questions 5',
 
        ]);  


         Employee::create($request->all());
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
