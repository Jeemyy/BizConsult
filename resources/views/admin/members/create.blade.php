@extends('layouts.master-admin')
@section('title', __('keywords.addNew'))
@section('content')
    <div class="container-fluid">
        <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Form controls</strong>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="text" locale="{{ __('keywords.name') }}"
                                    name="name"></x-input-labelv1>
                                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                            </div>
                        </div> <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="text" locale="{{ __('keywords.position') }}"
                                    name="position"></x-input-labelv1>
                                <x-input-error :messages="$errors->get('position')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="text" locale="{{ __('keywords.facebook') }}"
                                    name="facebook"></x-input-labelv1>
                                <x-input-error :messages="$errors->get('facebook')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="text" locale="{{ __('keywords.linkedin') }}"
                                    name="linkedin"></x-input-labelv1>
                                <x-input-error :messages="$errors->get('linkedin')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="text" locale="{{ __('keywords.twitter') }}"
                                    name="twitter"></x-input-labelv1>
                                <x-input-error :messages="$errors->get('twitter')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="file" locale="{{ __('keywords.image') }}"
                                    name="image" class='form-control-file'></x-input-labelv1>
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>
                        </div>
                    </div>
                    <x-submit-button value="{{ __('keywords.create_member') }}"></x-submit-button>
                </div>
            </div>
        </form>
    </div> <!-- .container-fluid -->
@endsection
