var navbar =`
<link  href="../styles/navbar.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-light" >
    <div class="container-fluid">
        <a class="navbar-brand" id="logo" href="/" style="width = 15%"> <img src="../public/mylogo1.png" alt="book logo"/></a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="true" aria-label="Toggle navigation" display= "flex-end"><span class="navbar-toggler-icon" ></span></button>
        <div class="collapse jus navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="/signup">Signup</a>
                <a class="nav-link" href="/login">Login</a>
                <a class="nav-link" href="/Library">Library</a>
                <div>
                    <form class="d-flex  input-group w-auto">
                    <input
                        type="search"
                        class="form-control"
                        placeholder="Enter your search"
                        aria-label="Search"
                    />
                    <button
                        class="btn btn-outline-dark"
                        type="button"
                        data-mdb-ripple-color="dark"
                    >
                        Search
                    </button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</nav>`;
document.body.insertAdjacentHTML("afterbegin",navbar)