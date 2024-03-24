<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="images/Banner-002.jpg" alt="Background Image">
        </div>
        <div class="right">
            <h2>Login</h2>

            <?php
            session_start();
            if (isset($_SESSION["login_error"])) {
                echo '<script>alert("' . $_SESSION["login_error"] . '");</script>';
                unset($_SESSION["login_error"]); // Unset the session variable to clear the error message
            }
            ?>

            <br><br><br>
            <form id="loginForm" action="login-process.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Johndoe123" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="johndoe@12" required>
                <button type="submit">Login</button>
                <h3 id="redirect-register">Don't have any account? Go <a href="register.html">Sign Up</a></h2>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>