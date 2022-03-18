<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Office;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductControler extends Controller
{
    public function __construct()
    {
        // $this->middleware('can:products.index');
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index')->with(['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $offices = Office::all();
        return view('products.create')->with(['categories'=>$categories,'offices'=>$offices]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:30'],
            'description' => ['required','max:100'],
            'category_id' => ['required'],
            'office_id' => ['required'],
            'price' => ['required','max:5'],
            'date_p' => ['required'],
        ]);
        $product = Product::create($request->all());
        return redirect()->route('products.create');
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
    public function edit(Product $product)
    {
        $categories = Category::all();
        $offices = Office::all();
        return view('products.edit')->with(['product'=>$product,'categories'=>$categories,'offices'=>$offices]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:30'],
            'description' => ['required','max:100'],
            'category_id' => ['required'],
            'office_id' => ['required'],
            'price' => ['required','max:5'],
            'date_p' => ['required'],
            'state' => ['required'],
            'comments' => ['required','max:100'],
        ]);
        $product->state = $request->state;
        $product->comments = $request->comments;
        $product->update();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product = Product::findOrFail($request->mi_contacto);
        $product->delete();
        return redirect()->route('products.index');
    }
}
