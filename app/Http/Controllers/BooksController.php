<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;   


class BooksController extends Controller
{
    public function index(){
        return view("welcome", ["books" => Books::all()]);
    }

    public function store(Request $request)
    {
    //     $book = new book;
    // $book->title = $request->title;
    // $book->book_description = $request->book_description;
    // $book->book_auther =$request->book_auther;
    // $book->book_image = $request->book_image ;
    // $book->save();
    // return redirect('/');

    //     $formFields = $request->validate([
    //         'title' => "required",
    //         'author' => "required",
    //         'language' => "required",
    //         'country' => "required",
    //         'year' => "required|numeric",
    //         'pages' => "required|numeric",
    //         'description' => "required"
    //     ]);
    //     if ($request->hasFile('imageLink')){
    //         $formField['imageLink'] = $request->file('imageLink')->store('uploaded', 'public');
        
    // }
            // dd($request->all());
        Books::create($request->all());

        return redirect("/");
    }
    //
}
