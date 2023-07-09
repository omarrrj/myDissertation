<?php


require('connection.php');
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $check_query = "SELECT * FROM users WHERE email = '$email'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        $error = "User already exists";
    } else {
        $password = $_POST['password'];
        // Insert user into database
        $insert_query = "INSERT INTO users (name, phone, address, email, password) VALUES ('$name', '$phone', '$address', '$email', '$password')";
        $result = mysqli_query($conn, $insert_query);

        if ($result) {
            $success = "User registered successfully";
        } else {
            $error = "Failed to register user: " . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="ISO-8859-1">
    <link rel="stylesheet" href="css/signupstyle.css">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Talent Burgers|Sign Up</title>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <img src="images/burgerlogo.jpg" alt="Burger logo" width="100" height="100"> <a class="navbar-brand"
                href="index.php">Talent
                Burgers</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link active" href="login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link active" href="signup.php">Sign
                                Up</a></li>
                        <li class="nav-item"><a class="nav-link active" href="contactus.php">Contact
                                Us</a></li>
                        <li class="nav-item"><a class="nav-link active" href="menu.php">Food Menu</a></li>

                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>

                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="signup">
        <div class="container">
            <div class="top-header">
                <header>Sign Up </header>
                <h6>This will only take a minute</h6>
            </div>
            <form method="POST" action="">
                <div class="input-field">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder ="Name" class ="input" required>
                </div>
                <div class="input-field">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" id="phone" placeholder ="Phone No." class ="input" required>
                </div>
                <div class="input-field">          
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" placeholder ="Address" class ="input" required>
                </div>
                <div class="input-field">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder ="Email" class ="input" required>
                </div>
                <div class="input-field">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder ="Password" class ="input" required>
                </div>
                <div class="input-field">
                <input type="submit" class= "submit" name="register" value="Register">
                </div>
            </form>
            <p>By clicking the "Submit" button, you agree to our <a href="#">Terms and Condition</a> and  <a href="#">Privacy Policy</a></p>	
	<p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
</body>

</html>