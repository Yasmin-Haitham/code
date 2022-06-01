<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/library.css">
    <title>Library</title>
  </head>
  <body>
  <?php
    include "scripts/Navbar.php"
  ?>

  <div class="m-3 w-100">
    <h1>Books</h1>
  </div>
  <hr>
  <div class="myctr">
    <a class="mybtn mx-5 my-2" href="./books.php">Add book</a>
  </div>
  <div class="books-group mx-5">
    <div class="book-card">
      <span class="book-title"> This is the book title</span>
      <div class="book-details">
        <li>description</li>
        <li>Author</li>
        <li>copies</li>
        <li>genre</li>
      </div>
    </div>
    <div class="book-card">
      <span class="book-title"> This is the book title</span>
      <div class="book-details">
        <li>description</li>
        <li>Author</li>
        <li>copies</li>
        <li>genre</li>
      </div>
    </div>
    <div class="book-card">
      <span class="book-title"> This is the book title</span>
      <div class="book-details">
        <li>description</li>
        <li>Author</li>
        <li>copies</li>
        <li>genre</li>
      </div>
    </div>
    <div class="book-card">
      <span class="book-title"> This is the book title</span>
      <div class="book-details">
        <li>description</li>
        <li>Author</li>
        <li>copies</li>
        <li>genre</li>
      </div>
    </div>
    <div class="book-card">
      <span class="book-title"> This is the book title</span>
      <div class="book-details">
        <li>description</li>
        <li>Author</li>
        <li>copies</li>
        <li>genre</li>
      </div>
    </div>
    <div class="book-card">
      <span class="book-title"> This is the book title</span>
      <div class="book-details">
        <li>description</li>
        <li>Author</li>
        <li>copies</li>
        <li>genre</li>
      </div>
    </div>
  </div>
  </body>
</html>