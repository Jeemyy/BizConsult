@extends('layouts.master-admin')
@section('title', __("keywords.show_meassage"))
@section('content')
    <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                          <x-const-input label="{{ __('keywords.name') }}" value="{{ $message->name }}"></x-const-input>
                        </div> <!-- /.col -->
                        <div class="col-md-6">
                          <x-const-input label="{{ __('keywords.email') }}" value="{{ $message->email }}"></x-const-input>
                        </div>
                        <div class="col-md-6">
                          <x-const-input label="{{ __('keywords.subject') }}" value="{{ $message->subject }}"></x-const-input>
                        </div>
                        <div class="col-md-6">
                          <x-const-input label="{{ __('keywords.created_at') }}" value="{{ $message->created_at }}"></x-const-input>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">{{ __('keywords.message') }}</label>
                                <p class="form-control">{{ $message->message }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> <!-- .container-fluid -->
@endsection
