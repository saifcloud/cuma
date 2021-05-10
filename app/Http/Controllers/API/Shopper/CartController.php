<?php

namespace App\Http\Controllers\API\Shopper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if(empty($request->token)) return response()->json(['status'=>false,'message'=>'Authorization token is required.']);

        if(empty($request->user_id)) return response()->json(['status'=>false,'message'=>'User is required.']);


        $user = User::where('id',$request->user_id)
        ->where('role',1)
        ->where('status',1)
        ->where('is_deleted',0)
        ->where('auth_token',$request->token)
        ->first();
        
        if(empty($user)) return response()->json(['status'=>false,'message'=>'Unauthorize user.']);


       $cartRaw = Cart::where('status',1)->where('is_deleted',0)->get();
        
        $cartRaw2 =[];
        foreach ($cartRaw as $key => $value) {
            # code...
            $cartRaw2[$value->vendor_id][] = [
                'id'=>$value->product->id,
                'image'=>$value->product->img1,
                'product_title'=>$value->product->title,
                'price'=>$value->product->price,
                'qty'=>$value->qty
            ]; 
        }



          // 
         $cart =[];
        foreach ($cartRaw2 as $key => $value) {
           
            $prod = [];
            $totalAmount = [];
            foreach ($value as $key1 => $value1) {
                # code...
                $prod[] = [
                    'id'=>$value1['id'],
                    'image'=>$value1['image'],
                    'title'=>$value1['product_title'],
                    'price'=>$value1['price'],
                    'qty'=>$value1['qty']
                ];
                $totalAmount[] = $value1['price'] * $value1['qty'];


            }

            $vendor = User::find($key);
            $cart[] =  [
                'id' => $vendor->id,
                'name' => $vendor->name,
                'total_amount' =>array_sum($totalAmount),
                'products'=>$prod
            ];
        }

        // return $cart;

        $data['status'] = true;
        $data['data']   = ['products'=>$cart];
        $data['message']= "Cart data";
        return response()->json($data);



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
        if(empty($request->token)) return response()->json(['status'=>false,'message'=>'Authorization token is required.']);
        if(empty($request->user_id)) return response()->json(['status'=>false,'message'=>'User is required.']);


        $user = User::where('id',$request->user_id)
        ->where('role',1)
        ->where('status',1)
        ->where('is_deleted',0)
        ->where('auth_token',$request->token)
        ->first();
        
        if(empty($user)) return response()->json(['status'=>false,'message'=>'Unauthorize user.']);

        if(empty($request->product_id)) return response()->json(['status'=>false,'message'=>'Product id is required.']);

        if(empty($request->color_id)) return response()->json(['status'=>false,'message'=>'Color id is required.']);

        if(empty($request->size_id)) return response()->json(['status'=>false,'message'=>'SIze id is required.']);
       
        $product = Product::find($request->product_id);
        
        $checkcart = Cart::where('product_id',$product->id)
                                         ->where('user_id',$user->id)
                                         ->where('vendor_id',$product->vendor_id)
                                         ->where('color_id',$request->color_id)
                                         ->where('size_id',$request->size_id)
                                         ->where('is_deleted',0)
                                         ->first();

        if(!empty($checkcart)){
             $checkcart->qty =  $checkcart->qty +1;
             $checkcart->save();
        }else{
            $cart = new Cart;
            $cart->product_id = $product->id;
            $cart->user_id    = $user->id;
            $cart->vendor_id  = $product->vendor_id;
            $cart->qty        = 1;
            $cart->color_id   = 1;
            $cart->size_id   = 1;
            $cart->save();  
        }


      

        $data['status'] = true;
        $data['message'] = "Product added in cart successfully.";
        return response()->json($data);



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