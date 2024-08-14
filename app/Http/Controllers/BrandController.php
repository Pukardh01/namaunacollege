<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brand=Brand::all();
        return view('backend.brand.index',compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title"=>"required",
            "description"=>"required"

        ]);
        $brand=new Brand();
        $brand->title=$request->title;
        $brand->description=$request->description;
        $brand->save();
        return redirect()->back()->with('message','Data save successfully');
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
        $brand=Brand::find($id);
       return view('backend.brand.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "title"=>"required",
            "description"=>"required"

        ]);
        $brand=Brand::find($id);
        $brand->title=$request->title;
        $brand->description=$request->description;
        $brand->save();
        return redirect()->back()->with('message','Data save successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand=Brand::find($id);
        $brand->delete();
        return redirect()->back()->with('message','Data Deleted successfully');
    }
}
