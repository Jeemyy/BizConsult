@extends('layouts.master-admin')
@section('image', __('keywords.edit_company'))
@section('content')
    <div class="container-fluid">
        <form action="{{ route('admin.companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="text" locale="{{ __('keywords.name') }}"
                                    name="name" value="{{ old('name', $company->name) }}"></x-input-labelv1>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                        </div> <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <img src="{{ asset('/storage/companies/'. $company->image) }}" style="background: black" width="50px" alt="{{$company->name}}" class="mb-3" >
                                <x-input-labelv1 type="file" locale="{{ __('keywords.image') }}"
                                    name="image" value="{{ old('image', $company->image) }}" class="form-control-file"></x-input-labelv1>
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>
                        </div> <!-- /.col -->
                    </div>
                    <x-submit-button value="{{ __('keywords.update_company') }}"></x-submit-button>
                </div>
            </div>
        </form>
    </div> <!-- .container-fluid -->
@endsection
