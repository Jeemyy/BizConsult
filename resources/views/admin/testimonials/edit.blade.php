@extends('layouts.master-admin')
@section('title', __('keywords.addNew'))
@section('content')
    <div class="container-fluid">
        <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Form controls</strong>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="text" locale="{{ __('keywords.name') }}"
                                    name="name" value='{{ $testimonial->name }}'></x-input-labelv1>
                                <x-input-error :messages="$errors->get('name')" class="mt-2"/>

                            </div>
                        </div> <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="text" locale="{{ __('keywords.position') }}"
                                    name="position" value='{{ $testimonial->position }}'></x-input-labelv1>
                                <x-input-error :messages="$errors->get('position')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="file" locale="{{ __('keywords.image') }}"
                                    name="image" class='form-control-file' value='{{ $testimonial->image }}'></x-input-labelv1>
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>
                        </div>
                         <div class="col-md-12">
                            <div class="form-group">
                                <x-text-area locale="{{ __('keywords.description') }}" name="description"  value='{{ $testimonial->description }}'></x-text-area>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>
                        </div>
                    </div>
                    <x-submit-button value="{{ __('keywords.create_testimonial') }}"></x-submit-button>
                </div>
            </div>
        </form>
    </div> <!-- .container-fluid -->
@endsection
