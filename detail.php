<?php 
include_once "php/Meal_db.php";
$meal_Obj = new Meal_db();
$id = $_GET['id'];
$mealDetail = $meal_Obj->getmealById($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Details</title>
</head>

<?php require_once "include/header.php";?>

    <div class="container">
        <div class="row meal-card">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <img class="rounded img-fluid" src="projectImages/projectImages/meal<?php echo $mealDetail["id"];?>.png" alt="meal">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="row">
                    <h1 class="coloredText"><?php echo $mealDetail["title"];?></h1>
                    <p><?php echo $mealDetail["price"];?> SAR</p>
                    <p>&#11088;<?php echo $mealDetail["rating"];?> rating</p>
                    <p><?php echo $mealDetail["description"];?></p>
                </div>
                <div class=row>
                    <div class="col-9">
                        <button onclick="decrementBtn()" class="order_amount">-</button>
                        <button id="counterAmount" class="order_amount" value="1">1</button>
                        <button onclick="incrementBtn()" class="order_amount">+</button>
                    </div>
                    <div class="col">
                        <form action='php/cart.php' method="get">
                            <input type="hidden" name="back" value="detail.php?id=<?php echo $id;?>#addCartDetails">
                            <input type="hidden" name="id" value="<?php echo $id;?>">
                            <a href=""><button class="normalButton" id="addCartDetails">add to cart</button></a>
                        </form> 
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <ul class="nav nav-pills" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                        data-bs-target="#description" type="button" role="tab" aria-controls="home"
                        aria-selected="true">Description</button>
                </li>
                <li class="nav-item pill" role="presentation">
                    <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                        type="button" onclick="showReviews()" role="tab" aria-controls="reviews" aria-selected="false">Reviews</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
            <div class="container">
                <div class="row">
                    <h2 class="coloredText">Description</h2>
                    <p><?php echo $mealDetail["description"];?></p>
                </div>
                <div class="row">
                    <h4 class="coloredText">Nutrition Facts</h4>
                    <table>
                        <tr>
                            <th class="cell" class="cell" align="left" colspan="3">Supplements Facts</th>
                        </tr>
                        <tr>

                            <th class="cell" align="left" colspan="3">Serving Size: 
                                <span style="font-weight:normal;"><?php echo $mealDetail["nutrition"]["serving_size"];?></span></th>
                        </tr>
                        <tr>
                            <th class="cell" align="left" colspan="3">Serving Per Container: <span
                                    style="font-weight:normal;"><?php echo $mealDetail["nutrition"]["serving_per_container"];?></span></th>
                        </tr>
                        <tr>
                            <th class="cell"></th>
                            <th class="cell">Amount Per Serving</th>
                            <th class="cell">%Daily Value*</th>
                        </tr>
                        <?php for($i=1; $i<count($mealDetail["nutrition"]["facts"]); $i++){?>
                        <tr>
                        <td class="cell"><?php echo $mealDetail["nutrition"]["facts"][$i]["item"] ?></td>
                            <td class="cell"><?php echo $mealDetail["nutrition"]["facts"][$i]["amount_per_serving"]?> <?php echo $mealDetail["nutrition"]["facts"][$i]["unit"] ?></td>
                            <td class="cell"><?php echo $mealDetail["nutrition"]["facts"][$i]["daily_value"] ?></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td class="cell" align="left" colspan="3">* Percent Daily Values are based on a 2,000
                                calorie diet. Your daily values
                                may be higher pr lower depending on your calorie needs</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
            <div class="container">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-indicators" style="color: #FFAA00;">
                    </div>
                    <div id="Carousel" class="carousel-inner">
                    </div>
                </div>
                
                <button onclick="show()" id="addReview" class="normalButton">Add Your Review</button>

                <form id="reviewForm" enctype="multipart/form-data" method="post" onsubmit="return (validate() && sendForm(this))">
                    <input type = 'hidden' name = 'meal_id' value ="<?php echo $id;?>">
                    <label for="Image">Image</label>
                    <input type="file" id="Image" name="Image"><br>
                    <label for="rate">Rate the Food</label>
                    <input type="range" id="rate" name="rate" min="1" max="5"><br>
                    <label for="name">Name</label>
                    <input type="text" class="text_input" id="name" name="name" placeholder="First and Last name"><br>
                    <label for="city">City</label>
                    <input type="text" class="text_input" id="city" name="city" placeholder="City"><br>
                    <label for="Review">Review</label>
                    <label id="ErrorMessage" class="hideError">Please type your review</label>
                    <textarea maxlength="500" onkeyup="change()" name="Review" id="review" class="text_input"
                        placeholder="Type your review here max 500 characters"></textarea>
                    <p id="counter">0/500</p>
                    <input type="submit" name="submitReview" class="normalButton" id="submitButton" value="Submit">
                </form>
            </div>
        </div>
    </div>

    <script>
        //must return false
        function sendForm(form){
            let data = new FormData(form);
            var ajax = new XMLHttpRequest();
            var url = 'php/review.php';
            ajax.open('POST', url, true);
            ajax.send(data);

            ajax.onreadystatechange = function() {
                if(ajax.readyState == 4 && ajax.status == 200) {
                    hide();
                    showReviews();
                }
            }
            return false;
        }

        function showReviews() {
            let ajax = new XMLHttpRequest();
            ajax.open("GET", 'php/review.php?meal_id=<?php echo $id;?>', true);
            ajax.send();
            ajax.onreadystatechange = function() {
                if (ajax.status === 200 && ajax.readyState === 4){
                    if (ajax.responseText.length > 0) {
                        var reviewsJson = JSON.parse(ajax.responseText);
                    } else {
                        var reviewsJson = [];
                    }
                    let carousel = document.getElementById("Carousel");
                    let reviews = (reviewsJson.length > 0) ? "<h2>Users Reviews</h2>": "<h2>No Reviews</h2>";
                    
                    if (reviewsJson.length > 0){
                        let indicator = document.getElementsByClassName('carousel-indicators')[0];
                        indicators = "";
                        for (let index = 0; index < reviewsJson.length; ++index) {
                            const element = reviewsJson[index];
                            if (index == 0){
                                indicators += ` <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="${index}" class="active" aria-current="true" aria-label="Slide ${index+1}"
                                style="background-color: #FFAA00;"></button>`;
                                reviews += `
                                    <div class="carousel-item active">
                                        <div class='row align-items-center'>
                                            <div class='col-lg-6'>
                                                <img class='img-fluid' src='reviewImages/${element["image"]}'
                                                    alt='${element["image"]}'>
                                            </div>
                                            <div class='col-lg-6'>
                                                <h4>${element["reviewer_name"]}</h4>
                                                <h5>${element["city"]} - ${element["date"]} &#11088&#11088&#11088&#11088&#11088</h5>
                                                <p id='man-eating_text'>${element["review"]}</p>
                                            </div>
                                        </div>
                                    </div>`;
                            } else {
                                indicators += ` <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="${index}" aria-current="true" aria-label="Slide ${index+1}"
                                style="background-color: #FFAA00;"></button>`;
                                reviews += `
                                    <div class="carousel-item">
                                        <div class='row align-items-center'>
                                            <div class='col-lg-6'>
                                                <img class='img-fluid' src='reviewImages/${element["image"]}'
                                                    alt='${element["image"]}'>
                                            </div>
                                            <div class='col-lg-6'>
                                                <h4>${element["reviewer_name"]}</h4>
                                                <h5>${element["city"]} - ${element["date"]} &#11088&#11088&#11088&#11088&#11088</h5>
                                                <p id='man-eating_text'>${element["review"]}</p>
                                            </div>
                                        </div>
                                    </div>`;
                            }
                        }
                        indicator.innerHTML = indicators;
                    }
                    carousel.innerHTML = reviews;
                }
            }
            
        }
    </script>
<?php include_once "include/footer.php"?>