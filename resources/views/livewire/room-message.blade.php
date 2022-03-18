<div class="mt-5" wire:poll>
    <div class="mb-3">
        <h4>Pesan ({{ $messages->count() }})</h4>
    </div>
    @foreach ($messages as $message)
        <div class="card mb-3">
            <div class="card-body">
                <p>{{ $message->message }}</p>
            </div>
        </div>
    @endforeach
</div>
