<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Leave Review</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="css/components.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    </head>
    <style>
        .logo {
            width: 130px;
            height: 50px;
        }

        body {
            background-image: url("Images/BackGround.png");
            background-size: cover;
            
        }
        .edit_page_profile {
            width: 100%;
            height: auto;
        }


    </style>
    <header>
        <nav
            id="top-navbar"
            class="navbar navbar-light bg-light pb-2 border-bottom border-dark"
        >
            <div class="container-fluid">
                <a class="navbar-brand"
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
                    <button type="button" class="btn btn-outline-primary me-2">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-success me-2">
                        Signup
                    </button>
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
                    <a class="navbar-brand" href="#">Explore</a>
                    <a class="navbar-brand" href="#">What'sNext?</a>
                    <a class="navbar-brand" href="#">About us</a>
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
                            <a class="dropdown-item" href="#">Favourites</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Edit Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"
                                >Booking-History</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Content of Explore Page -->
    <div class="container">
        <div class="card shadow my-5">
                <div class="card-body p-5">
                    
                    <div class="row">
                        <h1 class="col fw-light my-3 ">
                            Explore Foodie..
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 dropdown">
                            <!-- Location Search Bar  -->
                            
                                <button class="btn btn-light dropdown-toggle mx-2" style = "border: 1px solid black" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Location: Any
                                </button>
                                <ul class="dropdown-menu"  aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <div class="mx-2"> Set Km Away  (Insert KM Here) </div>
                                        <div class="mx-2"><input type="range" min="1" max="100" value="50" Style= "min-width: 200px; max-width:1000px;" id="myRange">
                                        </div>
                                    </li>
                                    <li><a class="dropdown-item" href="#">North</a></li>
                                    <li><a class="dropdown-item" href="#">South</a></li>
                                    <li><a class="dropdown-item" href="#">East</a></li>
                                    <li><a class="dropdown-item" href="#">West</a></li>
                                    <li><a class="dropdown-item" href="#">Central</a></li>
                                </ul>
                            
                            <!-- End of Location Search Bar -->
                            <!-- Start of Categories -->
                            
                                <button class="btn btn-light dropdown-toggle mx-2" style = "border: 1px solid black" type="button" id="Categories" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sort: Any
                                </button>
                                <ul class="dropdown-menu"  aria-labelledby="Categories">
                                    <li><a class="dropdown-item" href="#">Newly-Opened</a></li>
                                    <li><a class="dropdown-item" href="#">Trending</a></li>
                                    <li><a class="dropdown-item" href="#">Price (Lowest to Highest) </a></li>
                                    <li><a class="dropdown-item" href="#">Ratings </a></li>
                                </ul>
                            
                            <!-- End of Categories -->
                            <!-- Start of Cuisine Category -->
                            <button class="btn btn-light dropdown-toggle mx-2" style = "border: 1px solid black" type="button" id="Cusine" data-bs-toggle="dropdown" aria-expanded="false">
                                Cusine: Any
                            </button>
                            <ul class="dropdown-menu"  aria-labelledby="Cusine">
                                <li><a class="dropdown-item" href="#">Chinese</a></li>
                                <li><a class="dropdown-item" href="#">Japanese</a></li>
                                <li><a class="dropdown-item" href="#">Halal</a></li>
                                <li><a class="dropdown-item" href="#">Vegetarian</a></li>
                                <li><a class="dropdown-item" href="#">Western</a></li>


                            </ul>
                            <!-- End of Cusine Category  -->
                        </div>

                    </div>
                    <hr>
                    <!-- New Row -->
                    <div class="row">
                        <div class="col-sm">
                            <!-- Need more TIMEEE -->
                        </div>
                    </div>
        </div>
    </div>


    <body>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
    </body>
</html>