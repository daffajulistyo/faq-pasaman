<div class="modal fade" id="showModal{{ $faq->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Detail FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <div class="mb-3">
                    <strong>Aplikasi:</strong>
                    <div>{{ $faq->application->name }}</div>
                </div>

                <div class="mb-3">
                    <strong>Pertanyaan:</strong>
                    <div>{{ $faq->question }}</div>
                </div>

                <div class="mb-3">
                    <strong>Jawaban:</strong>
                    <div>{!! $faq->answer !!}</div>
                </div>

                <div class="mb-2">
                    <strong>Status:</strong>
                    @if($faq->is_active)
                        <span class="badge bg-success">Aktif</span>
                    @else
                        <span class="badge bg-secondary">Nonaktif</span>
                    @endif
                </div>

            </div>

        </div>
    </div>
</div>