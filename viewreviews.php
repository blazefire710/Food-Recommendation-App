<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>View Reviews</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="/css/components.css" />
        <link rel="stylesheet" href="/css/styling.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <style>
            body { /* this is for the background image */
                background-image: url("Images/BackGround.png");
                background-size: cover;
                height: 100vh;
            }
        </style>
    </head>

    <header>
        <nav
            id="top-navbar"
            class="navbar navbar-light bg-light pb-2 border-bottom border-dark"
        >
            <div class="container-fluid">
                <a class="navbar-brand" href="updated_explore.html"
                    ><img
                        id="logo"
                        style="width: 150px; height: auto"
                        src="Images/Logo photo.PNG"
                /></a>
                <!-- insert icon here -->
                <form class="d-flex w-75">
                    <input
                        class="form-control"
                        type="search"
                        placeholder="Search Places"
                        aria-label="Search"
                    />
                    <button class="btn" type="submit">🔍</button>

                    <a href="login.php" class="btn btn-outline-primary me-2">Login</a>
                    <a href="signup.php" class="btn btn-outline-success me-2">Signup</a>

                </form>
            </div>
        </nav>

        <nav
            id="bottom-navbar"
            class="
                navbar navbar-expand-lg navbar-light
                bg-light
                pb-2
                border-bottom border-dark
            "
        >
            <div class="container-fluid">
                <div class="">
                    <a class="navbar-brand" href="updated_explore.html">Explore</a>
                    <a class="navbar-brand" href="restaurant_details.php">What'sNext?</a>
                    <a class="navbar-brand" href="about.php">About us</a>
                </div>
                <div class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle text-dark"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        >Guest
                    </a>
                    <ul
                        class="dropdown-menu"
                        aria-labelledby="navbarDropdownMenuLink"
                    >
                        <li>
                            <a class="dropdown-item" href="favourites.php">Favourites</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="bookinghistory.php"
                                >Booking-History</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="login.php">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <body>
        <div class="container">
            <div class="card shadow my-5">
                <div class="card-body p-5">

                    
                    <!-- Insert Content Here -->
                    <h1>Ratings</h1><br>
                    <div class="row">
                        <div class="col-md-5">
                            <img src="Images/sarnies.jpg" class="img-fluid"><br><br>
                            <h2 class="card-title">Restaurant Name Here</h2><br>
                            <h4 class="card-text">
                                Restaurant Address Here
                                ABC Street Block 53
                            </h4> 

                        </div>
                        <div class="col-md-7">
                            <h3>Overall Ratings</h3>
                            <div id='overall-ratings'>
                                <i class="fas fa-star gold fa-2x"></i>
                                <i class="fas fa-star gold fa-2x"></i>
                                <i class="fas fa-star gold fa-2x"></i>
                                <i class="fas fa-star gold fa-2x"></i>
                                <i class="fas fa-star gold fa-2x"></i>
                            </div>
                        </div>

                        <!-- Insert review cards here -->





                    </div>
                </div>
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
