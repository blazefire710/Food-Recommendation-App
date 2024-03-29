<?php 
session_start();

if (!isset($_SESSION['login_details'])) {
    header("Location: login.php");
    exit();
}
else{

    $_SESSION['login_details'] = $_SESSION['login_details'];
    $data = $_SESSION['login_details'];
    $username = $data[0];
    $email = $data[2];
    $first_name = $data[3];
    $last_name = $data[4];
    $gender = $data[7];
    $birthday = $data[8];
    $profile_image = $data[9];
    $bio = $data[10];

    $key = 1;

}

?>

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

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

        <!--bootstrap css-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <!--axios-->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <!--Vue-->
        <script src="https://unpkg.com/vue@next"></script>

        <style>
            body { /* this is for the background image */
                background-image: url("Images/BackGround.png");
                background-size: cover;
                height: 100vh;
            }
        
        body {
            background-image: url("Images/BackGround.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;

        }

        .nav-link {
            color: black;
            padding-top: 10px;
        }

        .btn-outline-info {
            color: rgb(238, 125, 144);
            border: 1px solid rgb(238, 125, 144);
        }

        .btn-outline-info:hover {
            background-color: rgb(238, 125, 144);
            border: 1px solid rgb(238, 125, 144);
            color: white;
        }

        h5 {
            color: rgb(238, 125, 144);
            margin-left: 20px;
        }

        .tag-btn {
            background-color: rgb(238, 125, 144);
            border: 1px solid rgb(238, 125, 144);
            color: white;
            margin: 0px 20px 10px 20px;
            border-radius: 20px;
            font-size: 14px;
        }

        a {
            text-decoration: none;
        }

        .nav a{
            color: black;
        }

        .nav a.explore:hover{
            color: rgb(238, 125, 144);
        }

        .nav a.next:hover {
            color: rgb(238, 125, 144);
        }

        .nav a.about:hover{
            color: rgb(238, 125, 144);
        }

        .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
            background-color: rgb(238, 125, 144);
            color: white;
        }
    
        </style>
    </head>

    <body>
        <div id='app'>
            <!-- INSERT V-IF TO DISPLAY THIS VUE PART -->
            <nav
            id="top-navbar"
            class="navbar navbar-light bg-light pb-2 border-bottom border-dark"
        >
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"
                    ><img
                        id="logo"
                        style="width: 150px; height: auto"
                        src="Images/Logo photo.PNG"/></a>
                <!-- insert icon here -->

                    <a href="logout.php" class = "btn btn-outline-info me-2">LogOut</a>
            </div>
        </nav>

        <nav
            id="bottom-navbar"
            class="
                navbar navbar-expand-lg navbar-light
                bg-light
                pb-2
                border-bottom border-dark
            ">
            <div class="container-fluid">
                <div class="nav">
                    <a class="navbar-brand explore" href="index.php">Explore</a>
                    <a class="navbar-brand next" href="whatsnext.php">What'sNext?</a>
                    <a class="navbar-brand about" href="about.php">About us</a>
                </div>
                <div class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle text-dark"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        v-if='isUser'> Hi, {{username}}
                    </a>
                    <a
                        class="nav-link dropdown-toggle text-dark"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        v-if='notUser'> Guest
                    </a>
                    <ul
                        class="dropdown-menu"
                        aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="profile.php">Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="wishlist.php"
                                >Wishlist</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 
            <!--content after the search bar is triggered-->
            <div class='container mt-4' v-if='hasQuery'>
                    <!--cards-->

                    <div class="row row-cols-1 row-cols-md-2 g-4 mb-3">
                        <div class="col" v-for='restaurant of dataArr'>
                            <div class="card">
                                <!--should link to the restaurant details page-->
                                <a :href=' "resturant_details.php#" + restaurant.name'> 
                                    <h5 class="card-title pt-3" v-bind:id='name'>
                                        {{restaurant.name}}
                                    </h5>
                                </a>
                                <div>
                                    <h6 class="card-title" style='display: inline; margin-left: 20px; margin-right: 20px;'>
                                        {{reviewCount}} Reviews</h6>
                                    <h6 class="card-title " style='display: inline;'>{{restaurant.rating}}⭐️</h6>

                                </div>

                                <div class="card-body">
                                    <div class='text-center'>
                                        <img v-if='restaurant.type == "Restaurants"' src='https://sethlui.com/wp-content/uploads/2015/03/clubmeatballs-2-21.jpg' height="250">

                                        <img v-else-if='restaurant.type == "Cafe"' src='http://sethlui.com/wp-content/uploads/2015/03/brunch-7.jpg' height="250">

                                        <img v-else-if='restaurant.type == "Hawker Centres"' src='https://sethlui.com/wp-content/uploads/2018/12/Balestier-Food-Centre-13-e1545724838449.jpg' height="250" width='250'>
                                        
                                        <img v-else src='https://4cxqn5j1afk2facwz3mfxg5r-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/Best-vagetarian-Restaurant-Singapore.jpg' height="250" width='250'>
                                    </div>
                                    <div>
                                        <p v-if='restaurant.cuisine.length != 0' style='margin-left: 20px; margin-top: 20px;'>
                                            <b>Cuisine:</b> {{restaurant.cuisine}}
                                        </p>
                                        <p v-else style='margin-left: 20px; margin-top: 20px;'>
                                            <b>Cuisine: -</b>
                                        </p>
                                    </div>
                                    <div>
                                        <!--resturant tags-->
                                        <button type="button" class="tag-btn" disabled v-for='tag of restaurant.tags'>{{tag}}</button>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
            </div>
            <!--content end of the search bar triggered-->

            <!-- ANOTHER V-ELSE HERE -->
            <div class="container" v-else>
                <div class="card shadow my-5">
                    <div class=" card-body p-5" style="background-color:#FFF0F5; background-size: cover; background-position: center top;opacity:1;">
                    <!-- INSERT YOUR PAGE CONTENT HERE -->
                        <div style="margin-bottom:50px">
                            <h1 class="fw-light text-center mb-6">
                                My Account
                            </h1>
                        </div>          

                        <div class="row my-6">


                            <div class=" order-sm-last col-md-2" >
                                <div class="row ">
                                    <div class="col-1"></div>
                                    <div class="col-10 align-content-center"style="text-align:center"><img id="profile" src="" alt="" class="" onerror="this.onerror=null;this.src='data:image/png;base64,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'" style="border-radius:50%;width:150px;height:150px;object-fit:cover;border: 5px solid rgb(238, 125, 144);"></div>
                                    <div class="col-1"></div>
                                </div>
                                <div class="row" style="margin-top:30px;">
                                    <div class=" col rounded-3" style="background-color: white">
                                        <div style="text-align:center; margin-top:30px">About me</div>
                                        <hr>
                                        <div class="rounded m-2" id="bio"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-1 order-2"></div>

                            <div class="col-md-9 col-md-9 bg-white rounded-3">
                                <div class="d-flex justify-content-between" style="margin-top:20px">
                                    <div class="fs-4" id= "account_title" ></div>
                                    <a class="btn" href="editprofile.php" role="button" style="background-color:pink;">Edit Profile</a>

                                    
                                </div>
                                <hr>
                                <div class="bg-light rounded-3 m-2">
                                    <div class="fw-light fs-6" style="color:grey; text-align:center">User information</div>
                                    
                                    <!-- 1st Row -->
                                    <div class="row m-2">
                                        <div class="col-sm-6">
                                            <label for="username" class="form-label" >Username</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon3">@</span>
                                                <input type="text" class="form-control" id="username" aria-describedby="basic-addon3" value="Htreborn" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="email" aria-describedby="basic-addon3" value="example@gmail.com" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 2nd Row  -->
                                    <div class="row m-2">
                                        <div class="col-sm-6">
                                            <label for="first_name" class="form-label">First Name</label>
                                            <div class="input-group mb-3">
                                                
                                                <input type="text" class="form-control" id="first_name" aria-describedby="basic-addon3" value="John" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="last_name" class="form-label">Last Name</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="last_name" aria-describedby="basic-addon3" value="Tan" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- 3rd Row  -->
                                    <div class="row m-2 mb-4">
                                        <div class="col-sm-6">
                                            <label for="gender" class="form-label">Gender</label>
                                            <div class="input-group mb-3">
                                                
                                                <input type="text" class="form-control" id="gender" aria-describedby="basic-addon3" value="Male" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="birthday" class="form-label">Birthday</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="birthday" aria-describedby="basic-addon3" value="24/03/1999" readonly>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                            


                        
                </div>
            </div>


        <!-- end of id='app' div-->    
        </div>

    </body>

    <script>
        const app = Vue.createApp({
            data() {
                return {
                    dataArr: [],
                    name: '',
                    review: '',
                    reviewCount: 0,
                    rating: '',
                    numResult: 0,
                    searchQuery: '',
                    tags: [],
                    cuisines: '',
                    typeImg: '',
                    queryName : '',
                    //newly added 
                    username : '',
                    key : '',
                    hasQuery : false,
                }
            },
            computed : {
                isUser(){
                    this.key = '<?=$key?>';
                    // console.log(this.key);
                    if(this.key == 1){
                        this.username = '<?= $username ?>'; 
                        return true;
                    }
                    return false;
                },
                notUser(){
                    this.key = '<?=$key?>';
                    if(this.key == 0){
                        
                        return true;
                    }

                    
                    return false;
                }
            },
           
            methods: {
                isQuery() {
                    
                    var url = 'https://tih-api.stb.gov.sg/content/v1/food-beverages/search?keyword=' + this.queryName + '&language=en&apikey=e8o8lSAcpTGJx0xnGiUDzfyZ7ksA29F8';
                    url = encodeURI(url);

                    // console.log(url);
                    // console.log(this.queryName);

                    axios.get(url)
                    .then(response => {
                        // console.log(response.data);
                        this.dataArr = response.data.data;
                        // console.log(this.dataArr);

                        for (var restaurant of this.dataArr) {
                           
                            reviewsArr = restaurant.reviews; //an array of 5 objects
                           

                            var type = '';
                            type = restaurant.type;
                            //console.log(type);

                            this.reviewCount = 0;

                            for (let each of reviewsArr) {

                                this.reviewCount += 1;
                            }
                            
                            this.numResult += 1;
                            this.hasQuery = true;
                        }

                    })
                    .catch(error => {
                        // console.log(error.message)
                        // console.log("heehaw");
                    })
                }
            }
        })
        const vm = app.mount('#app');

    </script>

    <script>
        var username = '<?= $username ?>';
        var email = '<?= $email?>';
        var first_name = '<?= $first_name?>';
        var last_name = '<?= $last_name?>';
        var gender = '<?= $gender?>';
        var birthday = '<?= $birthday?>';
        var profile_image = '<?= $profile_image?>';
        // console.log(profile_image);
        var bio = '<?= $bio?>';

        document.getElementById("username").value = username;
        document.getElementById("email").value = email;
        document.getElementById("first_name").value = first_name;
        document.getElementById("last_name").value = last_name;
        document.getElementById("gender").value = gender;
        document.getElementById("birthday").value = birthday;
        document.getElementById("bio").innerText = bio;
        document.getElementById("account_title").innerText = first_name + "'s Account"

        if (profile_image == "") {
            document.getElementById("profile").src = "Images/" + user.png;
        }
        else{
            document.getElementById("profile").src = "uploads/" + profile_image;
        }
    </script>


    
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
    ></script>
    
</html>
