@extends('admin.layouts.app')
@section('title', 'Master Aplikasi')

@section('content')
<main class="app-main">

    <!-- HEADER -->
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Master Aplikasi</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Aplikasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="app-content">
        <div class="container-fluid">
            <div class="card mb-4">

                <div class="card-header">
                    <h3 class="card-title">Daftar Aplikasi</h3>

                    <div class="float-end">
                        <button class="btn btn-success btn-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#createApplicationModal">
                            <i class="bi bi-plus"></i> Tambah
                        </button>
                    </div>
                </div>

                <div class="card-body">

                    <!-- 🔍 SEARCH -->
                    <form method="GET" class="row mb-3">
                        <div class="col-md-4">
                            <input type="text"
                                name="search"
                                class="form-control"
                                placeholder="Cari nama aplikasi..."
                                value="{{ request('search') }}">
                        </div>

                        <div class="col-md-3">
                            <button class="btn btn-primary">
                                <i class="bi bi-search"></i> Cari
                            </button>

                            <a href="{{ route('applications.index') }}"
                                class="btn btn-secondary">
                                Reset
                            </a>
                        </div>
                    </form>

                    <!-- TABLE -->
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="50">#</th>
                                <th>Nama</th>
                                <th width="150">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($applications as $index => $app)
                                <tr>
                                    <td>{{ $applications->firstItem() + $index }}</td>
                                    <td>{{ $app->name }}</td>
                                    <td>

                                        <!-- SHOW -->
                                        <button class="btn btn-info btn-sm"
                                            data-bs-toggle="modal"
                                            data-bs-target="#showModal{{ $app->id }}">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <!-- EDIT -->
                                        <button class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $app->id }}">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <!-- DELETE -->
                                        <form id="delete-form-{{ $app->id }}"
                                            action="{{ route('applications.destroy', $app->id) }}"
                                            method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="button"
                                                class="btn btn-danger btn-sm"
                                                onclick="confirmDelete({{ $app->id }})">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>

                                {{-- MODAL --}}
                                @include('admin.aplikasi.edit')
                                @include('admin.aplikasi.show')

                            @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted">
                                        Data aplikasi tidak ditemukan
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>

                <div class="card-footer clearfix">
                    {{ $applications->withQueryString()->links() }}
                </div>

            </div>
        </div>
    </div>
</main>

{{-- CREATE MODAL --}}
@include('admin.aplikasi.create')

{{-- DELETE CONFIRM --}}
<script>
function confirmDelete(id) {
    if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
        document.getElementById('delete-form-' + id).submit();
    }
}
</script>

@endsection