<div>
    <form wire:submit.prevent="store">
        <input wire:model="message" type="text" class="form-control" placeholder="Masukkan pesan anda...">
        <button type="submit" class="btn btn-primary float-end mt-3">Kirim</button>
    </form>
</div>
