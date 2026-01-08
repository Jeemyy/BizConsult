<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(config('pagination.count'));
        return view('admin.testimonials.index', get_defined_vars());

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {

        // $data = $request->validated();
        // // image uploading
        // // 1- get image
        // // dd($data);
        // $image = $request->image;
        // // 2- change it's current name
        // $newImageName = time() . '-' . $image->getClientOriginalName();
        // // 3- move image to my project
        // $image->storeAs('testimonials', $newImageName, 'public');
        // // 4- save new name to database record
        // $data['image'] = $newImageName;

        $data = $request->validated();
        $image = $request->image;
        $imageName = time().'-'.$image->getClientOriginalName();
        $image->storeAs('testimonials', $imageName, 'public');
        $data['image'] = $imageName;
        Testimonial::create($data);
        return to_route('admin.testimonials.index')->with('success', __('keywords.record_created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        $data = $request->validated();
        if($request->hasFile('image')){
            Storage::delete("public/testimonials/$testimonial->image");
            $image = $request->image;
            $imageName = time().'-'.$image->getClientOriginalName();
            $image->storeAs('testimonials', $imageName, 'public');

            $data['image'] = $imageName;
        }
        $testimonial->update($data);
        return to_route('admin.testimonials.index')->with('success', __('keywords.record_updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->back()->with('success', __('keywords.record_deleted_successfully'));
    }
}
