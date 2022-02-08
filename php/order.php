<?php
setcookie("recent-bought", $_COOKIE["cart"], time()+(86400)*30, "/");
setcookie("cart", 0, time()-1, "/");
header('Location: ../index.php');
?>