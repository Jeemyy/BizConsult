@extends('layouts.master-admin')
@section('title', __('keywords.showmember'))
@section('content')
    <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                             <label for="title">{{ __('keywords.name') }}</label>
                             <p class="form-control">{{ $member->name }}</p>
                            </div>
                        </div> <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="icone">{{ __('keywords.position') }}</label>
                              <p class="form-control">
                                {{ $member->position }}
                              </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="icone">{{ __('keywords.facebook') }}</label>
                              <p class="form-control">
                                {{ $member->facebook }}
                              </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="icone">{{ __('keywords.linkedin') }}</label>
                              <p class="form-control">
                                {{ $member->linkedin }}
                              </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="icone">{{ __('keywords.twitter') }}</label>
                              <p class="form-control">
                                {{ $member->twitter }}
                              </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              {{-- <label for="icone">{{ __('keywords.image') }}</label> --}}
                              <img src="{{ asset("storage/members/".$member->image) }}" width="70px" alt="{{$member->name}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> <!-- .container-fluid -->
@endsection
