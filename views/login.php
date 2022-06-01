<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/login.css">
    <title>Login</title>
  </head>
  <body>
  <?php
    include "config/config.php";
    include "scripts/Navbar.php";
  ?>
    <form action="login.php" method="POST">
      <div class="form-input text-area mx-auto">
        <div class="row m-3">
          <div class="column">
            <label for="username" class="form-label">Username:</label>
          </div>
          <div class="column">
            <input type="text" name="username" class="form-control">
          </div>
        </div>
        <div class="row m-3">
          <div class="flex-column">
            <label for="password" class="form-label">Password:</label>
          </div>
          <div class="column">
            <input type="password" name="password" id="password" class="form-control">
          </div>
        </div>
        <div class="row m-auto">
          <div class="flex-column-12">
            <button type="submit" name="login_user" class="btn btn-dark w-75 m-5  "> Sign In</button>
          </div>
        </div>
      </div>
    </form>
    <?php  if (count($errors) > 0) : ?>
      <div class="error">
        <?php foreach ($errors as $error) : ?>
          <p><?php echo $error ?></p>
        <?php endforeach ?>
      </div>
    <?php  endif ?>
  </body>
</html>