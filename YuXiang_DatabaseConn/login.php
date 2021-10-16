<!DOCTYPE html>

<html lang="en">
<?php 
session_start();

isset($_SESSION($Username));


?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style>
        body {
            background-image: url("../images/Local-Food-Illo_Project-file_2072020-1400x1000-01.webp");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;

        }

        .nav-link {
            color: black;
            padding-top: 10px;
        }
    </style>
</head>


<?php 
require_once 'ConnectionManager.php';
// Get username and password from FORM submission
$username = $_POST['username'];
$password = $_POST['password'];

// Use MemberDAO to check whether $username is found in Member table
// If so, display "User found $username!"
$dao = new AccountDAO();
$message = 'Access Denied';
if( $dao->authenticate($username, $password) ) {
    $message = 'Login successful!';
    $_SESSION['token'] = $username;
    header('Location: home.php');
    return;
}

?>
<body>


    <nav id="top-navbar" class="navbar navbar-light bg-light pb-2 border-bottom border-dark">
        <div class="container-fluid">
            <a class="navbar-brand"><img id="logo" style="width: 150px; height: auto;"
                    src="../Images/Logo photo.PNG"></a>
            <!-- insert icon here -->
            <form class="d-flex w-75">
                <input class="form-control " type="search" placeholder="Search Places" aria-label="Search" />
                <button class="btn" type="submit">
                    🔍
                </button>
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
                <button type="button" class="btn btn-outline-success me-2">Signup</button>

            </form>
        </div>
    </nav>

    <nav id="bottom-navbar" class="
                navbar navbar-expand-lg navbar-light
                bg-light
                pb-2
                border-bottom border-dark
            ">
        <div class="container-fluid">
            <div class="">
                <a class="navbar-brand" href="#">Explore</a>
                <a class="navbar-brand" href="#">What'sNext?</a>
                <a class="navbar-brand" href="#">About us</a>
            </div>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">Guest
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="#">Favourites</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Edit Profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Booking-History</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!--main content-->
    <div class='container'>
        <div class='col-2'></div>
        <div class='container mt-5 col-8 pb-5' style='background-color: rgb(250, 250, 250);'>
           
                <h1 class='text-center display-4 pt-5'>Cubto</h1>
                <h3 class='lead text-center fs-3'>Login</h3>

                <form class="row g-3 w-75 mx-auto mt-1">
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="inputAddress2" name="username">
                    </div>

                    <div class="col-12">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" style='font-size: 12px;' for="gridCheck">
                                Remember me
                            </label>
                        </div>
                    </div>
                    <div class="col-12 mb-4 p-0">
                        <div class='container text-center' style='display:flex; justify-content: space-between;'>
                            <button type="submit" class="btn btn-outline-primary w-50 me-2">Login</button>

                            <button type="submit" class="btn btn-outline-primary w-50">Sign Up</button>
                        </div>
                    </div>


                    <div class='col-12 text-center'>
                        <button class="btn btn-success w-100" type="button">Continue with Gmail</button>
                    </div>

                    <div class='col-12 text-center mb-4'>
                        <button class="btn btn-primary w-100" type="button">Continue with Facebook</button>
                    </div>

                </form>

          
        </div>
        <div class='col-2'></div>
    </div>





    <!--bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>

</html>