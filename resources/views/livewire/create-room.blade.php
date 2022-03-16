<div>
    <div class="card mb-5">
        <div class="card-header">Buat Room</div>
        <div class="card-body">
            <form wire:submit.prevent="store">
                <input wire:model="name" type="text" class="form-control mb-3" placeholder="Masukkan nama anda...">
                <textarea wire:model="description" class="form-control mb-3" placeholder="Masukkan deskripsi..."></textarea>
                <button type="submit" class="btn btn-primary float-end">Buat</button>
            </form>
        </div>
    </div>
</div>
