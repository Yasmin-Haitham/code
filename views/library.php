<?php 
  include "config/config.php"; 
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
    include "scripts/Navbar.php";
    if(isset($_POST['searchbtn'])){
      if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
      }
      $searchVal=mysqli_real_escape_string($db, $_POST['searchVal']);
      $result = mysqli_query($db,"SELECT * FROM books where BookTitle='$searchVal' ");
    }else{
      $query = "SELECT * FROM `books` WHERE 1";
      $result = mysqli_query($db,$query);}
    if (mysqli_num_rows($result) > 0) {
  ?>

  <div class="m-3 w-100">
    <h1>Books</h1>
  </div>
  <hr>
  <div class="myctr">
    <a class="mybtn mx-5 my-2" href="./books.php">Add book</a>
  </div>
  <div class="books-group mx-5">
  <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
  ?>

    <div class="book-card">
      <span class="book-title">Book Title: <?php echo $row["BookTitle"]; ?></span>
      <div class="book-details">
        <li>ISBN: <?php echo $row["ISBN"]; ?></li>
        <li>Author: <?php echo $row["BookAuthor"]; ?></li>
        <li>Genre: <?php echo $row["Bookgenre"]; ?></li>
        <li>Number of copies: <?php echo $row["BookCopies"]; ?></li>
        <br>
        <a href="./config/delete-process.php?ISBN=<?php echo $row["ISBN"]; ?>" class="deletebtn  ">Delete</a>
      </div>
    </div>
  <?php
    $i++;
  }
}
else{
    echo "No Books found";
}?>
  </div>
  <br>
  <?php include './scripts/Footer.php'?>
  </body>
</html>