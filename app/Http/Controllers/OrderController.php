<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Band;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function order()
    {
        $categories = Category::all();
        $products = Product::all();
        $subCategories = SubCategory::all();
        $bands = Band::all();
        return view('haute_couture', compact('categories', 'subCategories', 'products', 'bands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function saveOrder(Request $request)
    {
        $request = request();
        // $request->validate([
        //     'description' => 'required',
        //     'tissu' => 'required',
        // ]);
        $categorie = Category::find($request->input('category_id'));
        $subCategorie = SubCategory::find($request->input('sub_category_id'));
        $band = Band::find($request->input('band_id'));
        // $size = $request->input('size');
        $mesure = implode(',', $request->input('mesure'));
        // $size = $request->file('size');




        $results = $request->all();
        $results['mesure'] = $mesure;

        // dd($results);

        $images = $request->file('images');
        $filename = Str::uuid()->toString(). "." . $images->getClientOriginalExtension();
        $storage = public_path('images');
        $images->move($storage, $filename);
        $results['images'] = $filename;

        // dd($results);
        $order = new Order;
        $order->fill($results);

        $order->categories()->associate($categorie);
        $order->sub_categories()->associate($subCategorie);
        $order->bands()->associate($band);
        // dd($order);
        $order->save();

        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
