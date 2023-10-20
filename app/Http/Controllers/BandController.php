<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBandRequest;
use App\Http\Requests\UpdateBandRequest;

class BandController extends Controller
{

     /**
     * Display a listing of the resource.
     */
    public function bandes()
    {
        $bands = Band::select('title', 'images')->get();
        return view('bandes', compact('bands'))->with('i', (request()->input('page', 1) - 1) * 4);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeBand(Request $request)
    {


        $request = request();
        $request->validate([
            'title' => 'required',
        ]);

        $results = $request->all();

        $images = $request->file('images');
        $filename = Str::uuid()->toString(). "." . $images->getClientOriginalExtension();
        $storage = public_path('images');
        $images->move($storage, $filename);
        $results['images'] = $filename;


        $band = new Band;
        $band->fill($results);
        $band->save();



        return redirect()->route('bands');
    }

}
