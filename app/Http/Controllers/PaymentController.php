<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\PaymentExecution;
use App\Property;
use Session;
use App\Http\Controllers\Input;
use URL;

class PaymentController extends Controller
{
    public $_api_context; 
    public function __construct()
    {
 
        /** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
 
    }

    public function payWithpaypal(Request $request)
    {
 
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
 
        $item_1 = new Item();
 
        $item_1->setName('Featured') /** item name **/
            ->setCurrency('INR')
            ->setQuantity(1)
            ->setPrice(500); /** unit price **/
 
        $item_list = new ItemList();
        $item_list->setItems(array($item_1));
 
        $amount = new Amount();
        $amount->setCurrency('INR')
            ->setTotal(500);
 
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Making your Property as Featured Property');
 
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('status')) /** Specify return URL **/
            ->setCancelUrl(URL::route('status'));
 
        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        /** dd($payment->create($this->_api_context));exit; **/
        try {
 
            $payment->create($this->_api_context);
 
        } catch (\PayPal\Exception\PPConnectionException $ex) {
 
            if (\Config::get('app.debug')) {
 
                \Session::put('error', 'Connection timeout');
                return Redirect::route('status');
 
            } else {
 
                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::route('status');
 
            }
 
        }
 
        foreach ($payment->getLinks() as $link) {
 
            if ($link->getRel() == 'approval_url') {
 
                $redirect_url = $link->getHref();
                break;
 
            }
 
        }
 
        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());
 
        if (isset($redirect_url)) {
 
            /** redirect to paypal **/if($request->hasFile('filename')){
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
            $property->featured = 1;
            $property->payment_id = $payment->getId();
            $property->filename = $fileNameToStore;
            $property->save();
            return redirect('/status');
            // return Redirect::away($redirect_url);

 
        }
 
        \Session::put('error', 'Unknown error occurred');
        return Redirect::route('paywithpaypal');
 
    }


    public function getPaymentStatus()
    {
        /** Get the payment ID before session clear **/
        return redirect('/my-property');
 
    }
}
