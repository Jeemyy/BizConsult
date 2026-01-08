<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::paginate(config('pagination.count'));
        return view('admin.companies.index', get_defined_vars());

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.companies.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        $data = $request->validated();
        $image = $request->image;
        $imageName = time().'-'.$image->getClientOriginalName();
        $image->storeAs('companies', $imageName, 'public');
        $data['image'] = $imageName;
        // $data['name'] = $imageName;
        Company::create($data);
        return to_route('admin.companies.index')->with('success', __('keywords.record_created_successfully'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('admin.companies.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $data = $request->validated();
        if($request->hasFile('image')){
            Storage::delete('public/storage/companies/'. $company->image);
            $image = $request->image;
            $imageName = time().'-'.$image->getClientOriginalName();
            $image->storeAs('companies', $imageName, 'public');
            $data['image'] = $imageName;
        }
        $company->update($data);
        return to_route('admin.companies.index')->with('success', __('keywords.record_updated_successfully'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->back()->with('success', __('keywords.record_deleted_successfully'));
    }
}
