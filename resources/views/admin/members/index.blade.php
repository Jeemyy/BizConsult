
@extends('layouts.master-admin')
@section('title', __('keywords.members'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center mb-2">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="h5 page-title">{{ __('keywords.members') }}!</h2>
                            <x-action-button href="{{ route('admin.members.create') }}" type='create_member'></x-action-button>
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
                        @if (count($members) > 0)
                            @foreach ($members as $item)
                                <tr>
                                    {{-- <td>{{ $item->id }}</td> --}}
                                    <td>{{ $members->firstItem() + $loop->index }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->position }}</td>
                                    <td>
                                        <img src="{{ asset("storage/members/". $item->image) }}" width='50px' alt="">
                                    </td>
                                    <td>
                                        <x-action-button href="{{ route('admin.members.edit',    $item->id) }}" type='edit'></x-action-button>
                                        <x-action-button href="{{ route('admin.members.show',    $item->id) }}" type='show'></x-action-button>
                                        <x-delete-button href="{{ route('admin.members.destroy', $item->id) }}" formId="{{ $item->id }}"></x-delete-button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                           <x-empty-alert></x-empty-alert>
                        @endif

                    </tbody>
                </table>
                {{-- {{ $services->render('pagination::bootstrap-4') }} --}}
                {{ $members->links('pagination::bootstrap-4') }}
                {{-- {{$services->links('pagination::simple-bootstrap-4');}} --}}
            </div>
        </div>
        <!-- simple table -->

    </div> <!-- .container-fluid -->
@endsection

