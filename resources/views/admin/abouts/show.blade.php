@extends('layouts.master-admin')
@section('title', __('keywords.show_about'))
@section('content')
    <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                             <label for="title">{{ __('keywords.title') }}</label>
                             <p class="form-control">{{ $about->title }}</p>
                            </div>
                        </div> <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="icone">{{ __('keywords.icone') }}</label>
                              <p class="form-control">
                                  <i class='fe {{ $about->icone }}'></i>
                              </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">{{ __('keywords.description') }}</label>
                                <p class="form-control">{{ $about->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> <!-- .container-fluid -->
@endsection
