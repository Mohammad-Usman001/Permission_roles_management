<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roles & Permissions Admin Panel</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS for animation and layout -->
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(-45deg, #0f2027, #203a43, #2c5364, #0f2027);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            color: white;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .auth-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(8px);
            max-width: 400px;
            margin: auto;
        }

        .form-switcher {
            cursor: pointer;
            color: #aadfff;
        }

        .form-switcher:hover {
            text-decoration: underline;
        }

        h1.display-4 {
            font-weight: 600;
            color: #ffffff;
        }
    </style>
</head>
<body>

    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4">Roles & Permissions Admin Panel</h1>
        </div>

        <div class="auth-container" id="auth-box">
            <!-- Login Form (default) -->
            <div id="login-form">
                <h4 class="mb-3 text-white">Login</h4>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
                <p class="mt-3 text-white">Don't have an account?
                    <span class="form-switcher" onclick="switchForm('register')">Register</span>
                </p>
            </div>

            <!-- Register Form -->
            <div id="register-form" style="display: none;">
                <h4 class="mb-3 text-white">Register</h4>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Register</button>
                </form>
                <p class="mt-3 text-white">Already have an account?
                    <span class="form-switcher" onclick="switchForm('login')">Login</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Form Switcher Script -->
    <script>
        function switchForm(formType) {
            document.getElementById('login-form').style.display = formType === 'login' ? 'block' : 'none';
            document.getElementById('register-form').style.display = formType === 'register' ? 'block' : 'none';
        }
    </script>
</body>
</html>
