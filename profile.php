<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Profile</title>
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
        <div id='app'>
            <!-- INSERT V-IF TO DISPLAY THIS VUE PART -->
            <nav id="top-navbar" class="navbar navbar-light bg-light pb-2 border-bottom border-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="updated_explore.html"
                        ><img
                            id="logo"
                            style="width: 150px; height: auto"
                            src="Images/Logo photo.PNG"
                    /></a>
                    <!-- insert icon here -->
                    <form class="d-flex w-75">
                        <input class="form-control" type="search" placeholder="Search Places" aria-label="Search"/>
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
                        <a class="navbar-brand" href="whatsnext.html">What'sNext?</a>
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
                                <a class="dropdown-item" href="editprofile.php">Edit Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="wishlist.php"
                                    >Wishlist</a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="login.php">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- ANOTHER V-ELSE HERE -->
            <div class="container">
                <div class="card shadow my-5">
                    <div class="card-body p-5" style="background-image: url(https://dutzu.com/wp-content/uploads/2020/02/Food-photography-DSC04326-Edit-Copy.jpg); background-size: cover; background-position: center top;opacity:0.5;">
                    <!-- INSERT YOUR PAGE CONTENT HERE -->
                        <div style="opacity:1;">
                            <h1 class="fw-light text-center">
                                Profile Page
                            </h1>
                            <p class="lead">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quos modi magnam dolorum iure numquam eum nam officia dolore sequi. Numquam architecto placeat illo possimus facere saepe eos labore magni?
                            </p>
                            <p class="font-monospace">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum enim maiores quo quaerat, sit perferendis? Ad numquam ipsam autem fugiat aliquid animi est! Cupiditate iure officiis laboriosam unde mollitia explicabo.</p>
                            <div class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit commodi obcaecati nisi corrupti, earum quia itaque eius maxime perferendis beatae sit iste optio eveniet, voluptas, voluptates consequuntur praesentium pariatur accusantium.</div>
                        </div>
                </div>
            </div>
        </div>

    </header>




    <body>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
