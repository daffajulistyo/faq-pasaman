<div class="modal fade" id="editModal{{ $faq->id }}" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('faqs.update', $faq->id) }}">
            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit FAQ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <!-- Aplikasi -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-3">
                            <label class="form-label">Aplikasi</label>
                        </div>
                        <div class="col-md-9">
                            <select name="application_id" class="form-control">
                                @foreach ($applications as $app)
                                    <option value="{{ $app->id }}"
                                        {{ $faq->application_id == $app->id ? 'selected' : '' }}>
                                        {{ $app->name }}
                                    </option>
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
                            <input type="text" name="question" class="form-control" value="{{ $faq->question }}"
                                required>
                        </div>
                    </div>

                    <!-- Jawaban -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label class="form-label">Jawaban</label>
                        </div>
                        <div class="col-md-9">
                            <textarea name="answer" class="form-control editor">{{ $faq->answer }}</textarea>
                        </div>
                    </div>


                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
