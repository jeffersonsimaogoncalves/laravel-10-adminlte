<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SubCateory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $category = Category::get();
        view()->share('category', $category);

        $collection = Collection::get();
        view()->share('collection', $collection);

        $data = Product::orderBy('id', 'DESC')->paginate(5);
        view()->share('data', $data);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'collection' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'image' => 'required',
        ]);

        $baseSlug = Str::slug($request->name);
        $uniqueSlug = $baseSlug;
        $counter = 1;
        while (Product::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $baseSlug . '-' . $counter;
            $counter++;
        }

        $product = new Product();
        $product->name = $request->name;
        $product->collection_id = $request->collection;
        $product->category_id = $request->category;
        $product->sub_category_id = $request->subcategory;
        $product->slug = $uniqueSlug;

        // Primary product image store
        if ($primaryImage = $request->file('image')) {
            $destinationPath = 'product-image/';
            $profileImage = $uniqueSlug . '.' . $primaryImage->getClientOriginalExtension();
            $primaryImage->move($destinationPath, $profileImage);
            $product->image = $profileImage;
        }

        $product->save();

        if ($request->file('product_images')) {
            foreach ($request->file('product_images') as $sliderImage) {
                $destinationPath = 'product-slider-images/';
                $sliderProfileImage = $uniqueSlug . 'product-slider-image' . '.' . $sliderImage->getClientOriginalExtension();
                $sliderImage->move($destinationPath, $sliderProfileImage);
        
                $productImage = new ProductImage();
                $productImage->image = $sliderProfileImage;
                $productImage->product_id = $product->id;
                $productImage->save();
            }
        }
        

        return redirect()->route('admin.product.index')->with('success', 'Product created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Product::where('id', decrypt($id))->first();
        $productImages = ProductImage::where('product_id', $data->id)->get();
        $subcategory = SubCateory::where('category_id', $data->category_id)->get();
        return view('admin.products.edit', compact('productImages', 'data', 'subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function getsubcategory(Request $request)
    {
        $subcategory = SubCateory::where('category_id', $request->category)->get();
        return view('admin.products.subcategory', compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
