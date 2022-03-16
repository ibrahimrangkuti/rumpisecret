@extends('layouts.app')

@push('style')
    @livewireStyles
@endpush
@push('script')
    @livewireScripts
@endpush

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-header">Room Tersedia</div>
                <div class="card-body">
                    @foreach ($users as $user)
                        <a href="{{ route('room.show', $user->link) }}" style="text-decoration: none">{{ $user->name }}</a><br>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-9">
            @livewire('create-room')
        </div>
    </div>
@endsection