<?php

namespace App\Http\Controllers\newcontrolles;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
/*
|--------------------------------------------------------------------------
| Index Function
|--------------------------------------------------------------------------
*/
    public function index()
    {
        $products = Product::all();
        return view('dashboard.admin.products.manage', compact('products'));
    }

/*
|--------------------------------------------------------------------------
| Create Function
|--------------------------------------------------------------------------
*/
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.admin.products.create', compact('categories'));
    }

/*
|--------------------------------------------------------------------------
| Store Function
|--------------------------------------------------------------------------
*/
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0',
            'sku' => 'nullable|string|max:255',
            'stock_qty' => 'required|integer|min:0',
            'stock_status' => 'required|in:in_stock,out_of_stock',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'brand' => 'nullable|string|max:255',
            'tags' => 'nullable|string',
        ]);

        $data = [
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'sale_price' => $request->input('sale_price'),
            'sku' => $request->input('sku'),
            'stock_qty' => $request->input('stock_qty'),
            'stock_status' => $request->input('stock_status'),
            'brand' => $request->input('brand'),
            'tags' => $request->input('tags'),
        ];

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('uploads/products'), $thumbnailName);
            $data['thumbnail'] = 'uploads/products/' . $thumbnailName;
        }

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product Added Successfully!');
    }

/*
|--------------------------------------------------------------------------
| Edit Function
|--------------------------------------------------------------------------
*/
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('dashboard.admin.products.edit', compact('product', 'categories'));
    }

/*
|--------------------------------------------------------------------------
| Update Function
|--------------------------------------------------------------------------
*/
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug,' . $id,
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0',
            'sku' => 'nullable|string|max:255',
            'stock_qty' => 'required|integer|min:0',
            'stock_status' => 'required|in:in_stock,out_of_stock',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'brand' => 'nullable|string|max:255',
            'tags' => 'nullable|string',
        ]);

        $product = Product::findOrFail($id);

        $data = [
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'sale_price' => $request->input('sale_price'),
            'sku' => $request->input('sku'),
            'stock_qty' => $request->input('stock_qty'),
            'stock_status' => $request->input('stock_status'),
            'brand' => $request->input('brand'),
            'tags' => $request->input('tags'),
        ];

        if ($request->hasFile('thumbnail')) {
            if ($product->thumbnail && file_exists(public_path($product->thumbnail))) {
                unlink(public_path($product->thumbnail));
            }
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('uploads/products'), $thumbnailName);
            $data['thumbnail'] = 'uploads/products/' . $thumbnailName;
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product Updated Successfully!');
    }

/*
|--------------------------------------------------------------------------
| Destroy Function
|--------------------------------------------------------------------------
*/
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->thumbnail && file_exists(public_path($product->thumbnail))) {
            unlink(public_path($product->thumbnail));
        }
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product Deleted Successfully!');
    }
}
