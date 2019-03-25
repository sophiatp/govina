<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);

        return view('admin.products.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subCategories = SubCategory::pluck('name', 'id');
        return view('admin.products.create', compact('subCategories'));
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'description' => 'required',
            'sub_title' => 'required',
            'image' => 'required'
        ]);

        $product = new Product();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = str_slug(time()) . '.' . $image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $product->image = $name;
        }
        $product->sub_id = $request['sub_id'];
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->code = $request['code'];
        $product->sub_title = $requestơ['sub_title'];
        $product->description = $request['description'];
        $product->slug = str_slug($request['name']);
        $product->save();

        /*update flug for just created product*/
        $latestProduct = Product::latest()->first();
        \DB::table('products')->where('id', $latestProduct['id'])->update([
            'slug' => str_slug($latestProduct['name']) . '-' . $latestProduct['id']
        ]);

        return redirect()->action('ProductController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $product = Product::where('slug', $slug)->first();

        return view('user.products.detail', compact(
            'categories',
            'subCategories',
            'product'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
