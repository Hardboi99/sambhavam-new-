{{-- SAVE AS: resources/views/admin/auth/login.blade.php --}}
{{-- (create the folders admin/auth/ inside resources/views/ if they don't exist yet) --}}

@php
    $errors = $errors ?? new \Illuminate\Support\ViewErrorBag;
@endphp

<x-guest-layout>
    <div class="mb-6 text-center">
        <span class="inline-block px-3 py-1 text-xs font-semibold tracking-wide text-white bg-gray-900 rounded-full">
            SAMBHAVAM ADMIN
        </span>
        <h1 class="mt-3 text-xl font-bold text-gray-800">Admin Sign In</h1>
        <p class="text-sm text-gray-500">Restricted access for SAMBHAVAM staff only.</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ url('/admin/login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <div style="position: relative;">
                <x-text-input id="password" style="width: 100%; padding-right: 40px;" class="block mt-1"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <button type="button"
                        id="togglePassword"
                        style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); background: none; border: none; cursor: pointer; padding: 0; color: #9ca3af;"
                        aria-label="Show password">
                    <svg id="eyeIconShow" xmlns="http://www.w3.org/2000/svg" style="height: 20px; width: 20px;" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    <svg id="eyeIconHide" xmlns="http://www.w3.org/2000/svg" style="height: 20px; width: 20px; display: none;" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd" />
                        <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
                    </svg>
                </button>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-gray-900 shadow-sm focus:ring-gray-900" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-900 border border-transparent rounded-md font-semibold text-xs text-primary  uppercase tracking-widest hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition ease-in-out duration-150">
                {{ __('Sign In as Admin') }}
            </button>
        </div>

        <p class="mt-6 text-center text-xs text-gray-400">
            <a href="{{ route('login') }}" class="underline hover:text-gray-600">
                Not an admin? Student login here
            </a>
        </p>
    </form>
</x-guest-layout>

<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordInput = document.getElementById('password');
        const eyeShow = document.getElementById('eyeIconShow');
        const eyeHide = document.getElementById('eyeIconHide');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeShow.style.display = 'none';
            eyeHide.style.display = 'block';
        } else {
            passwordInput.type = 'password';
            eyeShow.style.display = 'block';
            eyeHide.style.display = 'none';
        }
    });
</script>