<?php 
header('Access-Control-Allow-Origin: *');
session_start();
if (isset($_SESSION['login_details'])){
    $key = 1;
    $login_details = $_SESSION['login_details'];
    $username = $login_details[0];

}
else {
    $key = 0;
    $added = '';
    $username = "Guest";
    $alr_added = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randomise me!</title>
    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!--axios-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!--Vue-->
    <script src="https://unpkg.com/vue@next"></script>

<style>
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

    .btn-primary, .btn-primary:active, .btn-primary:focus {
    color: rgb(253, 250, 250);
    background-color: rgb(247, 104, 130) !important;
    border-color:  rgb(247, 104, 130)!important;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
    width: 250px;
    height: 50px;
}

.btn-primary:hover {
  transform: translateY(-1px);
  box-shadow: 0 8px 15px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
}

a.action {
    background:rgb(247, 104, 130) ;
    color: white;
    letter-spacing: 2px;
    border-radius: 2rem;
    cursor: pointer;
    text-decoration: none;
    box-shadow: 0px 0px 50px 0px rgba(230, 37, 164, 0.65);
    transition: all 0.5s ease-in-out;
}

a.action:hover {
    transform: scale(1.05);
    box-shadow: 0px 0px 50px 0px rgba(230, 37, 164, 1);
}

.card{
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  padding: 14px 80px 18px 36px;
  cursor: pointer;
}

.card:hover{
     transform: scale(1.02);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}

img:before {
    content: ' ';
    display: block;
      /* position: absolute; */
    max-width: 300px;
    width: 200px;
    height: 200px;
    background-size: cover;
      /* background-image: url('https://sethlui.com/wp-content/uploads/2015/03/clubmeatballs-2-21.jpg'); */
    background-image: url('http://sethlui.com/wp-content/uploads/2015/03/brunch-7.jpg');
    }


 

</style>
</head>

<body>
    <div id="app">
        <div>
        <nav id="top-navbar" class="navbar navbar-light bg-light pb-2"
            style='border-bottom: 1px solid rgb(193, 190, 190);'>
            <div class="container-fluid">
                <a class="navbar-brand"><img id="logo" style="width: 150px; height: auto;"
                        src="Images/Logo photo.PNG"></a>
                <!-- insert icon here -->
                <form class="d-flex justify-content-end">
                <a v-if="!isUser" href="login.php" class="btn btn-outline-info me-2">Login</a>
                    <a v-if="!isUser" href="signup.php" class="btn btn-outline-info me-2">Signup</a>
                    <a v-if="isUser" href="logout.php" class = "btn btn-outline-info me-2">LogOut</a>

                </form>
            </div>
        </nav>

        <nav id="bottom-navbar" class="
                navbar navbar-expand-lg navbar-light
                bg-light
                pb-2" style='border-bottom: 1px solid rgb(193, 190, 190);'>
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
                        v-else> Guest
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
        </div>




    <!--content after the search bar is triggered-->
    <div class='container mt-4' v-if='hasQuery'>
            <!--cards-->

            <div class="row row-cols-1 row-cols-md-2 g-4 mb-3">
                <div class="col" v-for='restaurant of dataArr'>
                    <div class="card" >
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

        <!--main content-->

        <div class='container mt-4' v-else>
            <!--cards-->

            <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
                <div class="col">
                    <div class="card">
                        <!--should link to the restaurant details page-->
                        <a :href=' "resturant_details.php#" + result.name'> 
                            <h5 class="card-title pt-3" v-bind:id='name'>
                                {{result.name}}

                            </h5>
                        </a>
                        <div>
                            <h6 class="card-title" style='display: inline; margin-left: 20px; margin-right: 20px;'>
                                {{reviewCount}} Reviews</h6>
                            <h6 class="card-title " style='display: inline;'>{{result.rating}}⭐️</h6>

                        </div>

                        <div class="card-body">
                            <div class="text-center">
                                <img v-bind:src="uuidSrc" class= "img-fluid">
                                <!-- <img v-if='result.type == "Restaurants"' src='https://sethlui.com/wp-content/uploads/2015/03/clubmeatballs-2-21.jpg' height="250">

                                <img v-else-if='result.type == "Cafe"' src='http://sethlui.com/wp-content/uploads/2015/03/brunch-7.jpg' height="250">

                                <img v-else-if='result.type == "Hawker Centres"' src='https://sethlui.com/wp-content/uploads/2018/12/Balestier-Food-Centre-13-e1545724838449.jpg' height="250" width='250'>
                                
                                <img v-else src='https://4cxqn5j1afk2facwz3mfxg5r-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/Best-vagetarian-Restaurant-Singapore.jpg' height="250" width='250'> -->
                            </div>
                            <div>
                                <p v-if='result.cuisine.length != 0' style='margin-left: 20px; margin-top: 20px;'>
                                    <b>Cuisine:</b> {{result.cuisine}}
                                </p>
                                <p v-else style='margin-left: 20px; margin-top: 20px;'>
                                    <b>Cuisine: -</b>
                                </p>
                            </div>
                            <div>
                                <!--resturant tags-->
                                <button type="button" class="tag-btn" disabled v-for='tag of result.tags'>{{tag}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>



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
                    chosenRest: '',
                    test:"test",
                    result: '',
                    //newly added 
                    username : '',
                    key : '',
                    hasQuery : false,
                    uuidSrc: '',
                }

            },
            computed : {
                isUser(){
                    this.key = '<?=$key?>';
                    if(this.key == 1){
                        this.username = '<?= $username ?>'; 
                        return true;
                    }
                    return false;
                }
            },

            created() {
                //url to extract all the resturants available

                var url = 'https://tih-api.stb.gov.sg/content/v1/food-beverages/search?keyword=all&language=en&apikey=e8o8lSAcpTGJx0xnGiUDzfyZ7ksA29F8';

                axios.get(url)
                    .then(response => {
                        // console.log(response.data);
                        // this.dataArr = response.data.data; //array -> randomise from here
                        // const chosenNumber = Math.floor(Math.random() * this.dataArr.length);
                        // var chosenRest = this.dataArr[chosenNumber]; 

                        this.dataArr = response.data.data; //array -> randomise from here

                        let result = this.choose();
                        // console.log(result);
                        this.result = result;
                        this.name = result.name;
                        // this.review = result.review;
                        this.rating = result.rating;
                        this.cuisines = result.cuisine;
                        this.tags = result.tags;

                        var reviewsArr = [];
                        reviewsArr = result.reviews;

                        for (let each of reviewsArr) {

                            this.reviewCount += 1;
                            }

                        var uuid = result.thumbnails[0].uuid;

                        this.uuidSrc = "https://tih-api.stb.gov.sg/media/v1/download/uuid/" + uuid + "?fileType=Thumbnail%201080h&apikey=e8o8lSAcpTGJx0xnGiUDzfyZ7ksA29F8";
                        // console.log(this.uuidSrc);

                    })
                    .catch(error => {
                        // console.log(error.message)
                        window.location.reload(true)
                    })
            },

            methods: {
                        choose(){
                            
                            // this.dataArr = response.data.data; //array -> randomise from here
                            const chosenNumber = Math.floor(Math.random() * this.dataArr.length);
                            var chosenRest = this.dataArr[chosenNumber]; 
                            return chosenRest;
                        },

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
                        })
                    }
                }
        })
                
        
        
        const vm = app.mount('#app');

    </script>

<div class= "col mt-1 text-center">
    <a class="action py-3 px-5 d-inline-block mt-4 mb-3" id="rand" onclick= "refreshPage()">Randomise again!</a>
    <script type="text/javascript">
        function refreshPage(){
            window.location.reload();
            } 
    </script>
    <!-- <button type="button" class="btn btn-primary mt-3 " id="wishlist" onclick= "wishlist()">Wishlist!</button>
    <script type="text/javascript">
        function wishlist(){ //change to add_to_wishlist 
            document.getElementById("wishlist").onclick = function () {
                        // location.href = "whatsnext.html";
                window.open("wishlist.php", "_blank").focus()
            } }
    </script> -->
</div>





    <!--bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

</body>

</html>
