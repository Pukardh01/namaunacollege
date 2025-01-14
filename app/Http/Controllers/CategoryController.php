<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Categorys;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=Categorys::all();
        return view('backend.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
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
        $category=new Categorys();
        $category->title=$request->title;
        $category->description=$request->description;
        $category->save();
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
        $category=Categorys::find($id);
       return view('backend.category.edit',compact('category'));
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
        $category=Categorys::find($id);
        $category->title=$request->title;
        $category->description=$request->description;
        $category->save();
        return redirect()->back()->with('message','Data save successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category=Categorys::find($id);
        $category->delete();
        return redirect()->back()->with('message','Data Deleted successfully');
    }
}
