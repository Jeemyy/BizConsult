@extends('layouts.master-admin')
@section('title', __('keywords.subscribers'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center mb-2">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="h5 page-title">{{ __('keywords.subscribers') }}!</h2>
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
                            <th>{{ __('keywords.email') }}</th>
                            <th width="15%">{{ __('keywords.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (count($subscribers) > 0)
                            @foreach ($subscribers as $item)
                                <tr>
                                    {{-- <td>{{ $item->id }}</td> --}}
                                    <td>{{ $subscribers->firstItem() + $loop->index }}</td>
                                    <td>{{ $item->email }}</td>

                                    <td>
                                        <x-delete-button href="{{ route('admin.subscribers.destroy', $item->id) }}" formId="{{ $item->id }}"></x-delete-button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                           <x-empty-alert></x-empty-alert>
                        @endif

                    </tbody>
                </table>
                {{-- {{ $services->render('pagination::bootstrap-4') }} --}}
                {{ $subscribers->links('pagination::bootstrap-4') }}
                {{-- {{$services->links('pagination::simple-bootstrap-4');}} --}}
            </div>
        </div>
        <!-- simple table -->

    </div> <!-- .container-fluid -->
@endsection

