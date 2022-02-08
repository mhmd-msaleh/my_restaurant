<?php 
include_once "php/Meal_db.php";
$meal_Obj = new Meal_db();
?>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-style">
            <div class="container-fluid">
                <a class="navbar-brand"><img class="logo" src="projectImages/projectImages/logo-White.svg"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarID"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarID">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link nav-style" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-style" aria-current="page" href="index.php#Menu">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  nav-style" aria-current="page" href="index.php#Gallery">Gallary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-style" aria-current="page" href="index.php#Testimonials">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  nav-style" aria-current="page" href="#Contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-style red-nav" aria-current="page" href="#">Search</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-style red-nav" aria-current="page" href="#">Profile</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-style red-nav" aria-current="page"
                                data-bs-toggle="modal" data-bs-target="#myModal" href="">Cart 
                                <span id="cartCounter"><?php if(!isset($_COOKIE['cart'])) {
                                    echo 0;
                                }
                                else{
                                    $arr = explode(',', $_COOKIE['cart']);
                                    echo count($arr);
                                }?> 
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Cart Content</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <pre><?php echo str_pad("Item", 30, " ")."Price<br>";
                            $total = 0;
                            if(isset($_COOKIE['cart'])) {
                                foreach ($arr as $Mealid) {
                                    $mealCookie = $meal_Obj->getMealById($Mealid);
                                    $total += $mealCookie["price"];
                                    echo  str_pad($mealCookie["title"], 30, " ") . $mealCookie["price"]."<br>";
                                }
                            }
                            echo str_pad("Total", 30, " ").$total;
                            ?></pre>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <form action='php/order.php' method="post">
                        <button type="submit" name="submit" class="btn btn-warning" data-bs-dismiss="modal">Order Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="header_content">
            <h1 id="partyTime_text"> Party Time</h1>
            <div class="upperHalf-trapezoid">
                <h3 id="offer_text">Buy any 2 burgers and get 1.5L Pepsi Free</h3>
            </div>
            <div class="lowerHalf-trapezoid"></div>
            <form action='php/order.php' method="post">
            <button class="button" id="order">Order Now</button>
            </form>
        </div>
    </header>