
<link  href="../styles/navbar.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light" >
    <div class="container-fluid">
        <a class="navbar-brand" id="logo" href="/" > <img src="../public/mylogo1.png" alt="book logo"/></a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="true" aria-label="Toggle navigation" display= "flex-end"><span class="navbar-toggler-icon" ></span></button>
        <div class="collapse jus navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="./homepage.php">Home</a>
                <?php 
                    
                    if(!isset($_SESSION['username'])):
                        echo '<a class="nav-link" href="./signup.php">Signup</a>';
                        echo '<a class="nav-link" href="./login.php">Login</a>';
                    else:
                        echo' <a class="nav-link" href="./Library.php">Library</a>';
                        echo '<a href="./config/logout.php" class="nav-link" name="logout">Logout</a>';
                    endif;
                    
                ?>
                <div>
                    <form method="POST" action="./library.php" class="d-flex  input-group w-auto">
                    <input
                        type="text"
                        name="searchVal"
                        class="form-control"
                        placeholder="Enter your search"
                        aria-label="Search"
                    />
                    <button
                        class="btn btn-outline-dark"
                        type="submit"
                        name="searchbtn"
                        data-mdb-ripple-color="dark"
                    >
                        Search
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>