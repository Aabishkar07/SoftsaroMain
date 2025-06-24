<?php

namespace App\Http\Controllers\Admin;

use App\FileService\ImageService;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    public function __construct(
        protected ImageService $imageservice
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $banners = Banner::latest()->get();
        return view("admin.sliders.index", compact("banners"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin.sliders.create");

    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $banner_image = $this->imageservice->fileUpload($request->banner_image, "banner");
        $req = $request->all();
        $req['banner_image'] = $banner_image;
        $req['slug'] = Str::slug($request->title);
        Banner::create($req);
        return redirect()->route('admin.banner.index')->with('success', 'Banner Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view("admin.sliders.edit", compact("banner"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $req = $request->all();
        if ($request->hasFile('banner_image')) {
            if ($banner->banner_image) {
                $this->imageservice->imageDelete($banner->banner_image);
            }
            $banner_img = $this->imageservice->fileUpload($request->banner_image, "banner");
            $req['banner_image'] = $banner_img;
        }

        $req['slug'] = Str::slug($request->title);
        $banner->update($req);

        return redirect()->route('admin.banner.index')->with('success', 'Banner Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        if ($banner->banner_image) {
            $this->imageservice->imageDelete($banner->banner_image);
        }
        $banner->delete();
        return redirect()->route('admin.banner.index')->with('success', 'Banner Deleted');
    }
}
