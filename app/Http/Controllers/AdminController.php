<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminHome()
    {
        // return view('admin.home');
        return view('admin.home');
    }

     /**
     * Display a listing of the resource.
     */
    public function products()
    {
        $products = Product::with('categories')->latest()->paginate(15);
        return view('admin.products.index', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

     /**
     * Display a listing of the resource.
     */
    public function posts()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

     /**
     * Display a listing of the resource.
     */
    public function bands()
    {
        $bands = Band::latest()->paginate(15);
        return view('admin.bands.index', compact('bands'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


     /**
     * Display a listing of the resource.
     */
    public function orders()
    {
        $orders = Order::latest()->paginate(15);
        return view('admin.orders.index', compact('orders'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Display a listing of the resource.
     */
    public function createPage()
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        return view('admin.products.create', compact('categories', 'subCategories'));
    }

    /**
     * Display a listing of the resource.
     */
    public function createBands()
    {
        $bands = Band::all();
        return view('admin.bands.create', compact('bands'));
    }

    /**
     * Display a listing of the resource.
     */
    public function createPosts()
    {
        $posts = Post::all();
        return view('admin.posts.create', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function editProduct($id)
    {
        $product = Product::where('id', $id)->first();
        $categories = Category::all();
        $subCategories = SubCategory::all();
        return view('admin.products.edit', compact('product','categories', 'subCategories'));
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroyProduct($id)
    {
        $product = Product::findOrFail($id);


        $product->delete();

        return redirect()->route('products');
    }
}
