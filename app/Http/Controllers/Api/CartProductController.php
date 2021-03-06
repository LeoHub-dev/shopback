<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CartProduct;
use Illuminate\Http\Request;

class CartProductController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = CartProduct::updateOrCreate(['product_id' => $request->input('product_id'), 'cart_id' => $request->input('cart_id')], $request->only('quantity'));
        if($data){
            return response()->json([
                'data' => 'Guardado'
            ]);
        } else {
            return response()->json([
                'data' => 'No se pudo crear'
            ], 402);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CartProduct  $cartProduct
     * @return \Illuminate\Http\Response
     */
    public function show(CartProduct $cartProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CartProduct  $cartProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartProduct $cartProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartProduct  $cartProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        error_log(json_encode($request->all()));
        CartProduct::where([
            'product_id' => $request->input('product_id'),
            'cart_id' => $request->input('cart_id')
        ])->first()->delete();
    }
}
