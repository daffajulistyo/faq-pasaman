<div class="modal fade" id="showModal{{ $app->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Detail Aplikasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p><strong>Nama:</strong> {{ $app->name }}</p>
                <p><strong>Slug:</strong> {{ $app->slug }}</p>
                <p><strong>Deskripsi:</strong> {{ $app->description }}</p>
            </div>
        </div>
    </div>
</div>