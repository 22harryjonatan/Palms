<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Price::latest()->get();
        return response()->json([
            'success' => true,
            'message' => 'List data price',
            'data' => $prices
        ], 200);
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
         $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required',
            'content' => 'required',
        ]);
        $prices = Price::create([
            'title' => $request->title,
            'price' => $request->price,
            'content' => $request->content
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Price created',
            'data' => $prices
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        return response()->json([
            'success' => true,
            'message' => 'Detail data price',
            'data' => $price
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function edit(Price $price)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price $price)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required',
            'content' => 'required',
        ]);
        $price = Price::find($price->id);

        if ($price) {
            $price->update([
                'title' => $request->title,
                'price' => $request->price,
                'content' => $request->content
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Price updated',
                'data' => $price
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Price not found'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
        if ($price) {
            $price->delete();

            return response()->json([
                'success' => true,
                'message' => 'Price deleted'
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Price not found'
        ], 404);
    }
}
