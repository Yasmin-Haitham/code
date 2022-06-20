<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');
 
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $role = "USER";

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password , role) 
  			  VALUES('$username', '$email', '$password' , '$role')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
    $_SESSION['role'] = $row['role'];
  	$_SESSION['msg'] = "Logged in";
  	
  	header('location: homepage.php');
  }
  mysqli_free_result($result);
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
    $row = mysqli_fetch_array($results);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
      $_SESSION['role'] = $row['role'];
  	  $_SESSION['msg'] = "Logged in";
  	  header('location: library.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
  mysqli_free_result($result);
}
//ADD BOOKS

if(isset($_POST['add_book'])){
  // receive all input values from the form
  $BookTitle = mysqli_real_escape_string($db, $_POST['BookTitle']);
  $ISBN = mysqli_real_escape_string($db, $_POST['ISBN']);
  $BookAuthor = mysqli_real_escape_string($db, $_POST['BookAuthor']);
  $BookGenre = mysqli_real_escape_string($db, $_POST['BookGenre']);
  $BookCopies = mysqli_real_escape_string($db, $_POST['BookCopies']);

  // first check the database to make sure 
  // a book does not already exist with the same Title or ISBN
  $book_check_query = "SELECT * FROM books WHERE BookTitle ='$BookTitle' or ISBN ='$ISBN' LIMIT 1";
  $result = mysqli_query($db, $book_check_query);
  $book = mysqli_fetch_assoc($result);

  if ($book) { // if book exists
      if ($book['BookTitle'] === $BookTitle) {
          array_push($errors, "Book already exists");
          
      }
      if ($book['ISBN'] === $ISBN) {
          array_push($errors, "Book with same ISBN already exists");
          
      }
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  
    $query = "INSERT INTO `books` (`BookTitle`, `ISBN`, `BookAuthor`, `BookCopies`, `Bookgenre`) VALUES ('$BookTitle', '$ISBN', '$BookAuthor', '$BookCopies', '$BookGenre')";
    mysqli_query($db, $query);
    header('location: library.php');
  }
  mysqli_free_result($result);}

?>