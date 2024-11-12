<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mush Room Signup</title>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <link rel="icon" href="img/core-img/logo1.png">
</head>
<body>
    <div class="container">
        <div class="left-section">
            <h2>Need Mushroom? Go to Mush Room</h2>
            <img src="img/bg-img/now.png" alt="Mush Room App Mockup" class="mockup">
        </div>

        <div class="right-section">


        <form action="{{ url('/api/register') }}" method="POST" class="signup-form" id="signupForm">
    @csrf
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
        <button type="submit" class="create-btn">Create</button>
        <button type="button" class="cancel-btn" onclick="redirectToSignIn()">Cancel</button>
    </div>
</form>
                
<script>

document.getElementById("signupForm").addEventListener("submit", function(event) {
        event.preventDefault();
        const form = event.target;

        fetch(form.action, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json"
            },
            body: JSON.stringify({
                email: form.email.value,
                phone: form.phone.value,
                username: form.username.value,
                password: form.password.value,
                password_confirmation: form.password_confirmation.value
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.errors) {
                if (data.errors.email) {
                    alert("Email has already been taken");
                }
                if (data.errors.username) {
                    alert("Username has already been taken");
                }
            } else {
                alert("Account successfully created");
                window.location.href = "{{ route('signin.form') }}"; // Redirect after success
            }
        })
        .catch(error => console.error("Error:", error));
    });

    function redirectToSignIn() {
        window.location.href = "{{ route('signin.form') }}";
    }

                    // function showSuccessMessage() {
                    //     // Menampilkan pop-up pesan
                    //     alert('Account Succesfully Created');
                    //     // Tambahkan logika untuk submit form atau redirect jika diperlukan
                    //     // Misalnya window.location.href = 'home.html'; untuk redirect setelah form dikirim
                    // }
                
                    // function redirectToSignIn() {
                        // window.location.href = "";  Ganti dengan URL halaman signin
                    // }
                </script>
                
            
        </div>
    </div>
</body>
</html>
