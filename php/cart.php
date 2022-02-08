<?php
$cookie_name = "cart";
$cookie_value = $_GET["id"];
if(!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, $cookie_value, time()+(86400)*30, "/");
    if (isset($_GET["quantity"])){
        for ($i=1; $i < $_GET["quantity"]; $i++) { 
            setcookie($cookie_name, $_COOKIE[$cookie_name].",".$cookie_value, time()+(86400)*30, "/");
        }
    }
}
else{
    setcookie($cookie_name, $_COOKIE[$cookie_name].",".$cookie_value, time()+(86400)*30, "/");
    if (isset($_GET["quantity"])){
        for ($i=1; $i < $_GET["quantity"]; $i++) { 
            setcookie($cookie_name, $_COOKIE[$cookie_name].",".$cookie_value, time()+(86400)*30, "/");
        }
    }
}
header('Location: ../'.$_GET["back"]);
?>