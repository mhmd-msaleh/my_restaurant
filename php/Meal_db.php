<?php 
class Meal_db {

    private $connection;
    public function __construct() {
        $this->connection = mysqli_connect("localhost", "root", "", "meals");

        if (mysqli_connect_errno()){
            die(mysqli_connect_error());
        }
    }

    private $mealsNutritions = array(
        array(
            "serving_size"=>"1 sandwich (57 g)",
            "serving_per_container"=>1,
            "facts"=>array(
                array("item"=>"calories",
                    "amount_per_serving"=>200,
                    "daily_value"=>"",
                    "unit"=>"cal",
                ),
                array("item"=>"calories_from_fat",
                    "amount_per_serving"=>70,
                    "daily_value"=>"",
                    "unit"=>"cal",
                ),
                array("item"=>"total_fat",
                    "amount_per_serving"=>7,
                    "daily_value"=>"11%",
                    "unit"=>"g",
                ),
                array("item"=>"saturated_fat",
                    "amount_per_serving"=>4,
                    "daily_value"=>"20%",
                    "unit"=>"g",
                ),
                array("item"=>"cholestrol",
                    "amount_per_serving"=>0,
                    "daily_value"=>"0%",
                    "unit"=>"mg",
                ),
                array("item"=>"sodium",
                    "amount_per_serving"=>220,
                    "daily_value"=>"9%",
                    "unit"=>"mg",
                ),
                array("item"=>"total_carb",
                    "amount_per_serving"=>31,
                    "daily_value"=>"10%",
                    "unit"=>"g",
                ),
                array("item"=>"vitamin_A",
                    "amount_per_serving"=>0,
                    "daily_value"=>"0%",
                    "unit"=>"mg",
                ),
                array("item"=>"calcium",
                    "amount_per_serving"=>0,
                    "daily_value"=>"2%",
                    "unit"=>"mg",
                )
            )
        ),

        array(
            "serving_size"=>"1 sandwich (357 g)",
            "serving_per_container"=>1,
            "facts"=>array(
                array("item"=>"calories",
                    "amount_per_serving"=>200,
                    "daily_value"=>"",
                    "unit"=>"cal",
                ),
                array("item"=>"calories_from_fat",
                    "amount_per_serving"=>70,
                    "daily_value"=>"",
                    "unit"=>"cal",
                ),
                array("item"=>"total_fat",
                    "amount_per_serving"=>7,
                    "daily_value"=>"11%",
                    "unit"=>"g",
                ),
                array("item"=>"saturated_fat",
                    "amount_per_serving"=>4,
                    "daily_value"=>"20%",
                    "unit"=>"g",
                ),
                array("item"=>"cholestrol",
                    "amount_per_serving"=>0,
                    "daily_value"=>"0%",
                    "unit"=>"mg",
                ),
                array("item"=>"sodium",
                    "amount_per_serving"=>220,
                    "daily_value"=>"9%",
                    "unit"=>"mg",
                ),
                array("item"=>"total_carb",
                    "amount_per_serving"=>31,
                    "daily_value"=>"10%",
                    "unit"=>"g",
                ),
                array("item"=>"vitamin_A",
                    "amount_per_serving"=>0,
                    "daily_value"=>"0%",
                    "unit"=>"mg",
                ),
                array("item"=>"calcium",
                    "amount_per_serving"=>0,
                    "daily_value"=>"2%",
                    "unit"=>"mg",
                )
            )
        ),

        array(
            "serving_size"=>"1 Sandwich (257 g)",
            "serving_per_container"=>3,
            "facts"=>array(
                array("item"=>"calories",
                    "amount_per_serving"=>200,
                    "daily_value"=>"",
                    "unit"=>"cal",
                ),
                array("item"=>"calories_from_fat",
                    "amount_per_serving"=>70,
                    "daily_value"=>"",
                    "unit"=>"cal",
                ),
                array("item"=>"total_fat",
                    "amount_per_serving"=>7,
                    "daily_value"=>"11%",
                    "unit"=>"g",
                ),
                array("item"=>"saturated_fat",
                    "amount_per_serving"=>4,
                    "daily_value"=>"20%",
                    "unit"=>"g",
                ),
                array("item"=>"cholestrol",
                    "amount_per_serving"=>0,
                    "daily_value"=>"0%",
                    "unit"=>"mg",
                ),
                array("item"=>"sodium",
                    "amount_per_serving"=>220,
                    "daily_value"=>"9%",
                    "unit"=>"mg",
                ),
                array("item"=>"total_carb",
                    "amount_per_serving"=>31,
                    "daily_value"=>"10%",
                    "unit"=>"g",
                ),
                array("item"=>"vitamin_A",
                    "amount_per_serving"=>0,
                    "daily_value"=>"0%",
                    "unit"=>"mg",
                ),
                array("item"=>"calcium",
                    "amount_per_serving"=>0,
                    "daily_value"=>"2%",
                    "unit"=>"mg",
                )
            )
        ),
        array(
            "serving_size"=>"1 dish (200 g)",
            "serving_per_container"=>4,
            "facts"=>array(
                array("item"=>"calories",
                    "amount_per_serving"=>200,
                    "daily_value"=>"",
                    "unit"=>"cal",
                ),
                array("item"=>"calories_from_fat",
                    "amount_per_serving"=>70,
                    "daily_value"=>"",
                    "unit"=>"cal",
                ),
                array("item"=>"total_fat",
                    "amount_per_serving"=>7,
                    "daily_value"=>"11%",
                    "unit"=>"g",
                ),
                array("item"=>"saturated_fat",
                    "amount_per_serving"=>4,
                    "daily_value"=>"20%",
                    "unit"=>"g",
                ),
                array("item"=>"cholestrol",
                    "amount_per_serving"=>0,
                    "daily_value"=>"0%",
                    "unit"=>"mg",
                ),
                array("item"=>"sodium",
                    "amount_per_serving"=>220,
                    "daily_value"=>"9%",
                    "unit"=>"mg",
                ),
                array("item"=>"total_carb",
                    "amount_per_serving"=>31,
                    "daily_value"=>"10%",
                    "unit"=>"g",
                ),
                array("item"=>"vitamin_A",
                    "amount_per_serving"=>0,
                    "daily_value"=>"0%",
                    "unit"=>"mg",
                ),
                array("item"=>"calcium",
                    "amount_per_serving"=>0,
                    "daily_value"=>"2%",
                    "unit"=>"mg",
                )
            )
        ),

        array(
            "serving_size"=>"1 sandwich (257 g)",
            "serving_per_container"=>1,
            "facts"=>array(
                array("item"=>"calories",
                    "amount_per_serving"=>200,
                    "daily_value"=>"",
                    "unit"=>"cal",
                ),
                array("item"=>"calories_from_fat",
                    "amount_per_serving"=>70,
                    "daily_value"=>"",
                    "unit"=>"cal",
                ),
                array("item"=>"total_fat",
                    "amount_per_serving"=>7,
                    "daily_value"=>"11%",
                    "unit"=>"g",
                ),
                array("item"=>"saturated_fat",
                    "amount_per_serving"=>4,
                    "daily_value"=>"20%",
                    "unit"=>"g",
                ),
                array("item"=>"cholestrol",
                    "amount_per_serving"=>0,
                    "daily_value"=>"0%",
                    "unit"=>"mg",
                ),
                array("item"=>"sodium",
                    "amount_per_serving"=>220,
                    "daily_value"=>"9%",
                    "unit"=>"mg",
                ),
                array("item"=>"total_carb",
                    "amount_per_serving"=>31,
                    "daily_value"=>"10%",
                    "unit"=>"g",
                ),
                array("item"=>"vitamin_A",
                    "amount_per_serving"=>0,
                    "daily_value"=>"0%",
                    "unit"=>"mg",
                ),
                array("item"=>"calcium",
                    "amount_per_serving"=>0,
                    "daily_value"=>"2%",
                    "unit"=>"mg",
                )
            )
        ),
        array(
            "serving_size"=>"1 slice (50 g)",
            "serving_per_container"=>12,
            "facts"=>array(
                array("item"=>"calories",
                    "amount_per_serving"=>200,
                    "daily_value"=>"",
                    "unit"=>"cal",
                ),
                array("item"=>"calories_from_fat",
                    "amount_per_serving"=>70,
                    "daily_value"=>"",
                    "unit"=>"cal",
                ),
                array("item"=>"total_fat",
                    "amount_per_serving"=>7,
                    "daily_value"=>"11%",
                    "unit"=>"g",
                ),
                array("item"=>"saturated_fat",
                    "amount_per_serving"=>4,
                    "daily_value"=>"20%",
                    "unit"=>"g",
                ),
                array("item"=>"cholestrol",
                    "amount_per_serving"=>0,
                    "daily_value"=>"0%",
                    "unit"=>"mg",
                ),
                array("item"=>"sodium",
                    "amount_per_serving"=>220,
                    "daily_value"=>"9%",
                    "unit"=>"mg",
                ),
                array("item"=>"total_carb",
                    "amount_per_serving"=>31,
                    "daily_value"=>"10%",
                    "unit"=>"g",
                ),
                array("item"=>"vitamin_A",
                    "amount_per_serving"=>0,
                    "daily_value"=>"0%",
                    "unit"=>"mg",
                ),
                array("item"=>"calcium",
                    "amount_per_serving"=>0,
                    "daily_value"=>"2%",
                    "unit"=>"mg",
                )
            )
        )
    );

