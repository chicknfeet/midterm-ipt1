<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return response($books);
    }

    public function show($id){
        $book = Book::find($id);
        return response($book);
    }

    public function store(Request $request){
        $book = Book::create($request->all());
        return response($book);
    }

    public function update(Request $request, $id){
        $book = Book::find($id);
        $book->update($request->all());
        return response($book);
    }

    public function destroy($id){
        Book::destroy($id);
        return response(['message'=>'Delete Success',]);
    }
}
