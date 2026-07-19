<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Tangan Peduli Tegal</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body{
            font-family:'Inter',sans-serif;
            background:linear-gradient(135deg,#355f2e,#6f8f55);
            min-height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .login-card{
            width:100%;
            max-width:430px;
            border:none;
            border-radius:20px;
            box-shadow:0 20px 45px rgba(0,0,0,.15);
        }

        .logo{
            width:90px;
            height:90px;
            object-fit:contain;
        }

        .btn-login{
            background:#355f2e;
            border:none;
            border-radius:10px;
        }

        .btn-login:hover{
            background:#2b4c25;
        }

        .form-control{
            border-radius:10px;
            padding:.75rem;
        }

        .title{
            color:#355f2e;
            font-weight:700;
        }
    </style>
</head>

<body>

<div class="card login-card p-4">

    <div class="text-center mb-4">

        <img src="{{ asset('fotologo.png') }}" class="logo mb-3" alt="Logo">

        <h3 class="title">Admin Tangan Peduli</h3>

        <p class="text-muted mb-0">
            Silakan login untuk melanjutkan
        </p>

    </div>

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">
                Email
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="form-control @error('email') is-invalid @enderror"
                required
                autofocus>

            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">

            <label class="form-label">
                Password
            </label>

            <input
                type="password"
                name="password"
                class="form-control @error('password') is-invalid @enderror"
                required>

            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <div class="form-check mb-3">
            <input
                class="form-check-input"
                type="checkbox"
                name="remember"
                id="remember">

            <label class="form-check-label" for="remember">
                Ingat Saya
            </label>
        </div>

        <button class="btn btn-success btn-login w-100">
            Login
        </button>

    </form>

</div>

</body>
</html>