<?php
// initializing variables
$Book = "";
$errors = array(); 

// connect to the database
$db_book = mysqli_connect('localhost', 'root', '', 'registration');
if($db_book === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = 'SELECT * from books'
?>