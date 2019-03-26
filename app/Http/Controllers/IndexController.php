<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Product;
use DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();

        $congAnNinh = Product::where('sub_id', 1)->limit(4)->get();
        $temTu = Product::where('sub_id', 2)->limit(4)->get();
        $goTemTu = Product::where('sub_id', 4)->limit(4)->get();
        $keKhoHang = Product::where('sub_id', 4)->limit(4)->get();
        $thietBiSieuthi = Product::where('sub_id', 5)->limit(4)->get();

        return view('user.home.home', compact(
            'categories',
            'subCategories',
            'congAnNinh',
            'temTu',
            'keKhoHang',
            'goTemTu',
            'thietBiSieuthi'
        ));
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
        //
    }

    /**
     * Show products by subCategory
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();

        $subCategory = SubCategory::where('slug', $slug)->first();
        $categoryId = Category::where('slug', $slug)->first();

        if ($subCategory) {
            $products = Product::where('sub_id', $subCategory['id'])->paginate(16);
        }

        if ($categoryId) {
            $products = DB::table('categories')
                ->join('sub_categories', 'categories.id', '=', 'sub_categories.category_id')
                ->join('products', 'sub_categories.id', '=', 'products.sub_id')
                ->where('category_id', $categoryId['id'])
                ->paginate(16);
        }



        return view('user.products.list-by-subcategory', compact(
            'categories',
            'subCategories',
            'products',
            'subCategory'
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
