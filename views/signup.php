<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/login.css">
    <title>Sign up</title>
  </head>
  <body>
    <?php
      
      include "config/config.php";
      include "scripts/Navbar.php";
    ?>
    <div>
      <!-- NOTE TO SELF 
        enctype allows us to upload images using php later on 
        action should have the php file for sign up usually in pug it was a path try to find what is the diffrence -->
      <form action="signup.php" method="POST" enctype="multipart/form-data">
        <div class="row form-input mx-auto text-area">
          <div class="col" >
            <div class="row m-2">
              <div class="col-6">
                <label for="username" class="formlabel">Username:</label>
              </div>
              <div class="col-6">
                <input type="text" name="username" id="username" class="form-control">
              </div>
            </div>
            <div class="row m-2">
              <div class="col-6">
                <label for="email" class="formlabel">Email:</label>
              </div>
              <div class="col-6">
                <input type="email" name="email"  class="form-control">
              </div>
            </div>
            <!-- input password -->
            <div class="row m-2">
              <div class="col-6">
                <label for="password" class="formlabel">Password 1:</label>
              </div>
              <div class="col-6">
                <input type="password" name="password_1" class="form-control">
              </div>
            </div>
            <div class="row m-2">
              <div class="col-6">
                <label for="password" class="formlabel">Password 2:</label>
              </div>
              <div class="col-6">
                <input type="password" name="password_2" class="form-control">
              </div>
            </div>
            <!-- submit button -->
            <div class="row-cols-lg-auto m-2 mt-5 float-sm-end">
              <button type="submit" name="reg_user" class="btn btn-dark">Signup</button>
            </div>
          </div>
        </div>
      </form>

    </div>
    <?php  if (count($errors) > 0) : ?>
      <div class="error">
        <?php foreach ($errors as $error) : ?>
          <p><?php echo $error ?></p>
        <?php endforeach ?>
      </div>
    <?php  endif ?>
    
  </body>
</html>