<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="../styles/homepage.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Home Page</title>
  </head>
  <body>
    <!-- <script src="./scripts/Navbar.js"></script> -->
    <?php
    include "scripts/Navbar.html"
    ?>
    <div class="m-5" id="text-area">
      <h2>
        About Us
      </h2>
      <hr>
      <p>
        This is the website for the public library in the 7th district. We will provide you a place to find all the books to satisfy your eager brains. You will 
        find books that are currently available at the local library for borrowing in the library section, that will be opened once you login. You can view 
        your account and edit it in the profile section. YOu can request to borrow book online and have your order ready till you come pick it up.
      </p>
    </div>
    <div class="m-5" id="text-area">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators" >
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../public/slides/first.png" class="d-block w-50" alt="1">
          </div>
          <div class="carousel-item">
            <img src="../public/slides/second.2.png" class="d-block w-50" alt="2">
          </div>
          <div class="carousel-item">
            <img src="../public/slides/third.2.png" class="d-block w-50" alt="3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </body>
</html>