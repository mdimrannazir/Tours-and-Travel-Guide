<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootsrap Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Bootstrap JS & Poppers -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navigation starts here -->
    <?php
        require 'php/nav.php';
    ?>
    <!-- Navigation Ends here -->
    <section id="signUpPage">
        <!-- SignUP Form -->
        <br>
        <div class="loginContainer signupConatiner">
            <form action="signup.php" method="POST">
                <label class="noAccount haveAccount">
                    Already have an account? <a href="login.php">Login</a>
                </label>
                <div class="imgcontainer">
                    <img src="images/avatar.webp" alt="Avatar" class="avatar">
                </div>


                
                <input type="text" placeholder="Enter Full Name" required name="fullName">
                <br>
                
                <input type="text" placeholder="Enter Email Address" required name="uid">
                
                <input type="password" placeholder="Enter Password" required name="upass">
                <input type="password" placeholder="Re-enter Password" required name="cpass">
                <br>
                <label>
                    <input type="checkbox" checked="checked"> I accept the terms & conditions
                </label>
                <a href="login.php"><button type="submit" class="btnLogin">Register</button></a>
            </form>
        </div>
    </section>
</body>
</html>