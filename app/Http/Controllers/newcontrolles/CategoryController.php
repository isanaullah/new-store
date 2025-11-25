<?php

namespace App\Http\Controllers\newcontrolles;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
/*
|--------------------------------------------------------------------------
| Index Function
|--------------------------------------------------------------------------
*/
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.admin.categories.manage', compact('categories'));
    }

/*
|--------------------------------------------------------------------------
| Create Function
|--------------------------------------------------------------------------
*/
    public function create()
    {
        return view('dashboard.admin.categories.create');
    }

/*
|--------------------------------------------------------------------------
| Store Function
|--------------------------------------------------------------------------
*/
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'nullable|boolean',
        ]);

        $data = [
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'description' => $request->input('description'),
            'status' => $request->has('status') ? 1 : 0,
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/categories'), $imageName);
            $data['image'] = 'uploads/categories/' . $imageName;
        }

        Category::create($data);

        return redirect()->route('categories.index')->with('success', 'Category Added Successfully!');
    }

/*
|--------------------------------------------------------------------------
| Edit Function
|--------------------------------------------------------------------------
*/
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.admin.categories.edit', compact('category'));
    }

/*
|--------------------------------------------------------------------------
| Update Function
|--------------------------------------------------------------------------
*/
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug,' . $id,
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'nullable|boolean',
        ]);

        $category = Category::findOrFail($id);

        $data = [
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'description' => $request->input('description'),
            'status' => $request->has('status') ? 1 : 0,
        ];

        if ($request->hasFile('image')) {
            if ($category->image && file_exists(public_path($category->image))) {
                unlink(public_path($category->image));
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/categories'), $imageName);
            $data['image'] = 'uploads/categories/' . $imageName;
        }

        $category->update($data);

        return redirect()->route('categories.index')->with('success', 'Category Updated Successfully!');
    }

/*
|--------------------------------------------------------------------------
| Destroy Function
|--------------------------------------------------------------------------
*/
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if ($category->image && file_exists(public_path($category->image))) {
            unlink(public_path($category->image));
        }
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category Deleted Successfully!');
    }
}
