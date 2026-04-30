<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Masuk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/dist/assets/img/logo.png') }}">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'shake': 'shake 0.5s ease-in-out',
                        'fadeIn': 'fadeIn 0.3s ease-in-out'
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-5px);
            }

            75% {
                transform: translateX(5px);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-purple-50 flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
            <!-- Header -->
            <div class="text-center mb-8">
                <div
                    class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                    {{-- <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg> --}}
                    <img src="{{ asset('assets/dist/assets/img/logo.png') }}" alt="Logo" class="w-22 h-22">

                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Selamat Datang</h2>
                <p class="text-gray-600">Silakan masuk ke akun Anda</p>
            </div>

            <!-- Error Alert - Laravel Session Errors -->
            @if ($errors->any() || session('error'))
                <div id="errorAlert" class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 rounded-r-lg animate-fadeIn">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-red-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span id="errorMessage" class="text-red-700 text-sm font-medium">
                            @if (session('error'))
                                {{ session('error') }}
                            @else
                                Terjadi kesalahan dalam login. Silakan periksa kembali data Anda.
                            @endif
                        </span>
                    </div>
                </div>
            @else
                <div id="errorAlert"
                    class="hidden mb-6 p-4 bg-red-50 border-l-4 border-red-500 rounded-r-lg animate-fadeIn">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-red-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span id="errorMessage" class="text-red-700 text-sm font-medium"></span>
                    </div>
                </div>
            @endif

            <!-- Login Form -->
            <form id="loginForm" method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf
                <!-- Username Field -->
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700 mb-2">
                        Username
                    </label>
                    <div class="relative">
                        <input type="text" id="username" name="username" value="{{ old('username') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 pl-11 @error('username') border-red-500 focus:ring-red-500 @enderror"
                            placeholder="Masukkan username ">
                        <svg class="absolute left-3 top-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <p id="usernameError" class="mt-1 text-red-600 text-sm @error('username') @else hidden @enderror">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </p>
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        Password
                    </label>
                    <div class="relative">
                        <input type="password" id="password" name="password"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 pl-11 pr-11 @error('password') border-red-500 focus:ring-red-500 @enderror"
                            placeholder="Masukkan password">
                        <svg class="absolute left-3 top-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                        <button type="button" id="togglePassword"
                            class="absolute right-3 top-3.5 text-gray-400 hover:text-gray-600 transition-colors duration-200">
                            <svg id="eyeOpen" class="w-5 h-5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                            <svg id="eyeClosed" class="w-5 h-5 hidden" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L8.464 8.464M9.878 9.878l4.242 4.242m0 0L17.535 17.535M17.535 17.535L16.122 16.122">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <p id="passwordError" class="mt-1 text-red-600 text-sm @error('password') @else hidden @enderror">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </p>
                </div>


                <!-- Submit Button -->
                <button type="submit" id="loginButton"
                    class="w-full bg-gradient-to-r from-green-500 to-emerald-600 text-white py-3 px-4 rounded-lg font-medium hover:from-green-600 hover:to-emerald-700 focus:ring-4 focus:ring-green-300 transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98]">
                    <span id="buttonText">Masuk</span>
                    <svg id="loadingSpinner" class="hidden animate-spin -ml-1 mr-3 h-5 w-5 text-white inline"
                        fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                </button>
            </form>

            <!-- Divider -->
            <div class="mt-8 text-center">
                <p class="text-sm text-gray-600">
                    Dinas Komunikasi dan Informatika Kabupaten Pasaman &copy;2025
                </p>
            </div>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div id="successMessage"
                class="mt-6 p-4 bg-green-50 border-l-4 border-green-500 rounded-r-lg animate-fadeIn">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-green-700 text-sm font-medium">{{ session('success') }}</span>
                </div>
            </div>
        @endif
    </div>

    <script>
        // Form elements
        const form = document.getElementById('loginForm');
        const usernameInput = document.getElementById('username');
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');
        const eyeOpen = document.getElementById('eyeOpen');
        const eyeClosed = document.getElementById('eyeClosed');

        // Toggle password visibility
        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            eyeOpen.classList.toggle('hidden');
            eyeClosed.classList.toggle('hidden');
        });

        // Clear Laravel errors when user types
        usernameInput.addEventListener('input', function() {
            this.classList.remove('border-red-500', 'focus:ring-red-500');
            const errorElement = document.getElementById('usernameError');
            if (!errorElement.textContent.trim()) {
                errorElement.classList.add('hidden');
            }
        });

        passwordInput.addEventListener('input', function() {
            this.classList.remove('border-red-500', 'focus:ring-red-500');
            const errorElement = document.getElementById('passwordError');
            if (!errorElement.textContent.trim()) {
                errorElement.classList.add('hidden');
            }
        });

        // Client-side validation before submit
        form.addEventListener('submit', function(e) {
            const username = usernameInput.value.trim();
            const password = passwordInput.value.trim();

            let hasError = false;

            // Clear previous client-side errors
            usernameInput.classList.remove('border-red-500', 'focus:ring-red-500');
            passwordInput.classList.remove('border-red-500', 'focus:ring-red-500');

            // Validate username
            if (!username) {
                usernameInput.classList.add('border-red-500', 'focus:ring-red-500');
                hasError = true;
            }

            // Validate password
            if (!password) {
                passwordInput.classList.add('border-red-500', 'focus:ring-red-500');
                hasError = true;
            }

            // If validation fails, shake the form
            if (hasError) {
                e.preventDefault();
                form.classList.add('animate-shake');
                setTimeout(() => form.classList.remove('animate-shake'), 500);
                return;
            }

            // Show loading state
            const submitButton = form.querySelector('button[type="submit"]');
            const buttonText = submitButton.querySelector('#buttonText');
            const loadingSpinner = submitButton.querySelector('#loadingSpinner');

            submitButton.disabled = true;
            submitButton.classList.add('opacity-75', 'cursor-not-allowed');
            buttonText.textContent = 'Memproses...';
            loadingSpinner.classList.remove('hidden');
        });

        // Auto-hide success/error messages after 5 seconds
        const successMessage = document.getElementById('successMessage');
        const errorAlert = document.getElementById('errorAlert');

        if (successMessage && !successMessage.classList.contains('hidden')) {
            setTimeout(() => {
                successMessage.style.opacity = '0';
                setTimeout(() => successMessage.remove(), 300);
            }, 5000);
        }

        if (errorAlert && !errorAlert.classList.contains('hidden')) {
            setTimeout(() => {
                errorAlert.style.opacity = '0';
                setTimeout(() => errorAlert.classList.add('hidden'), 300);
            }, 5000);
        }
    </script>
</body>

</html>
