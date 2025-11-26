<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the banners.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $banners = Banner::orderBy('created_at', 'desc')->get();
        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new banner.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Store a newly created banner in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'meta_desc' => 'nullable|string|max:500',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:2048'
        ]);

        $bannerData = [
            'title' => $request->title,
            'meta_desc' => $request->meta_desc,
        ];

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'banner_' . Str::slug($request->title) . '_' . time() . '.' . $image->getClientOriginalExtension();

            // Create directory if it doesn't exist
            $directory = 'blog/banners';
            if (!Storage::disk('public')->exists($directory)) {
                Storage::disk('public')->makeDirectory($directory);
            }

            // Store image in the specified directory
            $imagePath = $image->storeAs($directory, $imageName, 'public');
            $bannerData['image'] = $imagePath;
        }

        Banner::create($bannerData);

        return redirect()->route('admin.banners.index')
            ->with('success', 'Banner created successfully.');
    }

    /**
     * Show the form for editing the specified banner.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\View\View
     */
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    /**
     * Update the specified banner in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'meta_desc' => 'nullable|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:2048'
        ]);

        $bannerData = [
            'title' => $request->title,
            'meta_desc' => $request->meta_desc,
        ];

        // Handle image upload if new image is provided
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($banner->image && Storage::disk('public')->exists($banner->image)) {
                Storage::disk('public')->delete($banner->image);
            }

            $image = $request->file('image');
            $imageName = 'banner_' . Str::slug($request->title) . '_' . time() . '.' . $image->getClientOriginalExtension();

            // Create directory if it doesn't exist
            $directory = 'blog/banners';
            if (!Storage::disk('public')->exists($directory)) {
                Storage::disk('public')->makeDirectory($directory);
            }

            // Store image in the specified directory
            $imagePath = $image->storeAs($directory, $imageName, 'public');
            $bannerData['image'] = $imagePath;
        }

        $banner->update($bannerData);

        return redirect()->route('admin.banners.index')
            ->with('success', 'Banner updated successfully.');
    }

    /**
     * Remove the specified banner from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Banner $banner)
    {
        // Delete image if exists
        if ($banner->image && Storage::disk('public')->exists($banner->image)) {
            Storage::disk('public')->delete($banner->image);
        }

        $banner->delete();

        return redirect()->route('admin.banners.index')
            ->with('success', 'Banner deleted successfully.');
    }
}
