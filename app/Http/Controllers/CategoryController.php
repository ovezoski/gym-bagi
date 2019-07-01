<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

  public function create()
  {
    return view('category.create');
  }

  public function store(Request $request)
  {

     Category::create([
        'name' => request('name')
    ]);
return redirect('/product/');


  }

  public function show(Category $category)
  {

    return view('category.show', ['category' => $category]);

  }

}
