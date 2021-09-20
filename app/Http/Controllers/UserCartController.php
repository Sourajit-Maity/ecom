<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\UserCart;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class UserCartController extends Controller
{
    private  $per_page = 10;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function shoppingCart()
    {
        return view('Welcome.shopping-cart');
    }

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

        $UserCart = UserCart::delete($id);
        return redirect()->route('welcome.shopping-cart')
                        ->with('success','Company deleted successfully');
    }

    public function addToCart(Request $request)
    {
       try{

        $validator = Validator::make($request->all(), [ 
            "product_id" =>  "required",
            "quantity" =>  "",
        ]);

        if($validator->fails()) {
            return response()->json(["validation_errors" => $validator->errors()]);
        }

        $products = UserCart::where('product_id',$request->product_id)->where('user_id',Auth::user()->id)->first();
        if($products) {
            return Response()->Json(["status"=>false,"message"=> 'Already added this product.']);
        }

        $user_cart = new UserCart;
        $user_cart->user_id = Auth::user()->id;
        $user_cart->product_id = $request->product_id;
        $user_cart->quantity = $request->quantity ?? 1;
        $user_cart->save();

        return Response()->Json(["status"=>true,"message"=> 'Product successfully added your cart.']);

       }catch(\Exception $e) {
           return Response()->Json(["status"=>false,"message"=> 'Something went wrong. Please try again.']);
      }
    }

}
