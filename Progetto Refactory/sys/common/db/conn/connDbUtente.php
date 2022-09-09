<?php

$servername = " ... ";
$username = " ... ";
$password = " ... ";
$dbname = " ... ";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
 echo "Failed to connect to MySQL: " . mysqli_error($conn);
}

?>
