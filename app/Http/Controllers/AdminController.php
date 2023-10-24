<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\Post;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\StandardOrder;
use Illuminate\Support\Facades\Storage;

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
    public function posts()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 5);
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
    public function createPosts()
    {
        $posts = Post::all();
        return view('admin.posts.create', compact('posts'));
    }

    // Products Admin


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
    public function createPage()
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        return view('admin.products.create', compact('categories', 'subCategories'));
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


        // Spécifiez le chemin du fichier dans le dossier public
        $publicPath = 'images/' . $product->images;

        try {
            // Supprimez le fichier du dossier public s'il existe
            if (file_exists($publicPath)) {
                unlink($publicPath);
            }
            //  dd($test);


            // Supprimez la bande
            $product->delete();

            // Redirigez vers la route 'bands'
            return redirect()->route('products');
        } catch (\Exception $e) {
            // Loggez l'erreur ou faites quelque chose d'autre avec l'exception
            dd($e->getMessage());
        }

        return redirect()->route('products');
    }

    // Bands Admin


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
    public function createBands()
    {
        $bands = Band::all();
        return view('admin.bands.create', compact('bands'));
    }


     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function editBands($id)
    {
        try {
            $band = Band::where('id', $id)->first();

            $publicPath = 'images/' . $band->images;

            //  dd($publicPath);

            if (file_exists($publicPath)) {
                unlink($publicPath);
            }
            //code...
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
        return view('admin.bands.edit', compact('band'));
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroyBands($id)
    {
        $bands = Band::findOrFail($id);


        // Spécifiez le chemin du fichier dans le dossier public
        $publicPath = 'images/' . $bands->images;



        try {
            // Supprimez le fichier du dossier public s'il existe
            if (file_exists($publicPath)) {
                unlink($publicPath);
            }
            //  dd($test);


            // Supprimez la bande
            $bands->delete();

            // Redirigez vers la route 'bands'
            return redirect()->route('bands');
        } catch (\Exception $e) {
            // Loggez l'erreur ou faites quelque chose d'autre avec l'exception
            dd($e->getMessage());
        }
        return redirect()->route('bands');
    }

    // Orders Admin

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroyOrder($id)
    {
        $orders = Order::findOrFail($id);


        // Spécifiez le chemin du fichier dans le dossier public
        $publicPath = 'images/' . $orders->images;



        try {
            // Supprimez le fichier du dossier public s'il existe
            if (file_exists($publicPath)) {
                unlink($publicPath);
            }
            //  dd($test);


            // Supprimez la bande
            $orders->delete();

            // Redirigez vers la route 'bands'
            return redirect()->route('orders');
        } catch (\Exception $e) {
            // Loggez l'erreur ou faites quelque chose d'autre avec l'exception
            dd($e->getMessage());
        }
        return redirect()->route('orders');
    }
}
