<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $redirectTo = '/product';

       public function __construct()
       {
            $this->middleware('auth')->except('index', 'show');
       }

    public function index()
    {
      $products = Product::all();
      $categories = Category::all();
      return view('product.index', ['products' => $products, 'categories' => $categories]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::all();
      return view('product.create', ['categories' => $categories]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'photo' => 'image',
        'category_id' => 'integer'
      ]);

    if( $request->hasFile('photo')) {

        // $fileNameWithExt = $request->file('photo')->getClientOriginalName();
        // $fileName = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
        // $fileExtension = $request->file('photo')->getClientOriginalExtension();
        //
        // $fullFileName = $fileName.'_'.time().'.'.$fileExtension;

        // $request->file('photo')->storeAs('public/productPhotos', $fullFileName);

      $fullFileName =  $request->file('photo')->store('productPhotos');

    }
    else{
      $fullFileName = 'nophoto.jpg';
    }
//return $fullFileName;

     Product::create([
      'name' => request('name'),
      'description' => request('description'),
      'photo' => "https://storage.googleapis.com/shop-bagi/".$fullFileName,
      'price' => request('price'),
      'category_id' => request('category_id'),
    ]);

      return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
      return view('product.show', ['product'=> $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
      $categories = Category::all();

      return view('product.edit', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->name = request('name');
        $product->description = request('description');
        $product->category_id = request('category_id');
        $product->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
      $category = $product->category_id;
      Product::destroy($product->id);
      return redirect('/category/'.$category);
    }
}
