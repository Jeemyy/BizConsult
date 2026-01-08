@extends('layouts.master-admin')
@section('title', __('keywords.settings'))
@section('content')
    <div class="container-fluid">
        <form action="{{ route('admin.settings.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="text" locale="{{ __('keywords.address') }}"
                                    name="address" value="{{ old('address', $setting->address) }}"></x-input-labelv1>
                                <x-input-error :messages="$errors->get('address')" class="mt-2" />

                            </div>
                        </div> <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="text" locale="{{ __('keywords.phone') }}"
                                    name="phone" value="{{ old('phone', $setting->phone) }}"></x-input-labelv1>
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="text" locale="{{ __('keywords.email') }}"
                                    name="email" value="{{ old('email', $setting->email) }}"></x-input-labelv1>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="text" locale="{{ __('keywords.facebook') }}"
                                    name="facebook" value="{{ old('facebook', $setting->facebook) }}"></x-input-labelv1>
                                <x-input-error :messages="$errors->get('facebook')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="text" locale="{{ __('keywords.instagram') }}"
                                    name="instagram" value="{{ old('instagram', $setting->instagram) }}"></x-input-labelv1>
                                <x-input-error :messages="$errors->get('instagram')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="text" locale="{{ __('keywords.twitter') }}"
                                    name="twitter" value="{{ old('twitter', $setting->twitter) }}"></x-input-labelv1>
                                <x-input-error :messages="$errors->get('twitter')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="text" locale="{{ __('keywords.youtube') }}"
                                    name="youtube" value="{{ old('youtube', $setting->youtube) }}"></x-input-labelv1>
                                <x-input-error :messages="$errors->get('youtube')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-input-labelv1 type="text" locale="{{ __('keywords.linkedin') }}"
                                    name="linkedin" value="{{ old('linkedin', $setting->linkedin) }}"></x-input-labelv1>
                                <x-input-error :messages="$errors->get('linkedin')" class="mt-2" />
                            </div>
                        </div>
                    </div>
                    <x-submit-button value="{{ __('keywords.update_setting') }}"></x-submit-button>
                </div>
            </div>
        </form>
    </div> <!-- .container-fluid -->
@endsection
