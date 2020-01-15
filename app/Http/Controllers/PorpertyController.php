<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Property;
use Illuminate\Support\Facades\Auth;
use DB;
use Intervention\Image\ImageManagerStatic as Image;

class PorpertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::where(['userid'=>Auth::user()->id])->orderBy('id','desc')->get();
        return view('layouts.myproperty')->with('properties',$properties);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.submitproperty');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $images=array();
        if($files=$request->file('filename')){
            foreach($files as $file){
                // Get filename with the extension
                $filenameWithExt = $file->getClientOriginalName();
                // Resize the Image
                $image_resize = Image::make($file->getRealPath());  
                //Resize Step 2
                $image_resize->resize(1000, 500)->encode('jpg');;
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $file->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                //$path = $image_resize->storeAs('public/property_images', $fileNameToStore);
                $store = Storage::put('public/image/'.$fileNameToStore, $image_resize->__toString());
                $images[]=$fileNameToStore;
            }
        }
        else {
            $fileNameToStore = 'noimage.jpg';
        }
        $property = new Property;
        $property->userid = auth()->user()->id;
        $property->location = $request->input('location');
        $property->status = $request->input('status');
        $property->type = $request->input('type');
        $property->beds = $request->input('beds');
        $property->baths = $request->input('baths');
        $property->sqft = $request->input('sqft');
        $property->price = $request->input('price');
        $property->address = $request->input('address');
        $property->filename = implode("|",$images);
        $property->save();
        return redirect('/submit-property');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::find($id);
        return view('property.view')->with('property',$property);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $properties = Property::find($id);
        return view('property.edit')->with('properties',$properties);
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
        if($request->hasFile('filename')){
            // Get filename with the extension
            $filenameWithExt = $request->file('filename')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('filename')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('filename')->storeAs('public/property_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $property = Property::find($id);
        $property->userid = auth()->user()->id;
        $property->location = $request->input('location');
        $property->status = $request->input('status');
        $property->type = $request->input('type');
        $property->beds = $request->input('beds');
        $property->baths = $request->input('baths');
        $property->sqft = $request->input('sqft');
        $property->price = $request->input('price');
        $property->address = $request->input('address');
        $property->verify = 0;
        $property->filename = $fileNameToStore;
        $property->save();
        return redirect('/submit-property')->with('success','Property Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::find($id);
        
        //Check if post exists before deleting
        if (!isset($property)){
            return redirect('/submit-property')->with('error', 'No Property Found');
        }
        // Check for correct user
        if(auth()->user()->id !==$property->userid){
            return redirect('/submit-property')->with('error', 'Unauthorized Page');
        }
        if($property->filename != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/property_images/'.$property->filename);
        }
        
        $property->delete();
        return redirect('/submit-property')->with('success', 'Property Removed');
    }
}
