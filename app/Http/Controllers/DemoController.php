<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Property;
use Illuminate\Support\Facades\Auth;
use DB;

class DemoController extends Controller
{
    public function prop(){
        $recents = DB::table('properties')
                ->limit(4)
                ->where('verify',1)
                ->orderBy('id', 'desc')
                ->get();
        $featured = DB::table('properties')
        ->limit(8)
        ->where('verify',1)
        ->where('featured',1)
        ->orderBy('id', 'desc')
        ->get();
        
        return view('property.index')->with('recents',$recents)->with('featureds',$featured);
    }
    public function allprops(Request $request){
        $query =  $request->input('search');
            if($query != '')
            {
                $properties = DB::table('properties')
                ->where('location','like','%'.$query.'%')
                ->orWhere('address','like','%'.$query.'%')
                ->orWhere('beds','like','%'.$query.'%')
                ->orWhere('baths','like','%'.$query.'%')
                ->orWhere('status','like','%'.$query.'%')
                ->orWhere('type','like','%'.$query.'%')
                ->orWhere('sqft','like','%'.$query.'%')
                ->orWhere('price','like','%'.$query.'%')
                ->orderBy('id','desc')
                ->get();
                return view('property.listproperty')->with('properties',$properties);
            }
            else{
                $properties = DB::table('properties')
                ->orderBy('id','desc')
                ->get();
                return view('property.listproperty')->with('properties',$properties);
            }
        
    }
    
    public function all(){
        $properties = Property::all();
        
        return view('property.allproperty')->with('properties',$properties);
    }

    public function pay($id){
 
        $api = new \Instamojo\Instamojo(
               config('services.instamojo.api_key'),
               config('services.instamojo.auth_token'),
               config('services.instamojo.url')
        );
        global $idd;
        $idd = $id;
        $properties = DB::table('properties')->where('id', $id)->get();
        $purpose = "Featured Property";
        $amount  = 500;

       try {
           $response = $api->paymentRequestCreate(array(
                    "purpose" => $purpose,
                    "amount" => $amount,
                    "buyer_name" => Auth::user()->name,
                    "send_email" => true,
                    "email" => Auth::user()->email,
                    "redirect_url" => "http://127.0.0.1:8000/pay-success/$id/"
            ));
                
            header('Location: ' . $response['longurl']);
            exit();
        }catch (Exception $e) {
            print('Error: ' . $e->getMessage());
        }
    }
    
    public function success($id){
         
        try {
    
            $api = new \Instamojo\Instamojo(
                config('services.instamojo.api_key'),
                config('services.instamojo.auth_token'),
                config('services.instamojo.url')
            );
        
            $response = $api->paymentRequestStatus(request('payment_request_id'));
        
            if( !isset($response['payments'][0]['status']) ) {
                dd('payment failed');
            } else if($response['payments'][0]['status'] != 'Credit') {
                dd('payment failed');
            }
            $properties = DB::table('properties')->where('id', $id)->get();
            $row = DB::table('properties')
            ->where('id', $properties[0]->id)
            ->update(['featured' => 1],['payment-id' => request('payment_id')]);
            return redirect('/submit-property');
        }catch (\Exception $e) {
            return ($e);
            dd('payment failed');
        }
        dd($response);
    }

}
