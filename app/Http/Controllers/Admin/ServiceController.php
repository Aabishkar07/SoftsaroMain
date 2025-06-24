<?php

namespace App\Http\Controllers\Admin;

use App\FileService\ImageService;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(
        protected ImageService $imageservice
    ) {
    }

    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $service_img = $this->imageservice->fileUpload($request->image, "service");
        $service_icon = $this->imageservice->fileUpload($request->icon, "icon");
        $req = $request->all();
        $req['image'] = $service_img;
        $req['icon'] = $service_icon;
        Service::create($req);

        return redirect()->route('admin.services.index')->with('popsuccess', 'Service Successfully Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $req = $request->all();

        if ($request->hasFile('image')) {
            if ($service->image) {
                $this->imageservice->imageDelete($service->image);
            }
            $service_image = $this->imageservice->fileUpload($request->image, "service");
            $req['image'] = $service_image;
        }
        if ($request->hasFile('icon')) {
            if ($service->icon) {
                $this->imageservice->imageDelete($service->icon);
            }
            $icon_service = $this->imageservice->fileUpload($request->icon, "icon");
            $req['icon'] = $icon_service;
        }


        $service->update($req);

        return redirect()->route('admin.services.index')->with('popsuccess', 'Services Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
