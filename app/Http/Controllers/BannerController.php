<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    // Show all banners
    public function index()
    {
        $banners = Banner::all();
        return view('dashboard.admin.banners.index', compact('banners'));
    }

    // Create form
    public function create()
    {
        return view('dashboard.admin.banners.create');
    }

    // Store new banner
    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'required|string|max:255',
            'meta_desc'  => 'required|string',
            'image'      => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Upload image
        if ($request->hasFile('image')) {
            $fileName = $this->uploadImage($request->file('image'), 'public/blog/banners');
            $imagePath = 'blog/banners/' . $fileName;
        } else {
            $imagePath = 'blog/banners/no_img.jpg';
        }

        Banner::create([
            'title'     => $request->title,
            'meta_desc' => $request->meta_desc,
            'image'     => $imagePath,
        ]);

        return redirect()->route('banners.manage')
            ->with('success', 'Banner Created Successfully.');
    }

    // Edit page
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('dashboard.admin.banners.edit', compact('banner'));
    }

    // Update banner
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'     => 'required|string|max:255',
            'meta_desc' => 'required|string',
            'image'     => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $banner = Banner::findOrFail($id);

        $data = [
            'title'     => $request->title,
            'meta_desc' => $request->meta_desc,
        ];

        // If new image uploaded
        if ($request->hasFile('image')) {

            // Delete old image
            if ($banner->image != 'blog/banners/no_img.jpg') {
                Storage::delete('public/' . $banner->image);
            }

            // Upload new image
            $fileName = $this->uploadImage($request->file('image'), 'public/blog/banners');
            $data['image'] = 'blog/banners/' . $fileName;
        }

        $banner->update($data);

        return redirect()->route('banners.manage')
            ->with('success', 'Banner Updated Successfully.');
    }

    // Delete banner
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);

        // Delete image
        if ($banner->image != 'blog/banners/no_img.jpg') {
            Storage::delete('public/' . $banner->image);
        }

        // Delete banner record
        $banner->delete();

        return redirect()->route('banners.manage')
            ->with('success', 'Banner Deleted Successfully.');
    }

    // Upload function
    private function uploadImage($file, $path)
    {
        $fileName = time() . '.' . $file->extension();
        $file->storeAs($path, $fileName);
        return $fileName;
    }
}
