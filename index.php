<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Index</title>
    
</head>

<?php require_once "include/header.php"; 
include_once "php/Meal_db.php";
$meal_Obj = new Meal_db();
$meals = $meal_Obj->getAllMeals();
define("BASE_URL", "projectImages/projectImages/");
?>


<?php 
if(isset($_COOKIE["recent-bought"])) {
    ?>
    <div id="boughtProducts" class="row">
        <h2 class="sections_text">Your Recent Bought Products</h2>
    <?php 
    $orderArr = explode(",",$_COOKIE["recent-bought"]);
    $orderArr  = array_unique($orderArr);
    foreach ($orderArr as $id) {
        $boughtMeal = $meal_Obj->getMealById($id);?>

        <div class="col-lg-3 col-sm-12 col-md-4">
                        <form name="meal<?php echo $boughtMeal["id"];?>" action='detail.php' method="get">
                            <div href="127.0.0.1.800/detail.php?id=<?php echo $boughtMeal["id"];?>" onClick="document.forms['meal<?php echo $boughtMeal["id"];?>'].submit();" class="card">
                                <img src=<?php echo '"'.BASE_URL.$boughtMeal["image"].'"';?> class="card-img-top" alt=<?php echo '"'.BASE_URL.$boughtMeal["title"].'"';?>>
                                <div class="card-body">
                                    <h6>&#11088; <?php echo $boughtMeal["rating"];?> rating</h6>
                                    <h5 class="card-title"><?php echo $boughtMeal["title"];?></h5>
                                    <p class="card-subtitle">Some description</p>
                                    <input type="hidden" name="id" value="<?php echo $boughtMeal["id"];?>">
                        </form>
                                <div class="row">
                                    <div class="col">
                                        <form action='php/cart.php' method="get">
                                            <input type="hidden" name="back" value="index.php#addCartDetails<?php echo $boughtMeal['id'];?>">
                                            <input type="hidden" name="id" value="<?php echo $boughtMeal["id"];?>">
                                            <button onclick="incrementBy1('<?php echo $boughtMeal['title'];?>')" class="normalButton addCartDetails"
                                                id="addCartDetails<?php echo $boughtMeal['id'];?>" >Buy Again</button>
                                        </form>
                                    </div>
                                    <div class="col price" value="<?php echo $boughtMeal['price']?>">
                                        <?php echo $boughtMeal["price"]?> SAR
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    <?php } ?>
    </div>
    <?php 
}
?>



<div id="Menu" class="container-fluid">
    <h2 class="sections_text">Want To Eat</h2>
    <p class="centre_text">Try our most delicious food and usually take minutes to deliver</p>
    <p id="meals_text">pizza fast_food cupcake sandwich spaghetti burger</p>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img id="delivery_img" src="projectImages/projectImages/delivery.png" alt="delivery">   
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="triangle"></div>
            <h2 id="triangle_text"> We guarantee 30 minutes delivery</h2>
            <p id="after_triangle_text">If your are having a meeting, working late at night and need an extra
            push</p>
        </div>
    </div>
</div>
<div class="container" id="Gallery">
    <div class="row">
        <div class="col justify-content-center">
            <h2 class="sections_text">Our Most Popular Recipes</h2>
            <p class="centre_text">Try our most delicious food and usually take minutes to deliver</p>
        </div>
    </div>
    <div class="row">
        <?php foreach ($meals as $meal):?> 
            <div class="col-lg-3 col-sm-12 col-md-4">
                <form name="meal<?php echo $meal["id"];?>" action='detail.php' method="get">
                    <div onClick="document.forms['meal<?php echo $meal["id"];?>'].submit();" class="card">
                        <img src=<?php echo '"'.BASE_URL.$meal["image"].'"';?> class="card-img-top" alt=<?php echo '"'.BASE_URL.$meal["title"].'"';?>>
                        <div class="card-body">
                            <h6>&#11088; <?php echo $meal["rating"];?> rating</h6>
                            <h5 class="card-title"><?php echo $meal["title"];?></h5>
                            <p class="card-subtitle">Some description</p>
                            <input type="hidden" name="id" value="<?php echo $meal["id"];?>">
                </form>
                        <div class="row">
                            <div class="col">
                                <form action='php/cart.php' method="get">
                                    <input type="hidden" name="back" value="index.php#addCartDetails<?php echo $meal['id'];?>">
                                    <input type="hidden" name="id" value="<?php echo $meal["id"];?>">
                                    <button onclick="incrementBy1('<?php echo $meal['title'];?>')" class="normalButton addCartDetails"
                                        id="addCartDetails<?php echo $meal['id'];?>" >add to cart</button>
                                </form>
                            </div>
                            <div class="col price" value="<?php echo $meal['price']?>">
                                <?php echo $meal["price"]?> SAR
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<br>
<div class="container" id="Testimonials">
    <div class="row justify-content-center">
        <div class="col offset-4">
            <h2 class="coloredText">Clients Testimonials</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6  ">
                <img class="img-fluid" src="projectImages/projectImages/man-eating-burger.png" alt="man-eating-burger">
            </div>
            <br>
            <div class="col-lg-6">
                <p>Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Neque ullam deserunt laborum, laboriosam veritatis
                quibusdam blanditiis dolor exercitationem velit commodi quae assumenda incidunt
                voluptas. Corporis ex nulla repellendus ullam nihil!</p>
            </div>
        </div>
    </div>
</div>
<br>
<?php include_once "include/footer.php"?>