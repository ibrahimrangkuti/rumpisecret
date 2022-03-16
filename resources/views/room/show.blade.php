@extends('layouts.app')

@push('style')
    @livewireStyles
@endpush
@push('script')
    @livewireScripts
@endpush

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <a href="{{ route('home') }}" class="btn btn-primary mb-3">Buat Room Sendiri</a>
            <div class="card">
                <div class="card-header">
                    <h4>{{ $user->name }}</h4>
                </div>
                <div class="card-body">
                    @if ($user->description == NULL)
                        <p style="font-style: italic">Tidak ada deskripsi.</p>
                    @else
                        <p>Deskripsi :</p>
                        <input type="text" class="form-control mb-3" value="{{ $user->description }}" disabled>
                    @endif
                    @livewire('create-message', ['user' => $user])
                </div>
            </div>

            @if ($messages->count() > 0)
                @livewire('room-message', ['user' => $user])
            @endif
        </div>
    </div>
@endsection