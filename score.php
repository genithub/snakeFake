<?php

$servername = "localhost";
$username = "root";
$password = "myniki123";
$dbname = "games";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = isset($_POST['name']) ? $_POST['name'] : null;

$score = isset($_POST['score']) ? $_POST['score'] : null;

$sql_get = mysqli_query($conn, "SELECT `pinnacle` FROM `snake` WHERE `name` = '$name' ORDER BY `pinnacle` DESC LIMIT 1");

$row = mysqli_fetch_assoc($sql_get);
$pinnacle_latest = (int)$row['pinnacle'];


if($score > $pinnacle_latest){
$sql = mysqli_query($conn, "INSERT INTO snake (id, name, score, pinnacle)
VALUES ('', '$name', '$score', '$score')");
$sql_update = mysqli_query($conn, "UPDATE snake SET pinnacle='$score' WHERE name='$name'");
}
else{
$sql = mysqli_query($conn, "INSERT INTO snake (id, name, score, pinnacle)
VALUES ('', '$name', '$score', '$pinnacle_latest')");

}

$conn->close();



?>