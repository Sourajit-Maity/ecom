<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Invoice;
use Auth;
use Redirect;
use Session;


class PaymentController extends Controller
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
    public function PaypalPaymentSuccess(Request $request){
    	// return $request->all;
    	$payment = new Payment();
    	$payment->user_id = \Auth::user()->id;
    	$payment->method = "paypal";
    	$payment->amount = $request->purchase_units[0]['amount']['value'];
    	$payment->currency = $request->purchase_units[0]['amount']['currency_code'];
    	$payment->order_id = $request->id;
    	$payment->returned_status = $request->status;
    	$payment->email = $request->payer['email_address'];
    	$payment->merchant_id = $request->payer['payer_id'];
    	$payment->full_name = $request->payer['name']['given_name'] . " " . $request->payer['name']['surname'];
    	$payment->address = $request->payer['address']['address_line_1'] . ", " . $request->payer['address']['admin_area_2'];
    	$payment->phone = $request->payer['phone']['phone_number']['national_number'];
    	$payment->postal_code = $request->payer['address']['postal_code'];
    	$payment->country_code = $request->payer['address']['country_code'];
    	$payment->total_response = json_encode($request->all());
    	$payment->status = 1;
    	$payment->save();

        $user = Auth::user();
        $user->update(['active' => 2]);

    	return [
    		"success" => true
    	];

    }

    function errorAndDie($error_msg) {
        global $cp_debug_email;
        if (!empty($cp_debug_email)) {
            $report = 'Error: '.$error_msg."\n\n";
            $report .= "POST Data\n\n";
            foreach ($_POST as $k => $v) {
                $report .= "|$k| = |$v|\n";
            }
            mail($cp_debug_email, 'CoinPayments IPN Error', $report);
        }
        die('IPN Error: '.$error_msg);
    }

    public function IPNHandler(Request $request){

        // $payment = new Payment();
        // $payment->user_id = 1;
        // $payment->total_response = json_encode($request->all());
        // $payment->save();
        // die();

        // // Fill these in with the information from your CoinPayments.net account.
        $cp_merchant_id = env('COINPAYMENT_MARCHANT_ID');
        $cp_ipn_secret = env('COINPAYMENT_IPN_SECRET');
        // $cp_debug_email = '';

        // //These would normally be loaded from your database, the most common way is to pass the Order ID through the 'custom' POST field.
        // $order_currency = 'USD';
        // $order_total = 10.00;

        

        // if (!isset($request->ipn_mode) || $request->ipn_mode != 'hmac') {
        //     errorAndDie('IPN Mode is not HMAC');
        // }

        // if (!isset($_SERVER['HTTP_HMAC']) || empty($_SERVER['HTTP_HMAC'])) {
        //     errorAndDie('No HMAC signature sent.');
        // }

        // $request = file_get_contents('php://input');
        // if ($request === FALSE || empty($request)) {
        //     errorAndDie('Error reading POST data');
        // }

        if (!isset($request->merchant) || $request->merchant != trim($cp_merchant_id)) {
            errorAndDie('No or incorrect Merchant ID passed');
        }

        // $hmac = hash_hmac("sha512", $request, trim($cp_ipn_secret));
        // if (!hash_equals($hmac, Request::server('HTTP_HMAC')) {
        // //if ($hmac != $_SERVER['HTTP_HMAC']) { <-- Use this if you are running a version of PHP below 5.6.0 without the hash_equals function
        //     errorAndDie('HMAC signature does not match');
        // }

        // HMAC Signature verified at this point, load some variables.

        $ipn_type = $request->ipn_type;
        $txn_id = $request->txn_id;
        $item_name = $request->item_name;
        $item_number = $request->item_number;
        $amount1 = floatval($request->amount1);
        $amount2 = floatval($request->amount2);
        $currency1 = $request->currency1;
        $currency2 = $request->currency2;
        $status = intval($request->status);
        $status_text = $request->status_text;

        if ($ipn_type != 'button') { // Advanced Button payment
            die("IPN OK: Not a button payment");
        }

        //depending on the API of your system, you may want to check and see if the transaction ID $txn_id has already been handled before at this point

        // Check the original currency to make sure the buyer didn't change it.
        if ($currency1 != "USD") {
            errorAndDie('Original currency mismatch!');
        }

        // // Check amount against order total
        // if ($amount1 < $order_total) {
        //     errorAndDie('Amount is less than order total!');
        // }
     
        if ($status >= 100 || $status == 2) {
            // payment is complete or queued for nightly payout, success
            if(isset($request->invoice)){
                $check_invoice = Invoice::where('invoice_id', $request->invoice)->first();
                if($check_invoice){
                    $user_id = $check_invoice->user_id;
                    $crytopayment = Payment::updateorCreate(
                                ['user_id' => $user_id, 'method' => 'crypto', 'order_id' => $request->invoice],
                                [
                                    'currency' => $request->currency2,
                                    'amount' => $request->amount2,
                                    'returned_status' => $request->status,
                                    'email' => $request->email,
                                    'merchant_id' => $request->merchant,
                                    'address' => $request->address1. ", ". $request->city. ", " . $request->state,
                                    'phone' => $request->phone,
                                    'postal_code' => $request->zip,
                                    'country_code' => $request->country,
                                    'total_response' => json_encode($request->all()),
                                    'status' => 1
                                ]
                    );

                    $user = Auth::user();
                    $user->update(['active' => 2]);
                }
            }

        } else if ($status < 0) {
            //payment error, this is usually final but payments will sometimes be reopened if there was no exchange rate conversion or with seller consent
        } else {
            //payment is pending, you can optionally add a note to the order page
        }
        die('IPN OK');
    }

    public function makeStripePayment(Request $request){
        try{

            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $stripe = new \Stripe\StripeClient(
                      env('STRIPE_SECRET')
                    );

            $customer = \Stripe\Customer::create([
                'email' => Auth::user()->email,
                'name' => Auth::user()->first_name.' '.Auth::user()->last_name,
                    "address"=> [
                        "line1"=> "1main st",
                        "city"=> "california",
                        "state"=> "CA",
                        "country"=> 'US',
                        "postal_code"=> '93003',
                    ]
                ]);

            /*$stripe_data = $stripe->charges->create([
                    "amount" => 749 * 100,
                    "currency" => "USD",
                    "source" => $request->stripeToken,
                    "description" => "YourFutures Premium Payment",
            ]);*/


            $payment_intent = \Stripe\PaymentIntent::create([
              'amount' => 1000,
              'currency' => 'usd',
              'confirmation_method' => 'manual',
              'confirm' => true,
              'return_url' => route('stripe.status'),
              'payment_method_data' => [
                    'type'=>'card',
                    'card'=>['token'=>$request->stripeToken]
                    ],
            ]);
            $payment_intent = \Stripe\PaymentIntent::retrieve(
                        $payment_intent->id
                    );

            if($payment_intent->status == "requires_action")
            {
                //return Redirect::to($payment_intent->next_action->use_stripe_sdk->stripe_js);
                return Redirect::to($payment_intent->next_action->redirect_to_url->url);
            }
            else
            {
                return redirect()->back()->with('error', 'Something Went Wrong');
            }
      
            Session::flash('error', 'Something Went Wrong');
            return back();
        }
        catch(\Stripe\Exception\ApiErrorException $e) {
            
            $msgAction = $e->getMessage();
            return redirect()->route('welcome.billing-address')->with('error', $msgAction);
        }
        catch(\Stripe\Exception\CardException $e) {
            $msgAction = $e->getMessage();
            return redirect()->route('welcome.billing-address')->with('error', $msgAction);
        }
        catch (\Stripe\Exception\InvalidRequestException $e) {
            $msgAction = $e->getMessage();
            return redirect()->route('welcome.billing-address')->with('error', $msgAction);
        } catch (\Stripe\Exception\AuthenticationException $e) {
            $msgAction = $e->getMessage();
            return redirect()->route('welcome.billing-address')->with('error', $msgAction);
        }
        catch (\Stripe\Exception\ApiConnectionException $e) {
            $msgAction = $e->getMessage();
            return redirect()->route('welcome.billing-address')->with('error', $msgAction);
        }
        catch (Exception $e) {
            $msgAction = $e->getMessage();
            return redirect()->route('welcome.billing-address')->with('error', $msgAction);
        }

    }

    public function stripePaymentStatus(Request $request)
    {
        try{

            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

            $payment_intent_id = $request->payment_intent;

            $payment_intent = \Stripe\PaymentIntent::retrieve(
                        $payment_intent_id
                    );
            $payment_status = $stripe->paymentIntents->confirm(
                   $payment_intent_id
                );

            if($payment_status->status == "succeeded")
            {
                
                Payment::create([
                  'user_id' => Auth::user()->id,
                  'amount' => $payment_status->amount/100,
                  'full_name' => Auth::user()->first_name.' '.Auth::user()->last_name,
                  'email' =>Auth::user()->email,
                  'method' => 'Stripe',
                  'order_id' => $payment_intent_id,
                  'status' => 1,
                  'returned_status' => $payment_status->status,
                  'currency' => $payment_status->currency,
                  'total_response' => json_encode($payment_status),
                ]);

                $user = Auth::user();
                $user->update(['active' => 2]);

                return redirect()->route('welcome.billing-address')->with('success', 'Payment successfully made.');
            }

            $msgAction = 'Something Went Wrong';
            return redirect()->route('welcome.billing-address')->with('error', $msgAction);

        }
        catch(\Stripe\Exception\ApiErrorException $e) {
            
            $msgAction = $e->getMessage();
            return redirect()->route('welcome.billing-address')->with('error', $msgAction);
        }
        catch(\Stripe\Exception\CardException $e) {
            $msgAction = $e->getMessage();
            return redirect()->route('welcome.billing-address')->with('error', $msgAction);
        }
        catch (\Stripe\Exception\InvalidRequestException $e) {
            $msgAction = $e->getMessage();
            return redirect()->route('welcome.billing-address')->with('error', $msgAction);
        } catch (\Stripe\Exception\AuthenticationException $e) {
            $msgAction = $e->getMessage();
            return redirect()->route('welcome.billing-address')->with('error', $msgAction);
        }
        catch (\Stripe\Exception\ApiConnectionException $e) {
            $msgAction = $e->getMessage();
            return redirect()->route('welcome.billing-address')->with('error', $msgAction);
        }
        catch (Exception $e) {
            $msgAction = $e->getMessage();
            return redirect()->route('welcome.billing-address')->with('error', $msgAction);
        }
    }
}
