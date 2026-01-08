<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // private const DIR  = 'admin.services.';

    public function index()
    {
        $services = Service::paginate(config('pagination.count'));
        return view('admin.services.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $request->validated();
        Service::create($request->all());
        return to_route('admin.services.index')->with('success', __('keywords.record_created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        // $service = Service::findOrFail($service->id);
        return view('admin.services.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
        return view('admin.services.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $request->validated();
        $service->update($request->all());
        return to_route('admin.services.index')->with('success', __('keywords.record_updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back()->with('success', __('keywords.record_deleted_successfully'));
    }
}
