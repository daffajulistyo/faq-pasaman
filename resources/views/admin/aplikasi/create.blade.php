<div class="modal fade" id="createApplicationModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('applications.store') }}">
            @csrf

            <div class="modal-content">
                <!-- HEADER -->
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Aplikasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- BODY -->
                <div class="modal-body">

                    <!-- Nama -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-3">
                            <label class="form-label mb-0">Nama</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text"
                                name="name"
                                class="form-control"
                                placeholder="Masukkan nama aplikasi"
                                required>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="row mb-3 align-items-start">
                        <div class="col-md-3">
                            <label class="form-label mb-0">Deskripsi</label>
                        </div>
                        <div class="col-md-9">
                            <textarea name="description"
                                class="form-control"
                                rows="3"
                                placeholder="Masukkan deskripsi aplikasi"></textarea>
                        </div>
                    </div>

                </div>

                <!-- FOOTER -->
                <div class="modal-footer">
                    <button type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">
                        Tutup
                    </button>

                    <button type="submit"
                        class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>