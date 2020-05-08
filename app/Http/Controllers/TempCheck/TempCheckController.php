<?php

namespace App\Http\Controllers\TempCheck;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Temp;
use Carbon\Carbon;
use DB;

class TempCheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tempcheck.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     $checker = Carbon::today();


         $user =Temp::where('name',$request->name)->whereDate('created_at', $checker)->first();
         

        
            
        if(empty($user)) { 


        Temp::create([
           'name'            =>  $request->get('name'),
           'temperature'     =>  $request->get('temperature'), 
        ]);

         $checktemp = $request->temperature;
         $checkname = $request->name;

         // dd($checktemp);
       
        return redirect()->back()->with('success','Done! Your temperature has been recorded')
        ->with('checktemp',$checktemp )->with('checkname',$checkname );
       }

       else{

          return redirect()->back()->with('failed','Your temperature has been recorded for today');
       }
         
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
