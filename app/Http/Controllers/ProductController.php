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
use App\Models\StandardOrder;
use GuzzleHttp\Promise\Create;

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
        // $products = Product::with('categories')->latest()->paginate(4);
        $products = Product::with(['categories', 'sub_categories'])->latest()->paginate(4);

        // $posts = Post::pluck('link', 'images', 'icons');
        return view('welcome', compact('products'));

    }


    /**
     * Display a listing of the resource.
     */
    public function homme()
    {
        // $products = Product::pluck('id', 'category_id', 'images', 'sub_category_id', 'name');
        try {
            $products = Product::with(['categories', 'sub_categories'])->get();
            $existsSubCategory1 = Product::where('sub_category_id', 1)->exists();
            $existsSubCategory2 = Product::where('sub_category_id', 2)->exists();
            $existsSubCategory3 = Product::where('sub_category_id', 3)->exists();
        } catch (\Throwable $th) {
            //throw $th;
            dd($th->getMessage());
        }
        // $products = Product::select('id', 'category_id', 'images', 'sub_category_id', 'name')->latest()->paginate(20);
        return view('homme', compact('products', 'existsSubCategory3', 'existsSubCategory1', 'existsSubCategory2'));

    }



    /**
     * Display a listing of the resource.
     */
    public function femme()
    {
        // $products = Product::where('category_id', 2)->latest()->paginate(30);
        $products = Product::with(['categories', 'sub_categories'])->get();
        $existsSubCategory4 = Product::where('sub_category_id', 4)->exists();
        $existsSubCategory5 = Product::where('sub_category_id', 5)->exists();
        $existsSubCategory6 = Product::where('sub_category_id', 6)->exists();
        $existsSubCategory7 = Product::where('sub_category_id', 7)->exists();


        // $products = Product::select('id', 'category_id', 'images', 'sub_category_id', 'name')->latest()->paginate(20);
        return view('femme', compact('products', 'existsSubCategory4', 'existsSubCategory5', 'existsSubCategory6', 'existsSubCategory7'));

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


        try {
            $request = request();
            $request->validate([
                'name' => 'required',
                'description' => 'required',
            ]);
            $categorie = Category::find($request->input('category_id'));
            $subCategorie = SubCategory::find($request->input('sub_category_id'));




            $results = $request->all();

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
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function StandardOrder(Request $request, $id)
    {

        $product = Product::findOrFail($id);

        $request->validate([
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ]);

        // $email = $request->input('email');
        // $phone = $request->input('phone');

        $standardOrder = new StandardOrder;
        $standardOrder->title = $product->name;
        $standardOrder->description = $product->description;
        $standardOrder->images = $product->images;
        $standardOrder->category_id = $product->category_id;
        $standardOrder->email = $request->input('email');
        $standardOrder->phone = $request->input('phone');

        $standardOrder->save();



        return redirect()->back()->with('success', 'Votre demande a bien été enregistré nous vous contacterons par mail sous peu');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateProduct(UpdateProductRequest $request, Product $product, $id)
    {
        try {
            $request = request();
            $categorie = Category::find($request->input('category_id'));
            $subCategorie = SubCategory::find($request->input('sub_category_id'));


            $product = Product::find($id);

            $results = $request->all();

            $publicPath = 'images/' . $product->images;

            $images = $request->file('images');
            $filename = Str::uuid()->toString(). "." . $images->getClientOriginalExtension();
            // dd($filename);

            if ($request->hasFile('images')) {
                unlink($publicPath);



                $images = $request->file('images');
                $filename = Str::uuid()->toString(). "." . $images->getClientOriginalExtension();
                $storage = public_path('images');
                $images->move($storage, $filename);
                $results['images'] = $filename;
            }else{
                $product->image = $request->input('old_image');
            }



            $product->categories()->associate($categorie);
            $product->sub_categories()->associate($subCategorie);
            $product->update($results);


            return redirect()->route('products');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

}
