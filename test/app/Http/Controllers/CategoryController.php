<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();

        return view('Categories.list', ['categories' => $categories]);
    }

    public function create()
    {
        return view('Categories.new');
    }


    public function store(Request $request)
    {
        $category = new Category;
        $category->title = $request->title;
        $category->save();
        return redirect('/');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('Categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::where('id', $id)->first();
        $category->title = $request->title;
        $category->save();
        return redirect('/');
    }

    public function delete(Request $request, $id)
    {
        Category::destroy($id);
        return redirect('/');
    }
}
