<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    private $product;
    private $category;
    public function __construct(ProductModel $product, CategoryModel $category)
    {
        $this->product = $product;
        $this->category = $category;
    }

    public function index()
    {
        $products = $this->product->paginate(5);
        return view('product.index', compact('products'));
    }

    public function create()
    {
        $categories = $this->category->all();
        return view('product.add', compact('categories'));
    }

    public function store(Request $request)
    {
        $data_upload = [
            'name'=>$request->name,
            'price'=>$request->price,
            'category_id'=>$request->category_id
        ];
        if ($request->hasFile('image')) {
            $fileExtension = $request->image->getClientOriginalExtension();
            $fileName = hexdec(uniqid('', false));

            $data_upload['image'] = "$fileName.$fileExtension";

            $request->file('image')->storeAs('app/public/images', $data_upload['image']);
        }
        $this->product->create($data_upload);

    }
}
