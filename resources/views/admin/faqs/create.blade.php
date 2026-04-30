<div class="modal fade" id="createFaqModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('faqs.store') }}">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah FAQ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <!-- Aplikasi -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-3">
                            <label class="form-label">Aplikasi</label>
                        </div>
                        <div class="col-md-9">
                            <select name="application_id" class="form-control" required>
                                @foreach ($applications as $app)
                                    <option value="{{ $app->id }}">{{ $app->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Pertanyaan -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-3">
                            <label class="form-label">Pertanyaan</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="question" class="form-control" required>
                        </div>
                    </div>

                    <!-- Jawaban -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label class="form-label">Jawaban</label>
                        </div>
                        <div class="col-md-9">
                            <textarea name="answer" class="form-control editor" required></textarea>
                        </div>
                    </div>

                    <input type="hidden" name="is_active" value="0">
                    <input type="checkbox" name="is_active" value="1" checked>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
