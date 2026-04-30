@extends('admin.layouts.app')
@section('title', 'Master FAQ')

@section('content')
<main class="app-main">

    <!-- HEADER -->
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Master FAQ</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">FAQ</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="app-content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar FAQ</h3>

                    <div class="float-end">
                        <button class="btn btn-success btn-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#createFaqModal">
                            <i class="bi bi-plus"></i> Tambah FAQ
                        </button>
                    </div>
                </div>

                <div class="card-body">

                    <!-- FILTER + SEARCH -->
                    <form method="GET" class="row mb-3">

                        <div class="col-md-3">
                            <select name="application_id" class="form-control">
                                <option value="">-- Semua Aplikasi --</option>
                                @foreach($applications as $app)
                                    <option value="{{ $app->id }}"
                                        {{ request('application_id') == $app->id ? 'selected' : '' }}>
                                        {{ $app->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <input type="text" name="search" class="form-control"
                                placeholder="Cari pertanyaan..."
                                value="{{ request('search') }}">
                        </div>

                        <div class="col-md-3">
                            <button class="btn btn-primary">Filter</button>
                            <a href="{{ route('faqs.index') }}" class="btn btn-secondary">Reset</a>
                        </div>

                    </form>

                    <!-- TABLE -->
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Aplikasi</th>
                                <th>Pertanyaan</th>
                                <th>Status</th>
                                <th width="150">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($faqs as $index => $faq)
                                <tr>
                                    <td>{{ $faqs->firstItem() + $index }}</td>
                                    <td>{{ $faq->application->name }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($faq->question, 60) }}</td>
                                    <td>
                                        @if($faq->is_active)
                                            <span class="badge bg-success">Aktif</span>
                                        @else
                                            <span class="badge bg-secondary">Nonaktif</span>
                                        @endif
                                    </td>
                                    <td>
                                        <!-- SHOW -->
                                        <button class="btn btn-info btn-sm"
                                            data-bs-toggle="modal"
                                            data-bs-target="#showModal{{ $faq->id }}">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <!-- EDIT -->
                                        <button class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $faq->id }}">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <!-- DELETE -->
                                        <form id="delete-form-{{ $faq->id }}"
                                            action="{{ route('faqs.destroy', $faq->id) }}"
                                            method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="button"
                                                class="btn btn-danger btn-sm"
                                                onclick="confirmDelete({{ $faq->id }})">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                {{-- MODALS --}}
                                @include('admin.faqs.edit')
                                @include('admin.faqs.show')
                            @endforeach
                        </tbody>
                    </table>

                </div>

                <div class="card-footer clearfix">
                    {{ $faqs->links() }}
                </div>
            </div>

        </div>
    </div>
</main>

{{-- CREATE MODAL --}}
@include('admin.faqs.create')

{{-- DELETE CONFIRM --}}
<script>
function confirmDelete(id) {
    if (confirm('Apakah yakin ingin menghapus FAQ ini?')) {
        document.getElementById('delete-form-' + id).submit();
    }
}
</script>

{{-- SUMMERNOTE --}}
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

<script>
    $(document).ready(function () {
        $('.editor').summernote({
            height: 150
        });
    });
</script>

@endsection