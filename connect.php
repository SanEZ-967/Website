<?php
$servername = "project-db.czt0dheppn3x.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "lab-password";
$database = "Project_DB";


$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Error in connection" . mysqli_connect_error());
}
else{
    // echo "Connection successfull";
}


?>
