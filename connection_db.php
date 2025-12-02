<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrationform";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    // echo "Connected Successfully";
} else {
    echo "Connnect Failed";
    mysqli_connect_error();
}

?>