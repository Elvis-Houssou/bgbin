<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Notifications\mailNotification;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Notifications\Notification;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{


    function changeLang($langcode) {
        App::setLocale($langcode);
        session()->put("lang_code", $langcode);
        return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     */
    public function mostRecent()
    {
        $products = Product::with('categories')->latest()->paginate(4);
        $posts = Post::all();
        return view('welcome', compact('products', 'posts'))->with('i', (request()->input('page', 1) - 1) * 4);

    }


    /**
     * Display a listing of the resource.
     */
    public function homme()
    {
        $products = Product::with('categories')->where('category_id', 1)->latest()->paginate(50);
        return view('homme', compact('products'))->with('i', (request()->input('page', 1) - 1) * 4);

    }



    /**
     * Display a listing of the resource.
     */
    public function femme()
    {
        $products = Product::with('categories')->where('category_id', 2)->latest()->paginate(50);
        return view('femme', compact('products'))->with('i', (request()->input('page', 1) - 1) * 4);

    }

    /**
     * Display a listing of the resource.
     */
    public function contact()
    {

        $user = User::all();
        $details = [
            'greeting' =>'fsjh',
            'body' =>'fsjh',
            'actionText' =>'fsjh',
            'actionurl' =>'fsjh',
            'greeting' =>'fsjh',
        ];
        return view('contacts', compact('user', 'details'));

    }

    /**
     * Display a listing of the resource.
     */
    public function about()
    {

        return view('about');

    }

    /**
     * Display a listing of the resource.
     */
    public function FaQs()
    {
        $titles = [
            "Pouvez vous m'indiquer La situation géographique de votre boutique ?",
            "Quels sont les modes de payement acceptés ?",
            "Pouvez vous personnaliser certains produits ?",
            "Quels sont les frais et délais  de livraison ?",
            "Quelles sont les matières utilisées pour la confection de vos vêtements ?"
        ];

        $answers = [
            "Nous sommes situés en Côte d'Ivoire, Abidjan cocody rue du lycée technique, carrefour pisam, rue B15 , immeuble vieux cocody.",
            "Nous acceptons ces types de payement: PayPal, Orange money, mtn money, wave, chèque, western union, money Gram, ria",
            "Oui nous personnalisons le vêtements en fonction de votre demande",
            "Le montant des frais d'envoi et le delais de livraison sont évalués en fonction de la localisation du client.",
            "Nos vêtements sont confectionnés Avec avec du pagne tissé 100%coton faits main Assemblé souvent avec d'autres matières comme le lin et le cuir"
        ];

        return view('FaQs',  compact('titles', 'answers'));

    }

    /**
     * Display a listing of the resource.
     */
    public function legales()
    {
        return view('mention_legales');
    }

    /**
     * Display a listing of the resource.
     */
    public function cgv()
    {
        return view('cgv');
    }



    /**
     * Display the specified resource.
     */
    public function show(Product $product, $id)
    {
        $product = Product::with('categories')->where('id', $id)->first();
        return view('show', compact('product'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function storeProduct(Request $request)
    {


        $request = request();
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'size' => 'required',
        ]);
        $categorie = Category::find($request->input('category_id'));
        $subCategorie = SubCategory::find($request->input('sub_category_id'));
        // $size = $request->input('size');
        $size = implode(',', $request->input('size'));
        // $size = $request->file('size');




        $results = $request->all();
        $results['size'] = $size;

        // dd($results);

        $images = $request->file('images');
        $filename = Str::uuid()->toString(). "." . $images->getClientOriginalExtension();
        $storage = public_path('images');
        $images->move($storage, $filename);
        $results['images'] = $filename;

        // dd($results);
        $product = new Product;
        $product->fill($results);

        $product->categories()->associate($categorie);
        $product->sub_categories()->associate($subCategorie);
        $product->save();



        return redirect()->route('products');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateProduct(UpdateProductRequest $request, Product $product, $id)
    {
        $request = request();
        $categorie = Category::find($request->input('category_id'));
        $subCategorie = SubCategory::find($request->input('sub_category_id'));
        $size = implode(',', $request->input('size'));



        $results = $request->all();
        $results['size'] = $size;


        $images = $request->file('images');
        $filename = Str::uuid()->toString(). "." . $images->getClientOriginalExtension();

        if ($request->hasFile('images')) {
                Storage::delete('images' . $product->image);

                if ($request->input('category_id') == 1) {
                    $images = $request->file('images');
                    $filename = Str::uuid()->toString(). "." . $images->getClientOriginalExtension();
                    $storage = public_path('images');
                    $images->move($storage, $filename);
                    $results['images'] = $filename;
                }else{
                    $images = $request->file('images');
                    $filename = Str::uuid()->toString(). "." . $images->getClientOriginalExtension();
                    $storage = public_path('images');
                    $images->move($storage, $filename);
                    $results['images'] = $filename;
                }
                // $images->move(storage_path('app/public/images'), $filename);
                // $images->move('images', $filename);

                // $results['images'] = $filename;
        }else{
            $product->image = $request->input('old_image');
        }


        $product = Product::find($id);

        $product->categories()->associate($categorie);
        $product->sub_categories()->associate($subCategorie);
        $product->update($results);


        return redirect()->route('products');
    }

}
