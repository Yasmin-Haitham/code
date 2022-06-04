<?php
// initializing variables
$Book = "";
$errors = array(); 
echo '<script>console.log("library")</script>';
// connect to the database
$db_book = mysqli_connect('localhost', 'root', '', 'registration');
if($db_book === false){
    echo '<script>console.log("Adding book")</script>';
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo '<script>console.log("connection success")</script>';



?>