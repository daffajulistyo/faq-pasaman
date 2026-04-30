@extends('admin.layouts.app')
@section('title', 'Reset Password')
@section('content')
    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Reset Password</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Reset Password</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-content-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow-sm border-0">
                            <div class="card-header bg-primary text-white">
                                <h4 class="card-title mb-0">
                                    <i class="fas fa-key me-2"></i>Reset Password
                                </h4>
                            </div>
                            <div class="card-body p-4">
                                {{-- Alert Messages --}}
                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="fas fa-check-circle me-2"></i>
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif

                                @if($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="fas fa-exclamation-triangle me-2"></i>
                                        <ul class="mb-0">
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('users.reset_password', auth()->user()->id) }}">
                                    @csrf
                                    @method('PUT')

                                    {{-- Current User Info --}}
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="alert alert-info border-start border-4 border-info">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-user-circle fa-2x text-info me-3"></i>
                                                    <div>
                                                        <h6 class="mb-1">Reset password untuk:</h6>
                                                        <p class="mb-0 fw-bold">{{ auth()->user()->name }} ({{ auth()->user()->email }})</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Password Baru --}}
                                    <div class="row mb-3 align-items-center">
                                        <div class="col-md-4">
                                            <label for="password" class="form-label fw-bold">
                                                <i class="fas fa-lock text-primary me-1"></i>
                                                Password Baru
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="fas fa-key text-muted"></i>
                                                </span>
                                                <input type="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       id="password"
                                                       name="password"
                                                       placeholder="Masukkan password baru"
                                                       required>
                                                <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                                                    <i class="fas fa-eye" id="togglePasswordIcon"></i>
                                                </button>
                                            </div>
                                            @error('password')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <small class="form-text text-muted">
                                                <i class="fas fa-info-circle me-1"></i>
                                                Password minimal 8 karakter, kombinasi huruf, angka dan simbol
                                            </small>
                                        </div>
                                    </div>

                                    {{-- Konfirmasi Password --}}
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-md-4">
                                            <label for="password_confirmation" class="form-label fw-bold">
                                                <i class="fas fa-lock text-primary me-1"></i>
                                                Konfirmasi Password
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="fas fa-check-double text-muted"></i>
                                                </span>
                                                <input type="password"
                                                       class="form-control @error('password_confirmation') is-invalid @enderror"
                                                       id="password_confirmation"
                                                       name="password_confirmation"
                                                       placeholder="Konfirmasi password baru"
                                                       required>
                                                <button type="button" class="btn btn-outline-secondary" id="toggleConfirmPassword">
                                                    <i class="fas fa-eye" id="toggleConfirmPasswordIcon"></i>
                                                </button>
                                            </div>
                                            @error('password_confirmation')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Action Buttons --}}
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-8">
                                            <div class="d-flex gap-2">
                                                <button type="submit" class="btn btn-primary px-4">
                                                    <i class="fas fa-save me-2"></i>
                                                    Reset Password
                                                </button>
                                                <button type="button" class="btn btn-secondary px-4" onclick="window.history.back()">
                                                    <i class="fas fa-arrow-left me-2"></i>
                                                    Kembali
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        {{-- Security Tips Card --}}
                        <div class="card shadow-sm border-0 mt-4">
                            <div class="card-header bg-light">
                                <h6 class="card-title mb-0">
                                    <i class="fas fa-shield-alt text-success me-2"></i>
                                    Tips Keamanan Password
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2">
                                                <i class="fas fa-check text-success me-2"></i>
                                                Minimal 8 karakter
                                            </li>
                                            <li class="mb-2">
                                                <i class="fas fa-check text-success me-2"></i>
                                                Kombinasi huruf besar dan kecil
                                            </li>
                                            <li class="mb-0">
                                                <i class="fas fa-check text-success me-2"></i>
                                                Gunakan angka dan simbol
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2">
                                                <i class="fas fa-times text-danger me-2"></i>
                                                Jangan gunakan tanggal lahir
                                            </li>
                                            <li class="mb-2">
                                                <i class="fas fa-times text-danger me-2"></i>
                                                Hindari kata umum
                                            </li>
                                            <li class="mb-0">
                                                <i class="fas fa-times text-danger me-2"></i>
                                                Jangan bagikan ke orang lain
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- JavaScript for Password Toggle --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle password visibility
            const togglePassword = document.getElementById('togglePassword');
            const password = document.getElementById('password');
            const togglePasswordIcon = document.getElementById('togglePasswordIcon');

            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                togglePasswordIcon.classList.toggle('fa-eye');
                togglePasswordIcon.classList.toggle('fa-eye-slash');
            });

            // Toggle confirm password visibility
            const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
            const confirmPassword = document.getElementById('password_confirmation');
            const toggleConfirmPasswordIcon = document.getElementById('toggleConfirmPasswordIcon');

            toggleConfirmPassword.addEventListener('click', function() {
                const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
                confirmPassword.setAttribute('type', type);
                toggleConfirmPasswordIcon.classList.toggle('fa-eye');
                toggleConfirmPasswordIcon.classList.toggle('fa-eye-slash');
            });

            // Password strength indicator (optional)
            password.addEventListener('input', function() {
                const value = this.value;
                const strength = getPasswordStrength(value);
                // You can add password strength indicator here
            });

            function getPasswordStrength(password) {
                let score = 0;
                if (password.length >= 8) score++;
                if (/[a-z]/.test(password)) score++;
                if (/[A-Z]/.test(password)) score++;
                if (/[0-9]/.test(password)) score++;
                if (/[^A-Za-z0-9]/.test(password)) score++;
                return score;
            }
        });
    </script>
@endsection
