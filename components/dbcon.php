<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ikvsp";


// Connect to MySQL server
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
// else {
//    echo "<spam style='color:#fff;'>Connected successfully</spam>";
//    echo "<br>";
// }
?>