
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#08090b">

    <title>Owner Access | SPTRDITZ COLLECTION</title>

    {{-- Connect to public/css/admin-login.css --}}
    <link rel="stylesheet" href="{{ asset('css/admin-login.css') }}">
</head>

<body class="login-page">
    <main class="login-shell">

        <header class="login-brand" aria-label="SPTRDITZ COLLECTION">
            <h1 class="login-brand-name">SPTRDITZ</h1>
            <p class="login-brand-subtitle">COLLECTION</p>
            <div class="login-brand-rule" aria-hidden="true"></div>
        </header>

        <section class="login-panel" aria-labelledby="login-heading">

            <h2 class="login-heading" id="login-heading">OWNER ACCESS</h2>

            <p class="login-intro">Sign in to manage your brand.</p>

            <form
                class="login-form"
                method="POST"
                action="{{ route('admin.login.submit') }}"
            >
                @csrf

                {{-- Email --}}
                <div class="login-field">
                    <label class="login-label" for="email">
                        Email Address
                    </label>

                    <div class="login-input-wrap">
                        <span class="login-input-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                <path d="m4 7 8 6 8-6"></path>
                            </svg>
                        </span>

                        <input
                            class="login-input"
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            placeholder="you@sptrditz.com"
                            autocomplete="username"
                            autocapitalize="none"
                            spellcheck="false"
                            required
                            autofocus
                            aria-invalid="{{ $errors->has('email') ? 'true' : 'false' }}"
                            @if ($errors->has('email'))
                                aria-describedby="login-error"
                            @endif
                        >
                    </div>
                </div>

                {{-- Password --}}
                <div class="login-field">
                    <label class="login-label" for="password">
                        Password
                    </label>

                    <div class="login-input-wrap">
                        <span class="login-input-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <rect x="4" y="10" width="16" height="11" rx="2"></rect>
                                <path d="M8 10V7a4 4 0 0 1 8 0v3"></path>
                            </svg>
                        </span>

                        <input
                            class="login-input"
                            id="password"
                            name="password"
                            type="password"
                            placeholder="Enter your password"
                            autocomplete="current-password"
                            required
                        >

                        <button
                            class="login-password-toggle"
                            type="button"
                            id="toggle-password"
                            aria-label="Show password"
                            aria-controls="password"
                            aria-pressed="false"
                        >
                            <svg viewBox="0 0 24 24" id="password-eye">
                                <path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7S2 12 2 12Z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Login validation errors --}}
                @if ($errors->any())
                    <div
                        class="login-error"
                        id="login-error"
                        role="alert"
                        aria-live="polite"
                    >
                        {{ $errors->first() }}
                    </div>
                @endif

                <button class="login-submit" type="submit">
                    SIGN IN
                </button>
            </form>

            <div class="login-security" aria-hidden="true">
                <span class="login-security-line"></span>

                <span class="login-security-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 2.5 4.5 5.4v5.3c0 5 3.2 8.5 7.5 10.8 4.3-2.3 7.5-5.8 7.5-10.8V5.4L12 2.5Z"></path>
                        <path d="m9 12 2 2 4-4"></path>
                    </svg>
                </span>

                <span class="login-security-line"></span>
            </div>

            <p class="login-footer">AUTHORIZED PERSONNEL ONLY</p>
        </section>

    </main>

    {{-- Show / hide password --}}
    <script>
        (() => {
            const passwordInput = document.getElementById('password');
            const toggleButton = document.getElementById('toggle-password');
            const eyeIcon = document.getElementById('password-eye');

            if (!passwordInput || !toggleButton || !eyeIcon) {
                return;
            }

            toggleButton.addEventListener('click', () => {
                const shouldShow = passwordInput.type === 'password';

                passwordInput.type = shouldShow ? 'text' : 'password';

                toggleButton.setAttribute(
                    'aria-label',
                    shouldShow ? 'Hide password' : 'Show password'
                );

                toggleButton.setAttribute(
                    'aria-pressed',
                    shouldShow ? 'true' : 'false'
                );

                eyeIcon.innerHTML = shouldShow
                    ? '<path d="M3 3l18 18"></path><path d="M10.6 10.6a2 2 0 0 0 2.8 2.8"></path><path d="M9.9 5.2A10.8 10.8 0 0 1 12 5c6.4 0 10 7 10 7a15.8 15.8 0 0 1-3.1 3.9"></path><path d="M6.2 6.2C3.5 8 2 12 2 12s3.6 7 10 7a10 10 0 0 0 4-.8"></path>'
                    : '<path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7S2 12 2 12Z"></path><circle cx="12" cy="12" r="3"></circle>';
            });
        })();
    </script>
</body>
</html>
