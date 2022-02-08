<?php

function e($value): String {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$method = $_SERVER["REQUEST_METHOD"];
require_once 'Meal_db.php';
$meal_Obj = new Meal_db();

if ($method == "GET") {
    echo json_encode($meal_Obj->getMealReviews($_GET["meal_id"]));
}
elseif ($method == "POST") {
    $file = $_FILES['Image']; 
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $fileNameNew = "";

    if($fileError === 0){
        $fileNameNew = uniqid('', true).".".$fileActualExt; 
        $fileDestination = '../reviewImages/'.$fileNameNew; 
        move_uploaded_file($fileTmpName, $fileDestination); 
    }else{
        header("Location: error.php"); 
    }

    $data = array("review"=>e($_POST['Review']), "meal_id"=>$_POST['meal_id'], 
    "rating"=>$_POST['rate'], "city"=>e($_POST['city']),"reviewer_name"=>e($_POST['name']));

    $meal_Obj->addMealReview($data, $fileNameNew);
} 
?>