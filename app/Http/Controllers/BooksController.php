<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;   


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("index", 
        ["books" => Books::latest()->filter(Request(['search']))->paginate(4)
    ]);
    }

    public function show()
    {
        return view('show', ["book" => Books::find(@request("id"))]);
    }
    public function create()
    {
        return view("create");
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $formFields = $request->validate([
            'title' => "required",
            'author' => "required",
            'language' => "required",
            'country' => "required",
            'year' => "required",
            'pages' => "required",
            'description' => "required",
        ]);

        // $newImageName = time () . '-' . $request->title . '.' . $request->image->extension();
        // $formFields['image'] = $request->image->move(public_path('images'), $newImageName);
        if($request->hasFile('image'))
        {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        

        Books::create($formFields);
        return redirect('/')->with("message", "Book Added Successfully!");
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $book
     * @return \Illuminate\Http\Response
     */

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $book
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view("edit", ['book' => Books::findOrFail(@request('id'))]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formFields = $request->validate([
            'title' => "required",
            'author' => "required",
            'language' => "required",
            'country' => "required",
            'year' => "required",
            'pages' => "required",
            'description' => "required",
        ]);
        if ($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        Books::where('id', @request('id'))->update($formFields);
        return redirect('/');
    }
   
    public function destroy($id)
        {   
            Books::where('id', $id)->delete();
            return redirect('/')->with("message", "Book Deleted Successfully!");
        }
    
}
