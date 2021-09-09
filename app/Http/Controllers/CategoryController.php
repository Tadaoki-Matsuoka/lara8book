<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'asc')->simplePaginate(5);
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, Category::$rules);
        $category = new Category([
            'name' => $request->input('name'),
        ]);
        if($category->save()) {
            $request->session()->flash('success', __('カテゴリを新規登録しました'));
        } else {
            $request->session()->flash('error', __('カテゴリの新規登録に失敗しました'));
        }

        return redirect()->route('category.index');
    }
    public function show($id)
    {
        $category = Category::find($id);
        return view('category.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Category::$rules);
        $category = Category::find($id);
        $category->name = $request->input('name');
        if($category->save()) {
            $request->session()->flash('success', __('著者を更新しました'));
        } else {
            $request->session()->flash('error', __('著者の更新に失敗しました'));
        }

        return redirect()->route('category.index');
    }
}
