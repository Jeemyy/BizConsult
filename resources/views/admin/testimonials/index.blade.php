@extends('layouts.master-admin')
@section('title', __('keywords.testimonials'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center mb-2">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="h5 page-title">{{ __('keywords.testimonials') }}!</h2>
                            <x-action-button href="{{ route('admin.testimonials.create') }}" type='create_testimonial'></x-action-button>
                        </div>
                    </div>
                </div>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
        <!-- simple table -->
        <div class="card shadow">
            <div class="card-body">
               <x-success-alert></x-success-alert>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="15%">{{ __('keywords.name') }}</th>
                            <th >{{ __("keywords.position") }}</th>
                            <th width="15%">{{ __("keywords.image") }}</th>
                            <th width='15%'>{{ __('keywords.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (count($testimonials) > 0)
                            @foreach ($testimonials as $item)
                                <tr>
                                    {{-- <td>{{ $item->id }}</td> --}}
                                    <td>{{ $testimonials->firstItem() + $loop->index }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->position }}</td>
                                    <td>
                                        <img src="{{ asset("storage/testimonials/". $item->image) }}" width='50px' alt="">
                                    </td>
                                    <td>
                                        <x-action-button href="{{ route('admin.testimonials.edit',    $item->id) }}" type='edit'></x-action-button>
                                        <x-action-button href="{{ route('admin.testimonials.show',    $item->id) }}" type='show'></x-action-button>
                                        <x-delete-button href="{{ route('admin.testimonials.destroy', $item->id) }}" formId="{{ $item->id }}"></x-delete-button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                           <x-empty-alert></x-empty-alert>
                        @endif

                    </tbody>
                </table>
                {{-- {{ $services->render('pagination::bootstrap-4') }} --}}
                {{ $testimonials->links('pagination::bootstrap-4') }}
                {{-- {{$services->links('pagination::simple-bootstrap-4');}} --}}
            </div>
        </div>
        <!-- simple table -->

    </div> <!-- .container-fluid -->
@endsection

