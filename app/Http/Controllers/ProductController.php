<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Categorys;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $brand = Brand::all();
        $category = Categorys::all();

        return view('backend.product.create',compact('brand','category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
        }
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->color = $request->color;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->size = $request->size;
        $product->quantity = $request->quantity;
        $product->image = $imageName;
        $product->save();


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $brand = Brand::all();
        $category = Categorys::all();

        return view('backend.product.edit',compact('product','category','brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
