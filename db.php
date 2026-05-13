<?php
// Macluumaadka xiriirka database-ka
$host = "localhost";
$user = "root"; 
$pass = ""; // Haddii aad XAMPP isticmaalayso, inta badan waa maran tahay
$dbname = "coffee_shop_db";

// Samaynta xiriirka
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Hubinta xiriirka
if (!$conn) {
    die("Xiriirka database-ka waa fashilmay: " . mysqli_connect_error());
}

// Si uu website-ku u garto xarfaha Soomaaliga/Carabiga si sax ah
mysqli_set_charset($conn, "utf8mb4");
?>

