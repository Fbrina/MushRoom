<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mush Room Signup</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/signup.css')); ?>">
    <link rel="icon" href="img/core-img/logo1.png">
</head>
<body>
    <div class="container">
        <div class="left-section">
            <h2>Need Mushroom? Go to Mush Room</h2>
            <img src="img/bg-img/now.png" alt="Mush Room App Mockup" class="mockup">
        </div>

        <div class="right-section">


    <form action="<?php echo e(url('/api/register')); ?>" method="POST" class="signup-form">
    <?php echo csrf_field(); ?>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Email" required>

    <label for="phone">Phone Number</label>
    <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>

    <label for="username">Username</label>
    <input type="text" id="username" name="username" placeholder="Username" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Password" required>

    <label for="confirm-password">Confirm Password</label>
    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>


    <div class="button-group">
        <button type="submit" class="create-btn" onclick="showSuccessMessage()">Create</button>
        <button type="button" class="cancel-btn" onclick="redirectToSignIn()">Cancel</button>
    </div>
</form>


    <!-- <form action="<?php echo e(route('signup')); ?>" method="POST" class="signup-form">
    <?php echo csrf_field(); ?>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Email" required>

    <label for="phone">Phone Number</label>
    <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>

    <label for="username">Username</label>
    <input type="text" id="username" name="username" placeholder="Username" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Password" required>

    <label for="confirm-password">Confirm Password</label>
    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>


    <div class="button-group">
        <button type="submit" class="create-btn" onclick="showSuccessMessage()">Create</button>
        <button type="button" class="cancel-btn" onclick="redirectToSignIn()">Cancel</button>
    </div>
</form> -->

                
                <script>
                    function showSuccessMessage() {
                        // Menampilkan pop-up pesan
                        alert('Account Succesfully Created');
                        // Tambahkan logika untuk submit form atau redirect jika diperlukan
                        // Misalnya window.location.href = 'home.html'; untuk redirect setelah form dikirim
                    }
                
                    function redirectToSignIn() {
                        window.location.href = "<?php echo e(route('signin.form')); ?>"; // Ganti dengan URL halaman signin
                    }
                </script>
                
            </form>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\lunaf\mushroom-app\resources\views/home/signup.blade.php ENDPATH**/ ?>