<div class="modal fade" id="editModal{{ $app->id }}">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('applications.update', $app->id) }}">
            @csrf @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5>Edit Aplikasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control" value="{{ $app->name }}">
                    </div>

                    <div class="mb-3">
                        <label>Slug</label>
                        <input type="text" name="slug" class="form-control" value="{{ $app->slug }}">
                    </div>

                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <textarea name="description" class="form-control">{{ $app->description }}</textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>