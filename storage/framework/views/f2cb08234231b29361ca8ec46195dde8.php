<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mush Room Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/signin.css')); ?>">
    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(asset('img/core-img/logo1.png')); ?>">
</head>
<body>
    <a href="<?php echo e(route('home')); ?>" class="close-btn">
        <img src="<?php echo e(asset('img/core-img/cancel.png')); ?>" alt="Close">
    </a>
    <div class="login-container">
        <div class="login-box">
            <div class="logo">
                <img src="<?php echo e(asset('img/core-img/img.png')); ?>" alt="Mush Room Logo">
            </div>

            <!-- Main Login Form -->
            <form action="<?php echo e(route('signin')); ?>" method="POST">
                <?php echo csrf_field(); ?>
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
                    <a href="<?php echo e(route('forgot')); ?>" class="forgot-password">Forgot Password?</a>
                </div>
                <button type="submit" class="login-btn">Log In</button>
            </form>

            <div class="signup">
                <p>Don’t have an account? <a href="<?php echo e(route('signup')); ?>">Sign up here!</a></p>
            </div>
        </div>
    </div>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mush Room Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/signin.css')); ?>"> -->
<!-- Favicon -->
<!-- <link rel="icon" href="img/core-img/logo1.png">
</head>
<body>
<a href="<?php echo e(route('home')); ?>" class="close-btn">
    <img src="img/core-img/cancel.png" alt="Close">
</a>
    <div class="login-container">
        <div class="login-box">
            <div class="logo">
                <img src="<?php echo e(asset('img/core-img/img.png')); ?>" alt="Mush Room Logo">
            </div>
    <form action="<?php echo e(route('signin.form')); ?>" method="POST">
    <?php echo csrf_field(); ?>
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
                    <a href="<?php echo e(route('forgot')); ?>" class="forgot-password">Forgot Password?</a>
                </div>
                <form action="<?php echo e(route('dashboard')); ?>" method="get">
    <button type="submit" class="login-btn">Log In</button>
</form>

</form>

            <div class="signup">
                <p>Don’t have an account? <a href="<?php echo e(route('signup')); ?>">Sign up here!</a></p>
            </div>
        </div>
    </div>
</body>
</html> -->
<?php /**PATH C:\Users\lunaf\mushroom-app\resources\views/home/signin.blade.php ENDPATH**/ ?>