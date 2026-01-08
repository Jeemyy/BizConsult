@extends('layouts.master-admin')
@section('title', __('keywords.showtestimonial'))
@section('content')
    <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                             <label for="title">{{ __('keywords.title') }}</label>
                             <p class="form-control">{{ $testimonial->name }}</p>
                            </div>
                        </div> <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="icone">{{ __('keywords.position') }}</label>
                              <p class="form-control">
                                {{ $testimonial->position }}
                              </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              {{-- <label for="icone">{{ __('keywords.image') }}</label> --}}
                              <img src="{{ asset("storage/testimonials/".$testimonial->image) }}" width="50px" alt="{{$testimonial->name}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">{{ __('keywords.description') }}</label>
                                <p class="form-control">{{ $testimonial->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> <!-- .container-fluid -->
@endsection
