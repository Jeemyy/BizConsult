@extends('layouts.master-admin')
@section('title', __('keywords.services'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center mb-2">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="h5 page-title">{{ __('keywords.services') }}!</h2>
                            <x-action-button href="{{ route('admin.services.create') }}" type='create_service'></x-action-button>
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
                            <th>{{ __('keywords.title') }}</th>
                            <th width="10%">{{ __('keywords.icone') }}</th>
                            <th width="15%">{{ __('keywords.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (count($services) > 0)
                            @foreach ($services as $item)
                                <tr>
                                    {{-- <td>{{ $item->id }}</td> --}}
                                    <td>{{ $services->firstItem() + $loop->index }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>
                                        <i class='fe {{ $item->icone }}'></i>
                                    </td>
                                    <td>
                                        <x-action-button href="{{ route('admin.services.edit', $item->id) }}" type='edit'></x-action-button>
                                        <x-action-button href="{{ route('admin.services.show', $item->id) }}" type='show'></x-action-button>
                                        <x-delete-button href="{{ route('admin.services.destroy', $item->id) }}" formId="{{ $item->id }}"></x-delete-button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                           <x-empty-alert></x-empty-alert>
                        @endif

                    </tbody>
                </table>
                {{-- {{ $services->render('pagination::bootstrap-4') }} --}}
                {{ $services->links('pagination::bootstrap-4') }}
                {{-- {{$services->links('pagination::simple-bootstrap-4');}} --}}
            </div>
        </div>
        <!-- simple table -->

    </div> <!-- .container-fluid -->
@endsection

