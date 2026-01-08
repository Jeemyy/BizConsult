@extends('layouts.master-admin')
@section('title', __('keywords.messages'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center mb-2">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="h5 page-title">{{ __('keywords.messages') }}!</h2>
                            {{-- <x-action-button href="{{ route('admin.messages.create') }}" type='create_message'></x-action-button> --}}
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
                            <th width='15%'>{{ __('keywords.name') }}</th>
                            <th width='15%'>{{ __('keywords.email') }}</th>
                            <th>{{ __("keywords.subject") }}</th>
                            <th width="15%">{{ __('keywords.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (count($messages) > 0)
                            @foreach ($messages as $item)
                                <tr>
                                    {{-- <td>{{ $item->id }}</td> --}}
                                    <td>{{ $messages->firstItem() + $loop->index }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        {{ $item->subject }}
                                    </td>
                                    <td>
                                        {{-- <x-action-button href="{{ route('admin.messages.edit', $item->id) }}" type='edit'></x-action-button> --}}
                                        <x-action-button href="{{ route('admin.messages.show', $item->id) }}" type='show'></x-action-button>
                                        <x-delete-button href="{{ route('admin.messages.destroy', $item->id) }}" formId="{{ $item->id }}"></x-delete-button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                           <x-empty-alert></x-empty-alert>
                        @endif

                    </tbody>
                </table>
                {{-- {{ $messages->render('pagination::bootstrap-4') }} --}}
                {{ $messages->links('pagination::bootstrap-4') }}
                {{-- {{$messages->links('pagination::simple-bootstrap-4');}} --}}
            </div>
        </div>
        <!-- simple table -->

    </div> <!-- .container-fluid -->
@endsection