    function getAllMeals(): ?array{
        $sql = "Select id from meal";
        $result = array();
        foreach (mysqli_fetch_all(mysqli_query($this->connection, $sql)) as $id){
            array_push($result,$this->getMealById($id[0][0]));
        }
        return $result;
    }
    function getMealById($id){
        $sql = "SELECT * from meal where id = $id";
        $result = mysqli_query($this->connection, $sql);
        $result = mysqli_fetch_assoc($result);

        $average= mysqli_query($this->connection, "SELECT AVG(rating) as rating FROM reviews where meal_id = $id");
        $average = mysqli_fetch_assoc($average);

        $average['rating'] = number_format($average['rating'], 1);
        $result['price'] = number_format($result['price'], 1);

        $result += ["rating" => $average['rating']];
        $result += ["nutrition"=>$this->mealsNutritions[$id-1]];
        return $result;
    }
    function addMealReview(array $review, $image_name){
        $text = $review["review"]; $id = $review["meal_id"]; 
        $auth = $review["reviewer_name"]; $rating = $review["rating"];
        $city = $review["city"];
        $sql = "INSERT INTO reviews (reviewer_name, city, rating, image, review, meal_id) 
        VALUES ('$auth', '$city', '$rating', '$image_name', '$text', '$id')";
        $result = mysqli_query($this->connection, $sql);
    }
    function getMealReviews($id){
        $sql = "Select * from reviews where meal_id = $id";
        $result = mysqli_query($this->connection, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}

?>