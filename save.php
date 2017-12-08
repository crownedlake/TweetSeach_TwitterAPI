<?php
$text = $_GET["text"];
$uname=$_GET["uname"];
$uname = addslashes($uname);
$text = addslashes($text);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "twitterdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO savedtweets (text,username)
VALUES ('$text','$uname');";

if ($conn->query($sql) === TRUE) {
    echo "1";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>