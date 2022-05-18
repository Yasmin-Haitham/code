<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/signup.css">
    <title>Sign up</title>
  </head>
  <body>
    <?php
      include "scripts/Navbar.html"
    ?>
    <div>
      <!-- NOTE TO SELF 
        enctype allows us to upload images using php later on 
        action should have the php file for sign up usually in pug it was a path try to find what is the diffrence -->
      <form action="..." method="POST" enctype="multipart/form-data">
        <div class="row form-input">
          

          <!-- this is the left side LS stands for left side -->
          <div class="col" id="LS">
            <!-- input image -->
            <div class="col">
              <img src="../public/placeholders/blank-profile-picture-973460_640.webp" id="dp" alt="empty head icon">
            </div>
            <div class="row mt-5">
              <input type="file" class="form-control" alt="your image input">
            </div>
          </div>


          <!-- this is the right side RS stands for right side -->
          <div class="col" id="RS">
            <!-- input name -->
            <div class="row m-2">
              <div class="col-6">
                <label for="name" class="formlabel">Name:</label>
              </div>
              <div class="col-6">
                <input type="text" name="name" id="name" class="form-control">
              </div>
            </div>
            <!-- input username -->
            <div class="row m-2">
              <div class="col-6">
                <label for="username" class="formlabel">Username:</label>
              </div>
              <div class="col-6">
                <input type="text" name="username" id="username" class="form-control">
              </div>
            </div>
            <!-- input password -->
            <div class="row m-2">
              <div class="col-6">
                <label for="password" class="formlabel">Password:</label>
              </div>
              <div class="col-6">
                <input type="password" name="password" id="password" class="form-control">
              </div>
            </div>
            <!-- input DoB satnds for Date of birth -->
            <div class="row m-2">
              <div class="col-6">
                <label for="DOB" class="formlabel">Date of Birth:</label>
              </div>
              <div class="col-6">
                <input type="date" name="DoB" id="DoB" class="form-control">
              </div>
            </div>
            <!-- input occupation -->
            <div class="row m-2">
              <div class="col-6">
                <label for="occupation" class="formlabel">Occupation:</label>
              </div>
              <div class="col-6">
                <select name="occupation" id="occupation" class="form-select">
                  <option value="student">Student</option>
                  <option value="employed">Employed</option>
                  <option value="unempolyed">Unemployed</option>
                </select>
              </div>
            </div>
            <!-- submit button -->
            <div class="row-cols-lg-auto m-2 mt-5 float-sm-end">
              <button type="submit" class="btn btn-dark">Signup</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>