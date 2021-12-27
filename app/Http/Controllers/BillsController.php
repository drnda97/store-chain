<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Bought_Prododucts;
use Illuminate\Http\Request;

class BillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Bill::with('shop', 'customer', 'product')->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required',
            'shop_id' => 'required',
            'customer_id' => 'required',
            'products' => 'required|object'
        ]);
        $bill = Bill::create($request->all());

        foreach($request->input('products') as $product) {
            $bought = new Bought_Prododucts();
            $bought->bill_id = $bill->id;
            $bought->product_id = $product->id;
            $bought->save();
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
        return Bill::find($id);
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
        $bill = Bill::find($id);
        $bill->update($request->all());
        return $bill;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Bill::destroy($id);
    }
}
