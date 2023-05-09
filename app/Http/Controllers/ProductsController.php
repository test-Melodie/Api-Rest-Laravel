//App/Http/Controllers/ProductsController

<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Products $product
     * @return \Illuminate\Http\Response
     */
    public function show(Products $product)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Products $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Products $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $product)
    {
        //
    }
}