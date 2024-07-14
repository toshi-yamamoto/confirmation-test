<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Contact;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        // $contacts = Contact::all();
        $contacts = Contact::simplePaginate(7);
        return view('admin', ['contacts' => $contacts]);
    }


    // public function search(Request $request)
    // {
    //     $contacts = Contact::where('last_name')->first();
    //     // $categories = Category::all();

    //     return view('admin', compact('contacts'));
    // }

    public function search(Request $request)
    {
        $contacts = Contact::with('last_name')->KeywordSearch($request->keyword)->get();
        // $categories = Category::all();

        return view('admin', compact('contacts'));
    }
}
