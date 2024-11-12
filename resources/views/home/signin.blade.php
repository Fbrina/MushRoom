<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mush Room Login</title>
    <link rel="stylesheet" href="../../../public/css/signin.css') }}">
    <!-- Favicon -->
    <link rel="icon" href="../../../public/img/core-img/logo1.png') }}">
</head>
<body>
    <a href="{{ route('home') }}" class="close-btn">
        <img src="../../../public/img/core-img/cancel.png') }}" alt="Close">
    </a>
    <div class="login-container">
        <div class="login-box">
            <div class="logo">
                <img src="../../../public/img/core-img/img.png') }}" alt="Mush Room Logo">
            </div>

            <!-- Main Login Form -->
            <form action="{{ route('signin') }}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="options">
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                    <a href="{{ route('forgot') }}" class="forgot-password">Forgot Password?</a>
                </div>
                <button type="submit" class="login-btn">Log In</button>
            </form>

            <div class="signup">
                <p>Don’t have an account? <a href="{{ route('signup') }}">Sign up here!</a></p>
            </div>
        </div>
    </div>
</body>
</html>

