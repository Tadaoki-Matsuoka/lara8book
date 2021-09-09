<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Sapport\Facades\Schema;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::with(['Author', 'Category'])->sortable()->simplePaginate(5);
        return view('book.index', compact('books'));
    }

    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('book.create', compact('authors', 'categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, Book::$rules);
        $book = new Book([
            'title' => $request->input('title'),
            'price' => $request->input('price'),
            'author_id' => $request->input('author_id'),
            'category_id' => $request->input('category_id'),
        ]);
        if($book->save()) {
            $request->session()->flash('success', __('書籍を新規登録しました'));
        } else {
            $request->session()->flash('error', __('書籍の新規登録に失敗しました'));
        }

        return redirect()->route('book.index');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        $authors = Author::all();
        $categories = Category::all();
        return view('book.edit', compact('book', 'authors', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Book::$rules);
        $book = Book::find($id);
        $columns = array_keys(Book::$rules);
        foreach($columns as $column) {
            $book->$column = $request->input($column);
        }
        if($book->save()) {
            $request->session()->flash('success', __('書籍を更新しました'));
        } else {
            $request->session()->flash('error', __('書籍の更新に失敗しました'));
        }

        return redirect()->route('book.index');
    }
}
