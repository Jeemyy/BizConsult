@extends('layouts.master-admin')
@section('image', __('keywords.edit_company'))
@section('content')
    <div class="container-fluid">
        <form action="{{ route('admin.companies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="text" locale="{{ __('keywords.name') }}"
                                    name="name" class="form-control"></x-input-labelv1>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                        </div> <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="file" locale="{{ __('keywords.image') }}"
                                    name="image" class="form-control-file"></x-input-labelv1>
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>
                        </div> <!-- /.col -->
                    </div>
                    <x-submit-button value="{{ __('keywords.create_company') }}"></x-submit-button>
                </div>
            </div>
        </form>
    </div> <!-- .container-fluid -->
@endsection
