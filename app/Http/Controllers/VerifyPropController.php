<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use DB;

class VerifyPropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::where(['verify'=> 1])->get();
        return view('layouts.verifiedproperty')->with('properties',$properties);
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
        //
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
    public function sold($id)
    {
        DB::table('properties')
                ->where('id', $id)
                ->update(['prop_status' => 1]);
        return redirect('/verify-property')->with('Success', 'Property Sold Verified');
    }
    public function rent($id)
    {
        DB::table('properties')
                ->where('id', $id)
                ->update(['prop_status' => 2]);
        return redirect('/verify-property')->with('Success', 'Property Rented Verified');
    }
}
