<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('admin.products.index', compact('products'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        // validate input
        $request -> validate([
            'name' => 'required',
            'description' => 'required',
            'details' => 'required'
        ]);

        //create new product
        Product::create($request->all());
        $product->name = $request->name;
        $product->description = $request->description;
        $product->details = $request->details;

        $product->save();
        
        //add images
        foreach ($request->file('images') as $imagefile) {
            $image = new Image;
            $path = $imagefile->store('/img/products', ['disk' => 'my-files']);
            $image->url = $path;
            $image->product_id = $product->id;
            $image->save();
          }
    
        //redirect user and friendly message
        return redirect()->route('products.index')->with('success', 'Produktas sukurtas sėkmingai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //show form
        return view('admin.products.edit', compact('product'));
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
        // validate input
        $request -> validate([
            'name' => 'required',
            'description' => 'required',
            'details' => 'required'
        ]);

        // update the product
        $product->update($request->all());

        // redirect user and friendly message
        return redirect()->route('products.index')->with('success', 'Produktas pataisytas sėkmingai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Product $product)
    {
        // delete the product
        $product->delete();

        //redirect and display success message
        return redirect()->route('products.index')->with('success', 'Produktas ištrintas sėkmingai');

    }
}
