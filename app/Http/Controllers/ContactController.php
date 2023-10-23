<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactNotification;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function sendMail(Request $request)
    {
        try {
            $request = request();
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string|max:1000',
            ]);

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ];

            // dd($data);
            Mail::to('houssouelvis@gmail.com')->send(new ContactNotification($data));

            return redirect()->back()->with('success', 'votre message a bien été enregistrer vous aurez une reponse sous peu');


        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function contact()
    {
        return view('contacts');
    }

}
