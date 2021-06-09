<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category;
    public function __construct(CategoryModel $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->all();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        $categories = $this->category->all();
        return view('category.add', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->category->create([
            'category_name' => $request->category_name,
            'description' => $request->description
        ]);
        return redirect()->route('categories.index');

    }

    public function delete($id)
    {
        $this->category->find($id)->delete();
        return redirect()->route('categories.index');
    }
}
