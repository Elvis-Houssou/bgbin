<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePost(Request $request)
    {


        $request = request();
        $request->validate([
            'link' => 'required',
        ]);

        $results = $request->all();

        $images = $request->file('images');
        $filename = Str::uuid()->toString(). "." . $images->getClientOriginalExtension();
        $storage = public_path('images');
        $images->move($storage, $filename);
        $results['images'] = $filename;

        $icons = $request->file('icons');
        $filenames = Str::uuid()->toString(). "." . $icons->getClientOriginalExtension();
        $storages = public_path('icons');
        $icons->move($storages, $filenames);
        $results['icons'] = $filenames;


        $post = new Post;
        $post->fill($results);
        $post->save();



        return redirect()->route('posts');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepostRequest $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
