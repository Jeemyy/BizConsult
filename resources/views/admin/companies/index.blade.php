@extends('layouts.master-admin')
@section('title', __('keywords.companies'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center mb-2">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="h5 page-title">{{ __('keywords.companies') }}!</h2>
                            <x-action-button href="{{ route('admin.companies.create') }}"
                                type='create_company'></x-action-button>
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
                            <th>{{ __('keywords.name') }}</th>
                            <th width="15%">{{ __('keywords.image') }}</th>
                            <th width="15%">{{ __('keywords.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (count($companies) > 0)
                            @foreach ($companies as $item)
                                <tr>
                                    {{-- <td>{{ $item->id }}</td> --}}
                                    <td>{{ $companies->firstItem() + $loop->index }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <img src="{{ asset('storage/companies/' . $item->image) }}"
                                            style="background: black;border-radius:10px;" width='50px' alt="">
                                    </td>
                                    <td>
                                        <x-action-button href="{{ route('admin.companies.edit', $item->id) }}"
                                            type='edit'></x-action-button>
                                        <x-delete-button href="{{ route('admin.companies.destroy', $item->id) }}"
                                            formId="{{ $item->id }}"></x-delete-button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <x-empty-alert></x-empty-alert>
                        @endif

                    </tbody>
                </table>
                {{-- {{ $companies->render('pagination::bootstrap-4') }} --}}
                {{ $companies->links('pagination::bootstrap-4') }}
                {{-- {{$companies->links('pagination::simple-bootstrap-4');}} --}}
            </div>
        </div>
        <!-- simple table -->

    </div> <!-- .container-fluid -->
@endsection
