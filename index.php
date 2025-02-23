
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | QR Code Attendance System</title>

    <!-- Consolidating favicon and styles for better maintainability -->
    <link rel="icon" href="/Images/USeP.png" />
    <link rel="stylesheet" href="/Styles/Sign-in.css" />
</head>

<body>
<header>
    <div class="brand-container">
        <img src="/Images/USeP.png" width="316" alt="University Logo">
        <h1 class="brand-title">QR Code Attendance System</h1> <!-- Changed to <h1> for semantic heading -->
    </div>
</header>


<!---mga bubbles-->
<section class="bubble-container">
    <img id="logo" src="/Images/Logo.png" alt="Logo" />
    <div class="bubble" id="bubble-1"></div>
    <div class="bubble" id="bubble-2"></div>
    <div class="bubble" id="bubble-3"></div>
    <div class="bubble" id="bubble-4"></div>
    <div class="bubble" id="bubble-5"></div>
    <div class="bubble" id="bubble-6"></div>
    <div class="bubble" id="bubble-7"></div>
    <div class="bubble" id="bubble-8"></div>
</section>

<main>
    <div class="login-container">
        <h2 class="login-title">Log In</h2> <!-- Capitalized for consistency -->
        <form id="login-form">
            <div class="input-group">
                <input id="input-username" type="text" placeholder="Username" aria-label="Username" required>
                <div id="unBox"></div>
            </div>

            <div class="input-group">
                <input id="input-password" type="password" placeholder="Password" aria-label="Password" required>
                <div id="pwBox"></div>
            </div>

            <!-- Grouped buttons for proper navigation -->
            <div class="button-group">
                <button id="btn-signIn" type="submit" class="btn">Log In</button>
                <button id="btn-register" class="btn secondary">Register</button>
            </div>
        </form>

        <script>
            document.getElementById("login-form").addEventListener("submit", function(e){
                e.preventDefault();
                const username = document.getElementById("input-username").value;
                const password = document.getElementById("input-password").value;

                if (username === "admin" && password === "Admin1234") {
                    alert("Login Successful");
                    window.location.href = "AdminHomePage.php";
                }else {
                    alert('Invalid username or password. Please try again.');
                }
            });
        </script>

    </div>
</main>
</body>
</html>