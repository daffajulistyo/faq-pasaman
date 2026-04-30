@extends('admin.layouts.app')
@section('title', 'Master Aplikasi')

@section('content')
    <main class="app-main">
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

        <div class="app-content">
            <div class="container-fluid">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Aplikasi</h3>

                        <div class="float-end">
                            <button class="btn btn-success btn-sm" data-bs-toggle="modal"
                                data-bs-target="#createApplicationModal">
                                <i class="bi bi-plus"></i> Tambah
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Slug</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($applications as $index => $app)
                                    <tr>
                                        <td>{{ $applications->firstItem() + $index }}</td>
                                        <td>{{ $app->name }}</td>
                                        <td>{{ $app->slug }}</td>
                                        <td>
                                            <!-- Show -->
                                            <button class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#showModal{{ $app->id }}">
                                                <i class="bi bi-eye"></i>
                                            </button>

                                            <!-- Edit -->
                                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editModal{{ $app->id }}">
                                                <i class="bi bi-pencil"></i>
                                            </button>

                                            <!-- Delete -->
                                            <form id="delete-form-{{ $app->id }}"
                                                action="{{ route('applications.destroy', $app->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')

                                                <button type="button" class="btn btn-danger btn-sm"
                                                    onclick="confirmDelete({{ $app->id }})" title="Hapus">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                    {{-- INCLUDE MODAL --}}
                                    @include('admin.aplikasi.edit')
                                    @include('admin.aplikasi.show')
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer clearfix">
                        {{ $applications->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- CREATE MODAL --}}
    @include('admin.aplikasi.create')

@endsection
